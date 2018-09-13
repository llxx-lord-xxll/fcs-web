<?php

namespace App\Http\Controllers;

use App\Databases\SiteForms;
use App\Databases\SiteLayouts;
use App\Databases\SitePages;
use App\Databases\SiteStories;
use App\Databases\SiteTemplates;
use App\Rules\UniqueWhere;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\Throw_;
use Stripe\Stripe;
use Symfony\Component\CssSelector\Parser\Token;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Illuminate\Support\Facades\Validator;
use Newsletter;

class RouteController extends Controller
{

    public function index()
    {
      return '';
    }

    public function show(Request $request)
    {
        switch ($request->method())
        {
            case 'GET':
                if(substr(ltrim($request->path(),'/'),0,5) == "posts")
                {
                    $post_slug = str_after(ltrim($request->path(),'/'),"posts/");
                    $post_slug = str_before($post_slug,"?");
                    $tmp = 0;
                    foreach (SiteStories::all() as $row)
                    {
                        if ($row->post_slug == $post_slug)
                        {
                            $tmp = 1;
                            return view('layouts.post')->with('data',$row)->with('menus', WidgetParser::buildMenuWidget());

                        }
                    }
                    if ($tmp == 0)
                    {
                        return view('404')->with('menus', WidgetParser::buildMenuWidget());
                    }
                }

                foreach(SitePages::where('visibility','=','1')->get() as $row)
                {
                    if (ltrim($row->permalink,'/') == ltrim($request->path(),'/'))
                    {
                        try{
                            $template = 'layouts.'.SiteLayouts::find(SiteTemplates::find($row->template_id)->layout_id)->slug;
                            $data = WidgetParser::parse($row->id,$row->template_id);
                            return view($row->slug)->with('request',$request)->with('template',$template)->with('menus', WidgetParser::buildMenuWidget())->with('data',$data)->with('page_title',$row->title);
                        }
                        catch (NotFoundResourceException $e)
                        {
                            return view('404')->with('menus', WidgetParser::buildMenuWidget());
                        }
                    }
                }

                return view('404')->with('menus', WidgetParser::buildMenuWidget());
            break;
            case 'POST':
            if(substr(ltrim($request->path(),'/'),0,5) == "forms")
            {
                $form_id = str_after(ltrim($request->path(),'/'),"forms/");
                $form = SiteForms::find($form_id);

                $validator_rules = array();
                $validator_names = array();
                if ($form)
                {
                    foreach (DB::table('site_form_fields')->where('form_id','=',$form_id)->get() as $input)
                    {
                        $vals = $input->field_ivals;
                        if ($input->field_type=='radiobutton' || $input->field_type=='checkbox' || $input->field_type=='select')
                        {
                            $vType = 'array';
                        }
                        else
                        {
                            $vType = 'string';
                        }

                        $rules = explode("\r\n",$input->field_rules);
                        $input->required = "";
                        switch ($vType)
                        {
                            case 'array':
                                $vals = explode("\r\n",$vals);
                                $tmp = array();
                                foreach ($vals as $val)
                                {
                                    $tmp[str_slug($val)] = $val;
                                }
                                $vals = $tmp;
                                break;
                            case 'string':
                                $vals = rtrim(ltrim($vals,'""'),'"');
                                break;
                        }


                        foreach ($rules as $key => $rule)
                        {
                            switch ($rule)
                            {
                                case 'unique':
                                    $rules[$key] = new UniqueWhere($input->form_id,$input->id);
                                    break;
                                case 'in':
                                    if ($vType == 'array')
                                    {
                                        $rules[$key] = Rule::in(array_keys($vals));
                                    }
                                    else
                                    {
                                        $vals = explode("\r\n",$vals);
                                        $tmp = array();
                                        foreach ($vals as $val)
                                        {
                                            $tmp[str_slug($val)] = $val;
                                        }
                                        $vals = $tmp;
                                        $rules[$key] = Rule::in($vals);
                                    }

                                    break;
                                case 'required':
                                    $input->required = 'required';
                                    break;
                            }
                        }
                        $validator_rules[$input->field_name] = $rules;
                        $validator_names[$input->field_name] = rtrim(str_replace("*","",$input->field_title)," ");

                    }
                    try
                    {
                        $validator = Validator::make($request->all(),$validator_rules)->setAttributeNames($validator_names);
                        if($validator->fails())
                        {
                            return Redirect::back()->withErrors($validator)->withInput();
                        }
                        else
                        {
                            try
                            {
                                $arrToInsert = array_except($request->all(),['_token','agreement']);            //Trimming extras
                                //Moving and renaming file inputs
                                foreach ($request->file() as $key => $file)
                                {
                                    $ext = $request->file($key)->getClientOriginalExtension();
                                    $deckname = md5(uniqid()) . '.' . $ext;
                                    $file->move(base_path('public/uploads/files/'.$ext), $deckname);
                                    $arrToInsert[$key] = 'public/uploads/files/'.$ext . '/' . $deckname;
                                }

                                $sub = DB::table('site_forms_submissioon')->insertGetId(array('id'=>null,'form_id'=>$form_id,'ip'=> $request->ip(),'ua'=>$request->userAgent(),'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()));

                                foreach (DB::table('site_form_fields')->where('form_id','=',$form_id)->get() as $input)
                                {
                                    if (array_key_exists($input->field_name,$arrToInsert))
                                    {
                                        DB::table('site_forms_data')->insert(array('submission_id'=>$sub,'field_id'=>$input->id,'field_data'=> $arrToInsert[$input->field_name]));
                                    }
                                    else
                                    {
                                        DB::table('site_forms_data')->insert(array('submission_id'=>$sub,'field_id'=>$input->id,'field_data'=> null));
                                    }

                                }

                                //Preparation of Subscribing to newsletter
                                if ($request->has('newsletter_subscription'))
                                {
                                    if ($request->input('newsletter_subscription') == 'y')
                                    {
                                        $this->go_newsletter($form,$request);
                                    }
                                }

                                $this->go_subscribe($form,$request);        //Subscribe to newsletter

                                if ($form->payment==1)
                                {
                                    $amount = 0;
                                    $description = "";

                                    if ($form->payment_charge == 0 || $form->payment_charge == null)
                                    {
                                        $package = DB::table('site_packages')->find($request->input('payment_package'));
                                        $package_group = DB::table('site_package_group')->find($package->package_group_id);

                                        if ($package_group)
                                        {
                                            $package_group = $package_group->title;
                                        }
                                        else
                                        {
                                            $package_group = "";
                                        }

                                        if ($package)
                                        {
                                            $amount = $package->price * 100;
                                            $description = "Payment for $package->title in $package_group";
                                        }
                                        else
                                        {
                                            //Throw error
                                        }
                                    }
                                    else
                                    {
                                        $description = $form->title . " Payment";
                                        $amount = $form->payment_charge * 100;
                                    }
                                    //Handle payment, Charge
                                    if ($request->has('stripeToken'))
                                    {
                                        Stripe::setApiKey(env("STRIPE_SECRET"));


                                       $customer = $this->GetStripeCustomer($request->input('email'));

                                           if (!empty($customer)){

                                                   $card = $customer->sources->create(array(
                                                           "source" => $request->input('stripeToken')
                                                       ));
                                                   $customer->default_source = $card->id;
                                                   $customer->save();

                                                   $charge = \Stripe\Charge::create(array(
                                                       'customer' => $customer->id,
                                                       'amount' => $amount,
                                                       'currency' => 'usd',
                                                       'description' => $description,
                                                   ));
                                                DB::table('site_forms_submissioon')->where('id','=',$sub)->update(['stripe_charge'=>$charge->id]);

                                               }else{
                                                    Throw new \Exception("Something wrong with the email address provided");
                                           }

                                    }

                                }



                                $suc = (new MessageBag())->add('none','Submitted successfully, we shall contact you via email for further assistance');
                                return Redirect::back()->with('success',$suc);

                            }
                            catch (\Exception $e)
                            {
                                DB::table('site_forms_data')->where('submission_id', '=' , $sub)->delete();
                                DB::table('site_forms_submissioon')->where('id','=',$sub)->delete();

                                $err = new MessageBag();
                                //$err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                                $err->add('none', $e->getMessage() );
                                return Redirect::back()->withErrors($err)->withInput();
                            }
                        }
                    }
                    catch (\Exception $e)
                    {
                        DB::table('site_forms_data')->where('submission_id', '=' , $sub)->delete();
                        DB::table('site_forms_submissioon')->where('id','=',$sub)->delete();

                        $err = new MessageBag();
                        //$err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                        $err->add('none',$e->getMessage());
                        return Redirect::back()->withErrors($err)->withInput();
                    }



                    break;





                    //dump(array_except($request->all(),'_token'));

                }

            }

                break;
        }

    }

    private function go_newsletter($form,Request $request)
    {

        if ($form->newsletter == 1)
        {
            if($request->input('email'))
            {
                $arr = array();

                foreach (DB::table('site_forms_subscription')->where('form_id','=',$form->id)->where('subscription_type','=','newsletter')->get() as $input)
                {

                    $arr[$input->list_field_name] = $request->input($input->form_field_name);
                }
                Newsletter::subscribeOrUpdate($request->input('email'), $arr,'newsletter');

            }
        }
    }

    private function go_subscribe($form,$request)
    {

        if ($form->subscribers == 1)
        {
            if($request->input('email'))
            {
                $arr = array();

                foreach (DB::table('site_forms_subscription')->where('form_id','=',$form->id)->where('subscription_type','=','subscription')->get() as $input)
                {

                    $arr[$input->list_field_name] = $request->input($input->form_field_name);
                }


                Newsletter::subscribeOrUpdate($request->input('email'), $arr,$form->subscribers_confname);
            }
        }
    }

}
