<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use LVR\CountryCode\Two;

class ContactFormCTLR extends Controller
{
    private $suc = null;
    private $v;
    public function __construct()
    {
        $this->v =  View('contact');
    }

    public function returnView(Request $request)
    {
        if ($this->suc != null)
        {
            $this->v->with('success',$this->suc);
        }

        return $this->v;
    }

    public function submitToDB($name,$email,$country,$mob,$message)
    {
        $cf = new ContactForm();
        $cf->name = $name;
        $cf->email = $email;
        $cf->country = $country;
        $cf->mob = $mob;
        $cf->message = $message;
        if($cf->save())
        {
            return true;
        }


        return false;
    }

    public function submitForm(Request $request){
        $validator = Validator::make($request->all(),[
            'full-name' => 'required|regex:/^[\s\w-]*$/',
            'choose-country' => ['required',new Two()],
            'email-address' => 'required|email',
            'phone-number' => 'required|digits_between:8,15',
            'contact-message' => 'required|string|min:10|max:200',
        ])->setAttributeNames(['full-name' => 'full name',
            'choose-country' => 'nationality',
            'email-address' => 'email address',
            'phone-number' => 'phone number',
            'contact-message' => 'message']);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            $res = $this->submitToDB($request->input('full-name'),$request->input('email-address'),$request->input('choose-country'),$request->input('phone-number'),$request->input('contact-message'));
            if(!$res)
            {
                $err = new MessageBag();
                $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                return Redirect::back()->withErrors($err)->withInput();
            }
            $this->suc = 'Thank you for contacting with us, you will be notified through email';
            $data = ['email' => $request->input('email-address'),'name'=> $request->input('full-name'),'ip'=>$request->ip(),'msg' => $request->input('contact-message'),'mob' => $request->input('phone-number'),'country'=> $request->input('choose-country')];

            Mail::send('mails.contact-form', $data, function ($m) use ($data) {
                $m->from('no-reply@futurecitysummit.org', 'Future City Summit');
                $m->replyTo('community@futurecitysummit.org', 'Ms. Priya Ghandi');
                $m->to($data['email'], $data['name'])->subject('Contact Form Submitted - Future City Summit');
            });

            Mail::send('mails.contact-form-to-admin', $data, function ($m) use ($data) {
                $m->from($data['email'], $data['name']);
                $m->replyTo($data['email'], $data['name']);
                $m->to('community@futurecitysummit.org','Ms. Priya Ghandi' )->subject('A new contact form submitted - Future City Summit');
            });

            return $this->returnView($request);
        }
    }

}
