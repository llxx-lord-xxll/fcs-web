<?php

namespace App\Http\Controllers;

use App\Databases\SiteForms;
use App\Databases\SiteLayouts;
use App\Databases\SitePages;
use App\Databases\SiteStories;
use App\Databases\SiteTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;
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

                foreach(SitePages::all() as $row)
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
                    foreach (DB::table('site_form_entries')->where('form_id','=',$form_id)->get() as $input)
                    {
                        $vals = $input->field_ivals;
                        $vType = str_before($vals,"(");
                        $rules = explode("\r\n",$input->field_rules);
                        $input->required = "";
                        switch ($vType)
                        {
                            case 'array':
                                $vals = str_before(str_after($vals,"array("),")");
                                $vals = explode(",",$vals);
                                $tmp = array();
                                foreach ($vals as $val)
                                {
                                    $tmp[str_slug($val)] = ltrim(rtrim($val,'"'),'"');
                                }
                                $vals = $tmp;
                                break;
                            case 'string':
                                $vals = str_before(str_after($vals,"array("),")");
                                break;
                        }


                        foreach ($rules as $key => $rule)
                        {
                            switch ($rule)
                            {
                                case 'unique':
                                    $rules[$key] = 'unique:' . $form->table_name . ',' . $input->field_name;
                                    break;
                                case 'in':
                                    if ($vType == 'array')
                                    {
                                        $rules[$key] = Rule::in(array_keys($vals));
                                    }
                                    else
                                    {
                                        $rules[$key] = Rule::in(array($vals));
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

                                DB::table($form->table_name)->insert($arrToInsert);         //Insert to database

                                //Preparation of Subscribing to newsletter
                                if ($request->has('newsletter_subscription'))
                                {
                                    if ($request->input('newsletter_subscription') == 'y')
                                    {
                                        $this->go_newsletter($form,$request);
                                    }
                                }

                                $this->go_subscribe($form,$request);        //Subscribe to newsletter



                                $suc = (new MessageBag())->add('none','Submitted successfully, we shall contact you via email for further assistance');
                                return Redirect::back()->with('success',$suc);

                            }
                            catch (\Exception $e)
                            {

                                $err = new MessageBag();
                                $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                                $err->add('none',$e->getMessage());
                                return Redirect::back()->withErrors($err)->withInput();
                            }
                        }
                    }
                    catch (\Exception $e)
                    {
                        $err = new MessageBag();
                        $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
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
