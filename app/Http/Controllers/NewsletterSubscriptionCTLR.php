<?php

namespace App\Http\Controllers;

use App\NewsletterSubscriptions;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Mockery\Exception;

class NewsletterSubscriptionCTLR extends Controller
{
    private $suc = null;
    private $v;
    public function __construct()
    {
        $this->v =  View('overview-fcs18');
    }

    public function returnView(Request $request)
    {
        if ($this->suc != null)
        {
            $this->v->with('success',$this->suc);
        }

        return $this->v;
    }

    public function submitToDB($name,$email,$tag)
    {
        try{
            $cf = new NewsletterSubscriptions();
            $cf->name = $name;
            $cf->email = $email;
            $cf->tag = $tag;
            $cf->save();
            return encrypt($cf->id . '|' . $cf->email);
        }
        catch (\Exception $e)
        {
            return false;
        }


    }


    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'myname' => 'required|regex:/^[\s\w-]*$/',
            'email' => 'required|email'
        ])->setAttributeNames([
            'myname' => 'Name',
            'email' => 'email address'
            ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            $tag = null;
            if($request->has('tag'))
            {
                $tag = $request->input('tag');
            }

            $res = $this->submitToDB($request->input('myname'),$request->input('email'),$tag);
            if(!$res)
            {
                $err = new MessageBag();
                $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                return Redirect::back()->withErrors($err)->withInput();
            }

            $this->suc = 'Thank you for subscribing to our newsletter';
            $data = ['request'=>$request,'link' => env('APP_URL') . '/unsubscribe/' . $res];

            Mail::send('mails.newsletter-subscription', $data, function ($m) use ($data) {
                $m->from('no-reply@futurecitysummit.org', 'Future City Summit');
                $m->replyTo('community@futurecitysummit.org', 'Ms. Priya Ghandi');
                $m->to($data['request']->input('email'), $data['request']->input('myname'))->subject('Newsletter program - Future City Summit');
            });

            return $this->returnView($request);

        }


    }

    public function unsubscribe(Request $request,$code)
    {
        $v = View('newsletter-unsubscribe');
        try {
            $code = decrypt($code);
            $msg = '';
            if (strpos($code, '|') !== false) {
                $arrCode = explode('|', $code, 2);
                $get_unsub = NewsletterSubscriptions::where('id', '=', $arrCode[0])->where('email', '=', $arrCode[1])->first();
                if ($get_unsub) {
                    $get_unsub->delete();
                    $msg = "Your email $arrCode[1] will no longer receive any newsletter email further";

                } else {
                    $msg = "Your email $arrCode[1] is already unsubscribed";
                    $v->with('error', "1");
                }
                $v->with('msg', $msg);
            }
        }
        catch (DecryptException $e)
        {
            abort(404);
        }


        return $v;
    }


}
