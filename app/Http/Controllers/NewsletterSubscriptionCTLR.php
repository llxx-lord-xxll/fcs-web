<?php

namespace App\Http\Controllers;

use App\NewsletterSubscriptions;
use Illuminate\Http\Request;
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
        }
        catch (\Exception $e)
        {
            return false;
        }


        return true;
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
            $data = ['email' => $request->input('email-address'),'name'=> $request->input('full-name'),'ip'=>$request->ip(),'msg' => $request->input('contact-message'),'mob' => $request->input('phone-number'),'country'=> $request->input('choose-country')];

            return $this->returnView($request);

        }


    }




}
