<?php

namespace App\Http\Controllers;

use App\ChapterApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;
use LVR\CountryCode\Two;

class ChapterApplicationCTLR extends Controller
{
    private $suc = null;
    private $v;
    public function __construct()
    {
        $this->v =  View('chapter-application');
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
            $deckname = $request->input('full_name') . '_' . $request->input('open_chapter') . '_' . md5(uniqid()) . '.' . $request->file('delegate-pitching-deck')->getClientOriginalExtension();
            $f = $request->file('delegate-pitching-deck');
            $f->move(base_path('public\uploads\pitching-decks'),$deckname);
        }
        $caf = new ChapterApplicationForm();
        $caf->name = $request->input('full_name');
        $caf->nationality = $request->input('choose_country');
        $caf->occupation = $request->input('occupation');
        $caf->university = $request->input('university-name');
        $caf->company = $request->input('company-organization');
        $caf->ministry = $request->input('ministry-department');
        $caf->email = $request->input('email_address');
        $caf->mob = $request->input('phone_number');
        $caf->facebook = $request->input('delegate-social-fb');
        $caf->linkedin = $request->input('delegate-social-li');
        $caf->scholarhub = $request->input('delegate-social-sh');
        $caf->pitching_deck = $deckname;
        $caf->chapter_name = $request->input('open_chapter');

        if($caf->save())
        {
            return true;
        }

        return false;
    }

    public function submitForm(Request $request){

        $validator = Validator::make($request->all(),[
            'full_name' => 'required|regex:/^[\s\w-]*$/',
            'choose_country' => ['required',new Two()],
            'occupation' => ['required',Rule::in(['student','corporate','ngos','government','university-scholar','others'])],
            'university-name' =>'nullable|regex:/^[\s\w-]*$/',
            'company-organization' =>'nullable|regex:/^[\s\w-]*$/',
            'ministry-department'  =>'nullable|regex:/^[\s\w-]*$/',
            'email_address' => 'required|email|unique:form_chapter_application,email',
            'phone_number' => 'required|unique:form_chapter_application,mob|digits_between:8,15',
            'delegate-social-fb' => 'nullable|url',
            'delegate-social-li' => 'nullable|url',
            'delegate-social-sh' => 'nullable|url',
            'open_chapter' => 'required',
            'delegate-pitching-deck' => 'nullable|max:5000|mimes:doc,docx,ppt,pptx,pdf',
        ])->setAttributeNames([
            'full-name' => 'full name',
            'choose-country' => 'nationality',
            'university-name' =>'university',
            'company-organization' =>'company/organization',
            'ministry-department'  =>'ministry/department',
            'email_address' => 'email address',
            'phone_number' => 'phone',
            'delegate-social-fb' => 'facebook',
            'delegate-social-li' => 'linkedIn',
            'delegate-social-sh' => 'scholar hub',
            'open_chapter' => 'new chapter title',
            'delegate-pitching-deck' => 'executive summary/portfolio',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
            $res =  $this->submitToDB($request);
            if(!$res)
            {
                $err = new MessageBag();
                $err->add('none','Unknown Error, Something preventing this value to be saved in the databaase, change your input');
                return Redirect::back()->withErrors($err)->withInput();
            }
            $this->suc = 'Thank you for contacting with us, you will be notified through email';
            $data = ['email' => $request->input('email_address'),'name'=> $request->input('full-name')];
            Mail::send('mails.open-chapter', $data, function ($m) use ($data) {
                $m->from('no-reply@futurecitysummit.org', 'Future City Summit');
                $m->replyTo('community@futurecitysummit.org', 'Ms. Priya Ghandi');
                $m->to($data['email'], $data['name'])->subject('Chapter Openning Application Submitted - Future City Summit');
            });

            return $this->returnView($request);
        }
    }

}
