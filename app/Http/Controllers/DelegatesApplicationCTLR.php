<?php

namespace App\Http\Controllers;

use App\DelegateForm;
use App\form_data;
use App\form_submissions;
use App\Rules\words;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;
use LVR\CountryCode\Two;


class DelegatesApplicationCTLR extends Controller
{
    private $suc = null;
    private $v;
    public function __construct()
    {
        $this->v =  View('delegates-application');
    }

    public function returnView(Request $request)
    {
        if ($this->suc != null)
        {
            $this->v->with('success',$this->suc);
        }

        return $this->v;
    }

    public function submitToDB(Request $request)
    {

        $deckname = null;
        if($request->has('delegate-pitching-deck'))
        {
            $deckname = $request->input('last_name') . '_' . $request->input('city_name') . '_' . md5(uniqid()) . '.' . $request->file('delegate-pitching-deck')->getClientOriginalExtension();
            $f = $request->file('delegate-pitching-deck');
            $f->move(base_path('public/uploads/pitching-decks'),$deckname);

        }
        $df = new DelegateForm();
        $df->title = $request->input('salutation');
        $df->first_name = $request->input('first_name');
        $df->last_name = $request->input('last_name');
        $df->preferred_name = $request->input('full_name');
        $df->nationality = $request->input('choose_country');
        $df->city = $request->input('city_name');
        $df->occupation = $request->input('occupation');
        $df->university = $request->input('university-name');
        $df->company = $request->input('company-organization');
        $df->ministry = $request->input('ministry-department');
        $df->email = $request->input('email_address');
        $df->mob = $request->input('phone_number');
        $df->facebook = $request->input('delegate-social-fb');
        $df->linkedin = $request->input('delegate-social-li');
        $df->scholarhub = $request->input('delegate-social-sh');
        $df->pitching_deck = $deckname;
        $df->purpose = $request->input('fcs-purpose');
        $df->city_message = $request->input('delegate-city-message');
        $df->track_conference = $request->input('track-conference');
        $df->chapter_referral = $request->input('fcs-chapter-referral');
        $df->referred_person = $request->input('referred-person');
        $df->fcs_package = $request->input('fcs-package');
        $df->scholarship = $request->input('fcs-scholarship');
        $df->newsletter_subscription = $request->input('fcs-newsletter-subscription');

        if($df->save())
        {
            return true;
        }


        return false;
    }

    public function submitForm(Request $request){

        $validator = Validator::make($request->all(),[
            'salutation' => ['required',Rule::in(['Mr.','Mrs.','Ms.'])],
            'first_name' => 'required|regex:/^[\s\w-]*$/',
            'last_name' => 'required|regex:/^[\s\w-]*$/',
            'full_name' => 'required|regex:/^[\s\w-]*$/',
            'choose_country' => ['required',new Two()],
            'city_name' => 'required|regex:/^[\s\w-]*$/',
            'occupation' => ['required',Rule::in(['student','corporate','ngos','government','university-scholar','others'])],
            'university-name' =>'nullable|regex:/^[\s\w-]*$/',
            'company-organization' =>'nullable|regex:/^[\s\w-]*$/',
            'ministry-department'  =>'nullable|regex:/^[\s\w-]*$/',
            'email_address' => 'required|email|unique:form_delegates,email',
            'phone_number' => 'required|unique:form_delegates,mob|digits_between:8,15',
            'delegate-social-fb' => 'nullable|url|regex:/(https?:\/\/)?([\w\.]*)facebook\.com\/([a-zA-Z0-9_]*)$/',
            'delegate-social-li' => 'nullable|url|regex:/^https:\/\/[a-z]{2,3}\.linkedin\.com\/.*$/',
            'delegate-social-sh' => 'nullable|url',
            'delegate-pitching-deck' => 'max:5000|mimes:doc,docx,ppt,pptx,pdf',
            'fcs-purpose' => ['nullable', new words(60)],
            'delegate-city-message' => ['nullable', new words(100)],
            'track-conference' =>['required',Rule::in(['Hackathon','Industry Visit'])],
            'fcs-chapter-referral' =>['required',Rule::in(['0','BD','VN','CM','PH','RS'])],
            'referred-person' => 'nullable|regex:/^[\s\w-]*$/',
            'fcs-package' => 'required|integer|digits_between:0,5',
            'fcs-scholarship'=>  ['required',Rule::in(['y','n'])],
            'fcs-newsletter-subscription'=>  ['required',Rule::in(['y','n'])],
        ])->setAttributeNames
        (
            [   'first_name' => 'first name',
                'last_name' => 'last name',
                'full_name' => 'preferred name',
                'choose_country' => 'nationality',
                'city_name' => 'city',
                'university-name' =>'university',
                'company-organization' =>'company/organization',
                'ministry-department'  =>'ministry/department',
                'email_address' => 'email address',
                'phone_number' => 'phone',
                'delegate-social-fb' => 'facebook',
                'delegate-social-li' => 'linkedIn',
                'delegate-social-sh' => 'scholar hub',
                'delegate-pitching-deck' => 'executive summary/portfolio',
                'fcs-purpose' => 'purpose',
                'delegate-city-message' => 'stressing Socio-Economic issue',
                'track-conference' => 'interested track',
                'fcs-chapter-referral' => 'referral',
                'referred-person' => 'reffered by',
                'fcs-package' => 'package',
                'fcs-scholarship'=>  'scholarship apply',
                'fcs-newsletter-subscription'=>  'newsletter subscription',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            $res = $this->submitToDB($request);
            if(!$res)
            {
                $err = new MessageBag();
                $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                return Redirect::back()->withErrors($err)->withInput();
            }
            $this->suc = 'Application submitted, you will soon be contacted via email';
            $data = ['email' => $request->input('email_address'),'name'=> $request->input('full-name')];
            Mail::send('mails.delegate-form', $data, function ($m) use ($data) {
                $m->from('no-reply@futurecitysummit.org', 'Future City Summit');
                $m->replyTo('community@futurecitysummit.org', 'Ms. Priya Ghandi');
                $m->to($data['email'], $data['name'])->subject('Application for being delegates Submitted - Future City Summit');
            });

            return $this->returnView($request);
        }
    }

}

