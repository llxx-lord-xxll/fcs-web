<?php

namespace App\Http\Controllers;

use App\form_data;
use App\form_submissions;
use App\Rules\words;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use LVR\CountryCode\Two;
use PhpParser\Node\Expr\Array_;

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
        $form_id =  \Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id');

        $fs = new form_submissions();
        $fs->forms_id = $form_id;
        $fs->created_at = Carbon::now();
        $fs->updated_at = Carbon::now();
        $fs->save();

        $title_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','nametitle')->value('id');
        $fn_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','fname')->value('id');
        $ln_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','lname')->value('id');
        $prf_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','prfname')->value('id');
        $country_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','country')->value('id');
        $city_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','city')->value('id');
        $occupation_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','occupation')->value('id');
        $university_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','university')->value('id');
        $company_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','company')->value('id');
        $ministry_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','ministry')->value('id');
        $email_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','email')->value('id');
        $mob_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','mob')->value('id');
        $social_fb_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-fb')->value('id');
        $social_li_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-li')->value('id');
        $social_sh_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-sh')->value('id');
        $pitching_deck_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','pitching-deck')->value('id');
        $purpose_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','purpose')->value('id');
        $citymsg_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','city-message')->value('id');
        $trackconf_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','track-conference')->value('id');
        $refferal_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','chapter-referral')->value('id');
        $refdperson_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','referred-person')->value('id');
        $fcspackage_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','fcs-package')->value('id');
        $scholar_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','scholarship')->value('id');
        $newsletter_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','newsletter-subscription')->value('id');

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $title_field;
        $fd->field_data = $request->input('salutation');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $fn_field;
        $fd->field_data = $request->input('first_name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $ln_field;
        $fd->field_data = $request->input('last_name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $prf_field;
        $fd->field_data = $request->input('full_name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $country_field;
        $fd->field_data = $request->input('choose_country');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $city_field;
        $fd->field_data = $request->input('city_name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $occupation_field;
        $fd->field_data = $request->input('occupation');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $university_field;
        $fd->field_data = $request->input('university-name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $company_field;
        $fd->field_data = $request->input('company-organization');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $ministry_field;
        $fd->field_data = $request->input('ministry-department');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $email_field;
        $fd->field_data = $request->input('email_address');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $mob_field;
        $fd->field_data = $request->input('phone_number');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $social_fb_field;
        $fd->field_data = $request->input('delegate-social-fb');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $social_li_field;
        $fd->field_data = $request->input('delegate-social-li');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $social_sh_field;
        $fd->field_data = $request->input('delegate-social-sh');
        $fd->save();


        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $pitching_deck_field;
        $fd->field_data = $request->input('delegate-pitching-deck');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $purpose_field;
        $fd->field_data = $request->input('fcs-purpose');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $citymsg_field;
        $fd->field_data = $request->input('delegate-city-message');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $trackconf_field;
        $fd->field_data = $request->input('track-conference');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $refferal_field;
        $fd->field_data = $request->input('fcs-chapter-referral');
        $fd->save();


        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $refdperson_field;
        $fd->field_data = $request->input('referred-person');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $fcspackage_field;
        $fd->field_data = $request->input('fcs-package');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $scholar_field;
        $fd->field_data = $request->input('fcs-scholarship');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $newsletter_field;
        $fd->field_data = $request->input('fcs-newsletter-subscription');
        $fd->save();

        return true;
    }

    public function submitForm(Request $request){
        $validator = Validator::make($request->all(),[
            'salutation' => ['required',Rule::in(['Mr.','Mrs.','Ms.'])],
            'first_name' => 'required|regex:/^[\s\w-]*$/',
            'last_name' => 'required|regex:/^[\s\w-]*$/',
            'full_name' => 'required|regex:/^[\s\w-]*$/',
            'choose_country' => ['required',new Two()],
            'city_name' => 'required|alpha',
            'occupation' => ['required',Rule::in(['student','corporate','ngos','government','university-scholar','others'])],
            'university-name' =>'alpha',
            'company-organization' =>'alpha',
            'ministry-department'  =>'alpha',
            'email_address' => 'required|email',
            'phone_number' => 'required|nummber|min:8|max:15',
            'delegate-social-fb' => 'url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
            'delegate-social-li' => 'url|regex:/^https:\/\/[a-z]{2,3}\.linkedin\.com\/.*$/',
            'delegate-social-sh' => 'url',
            'delegate-pitching-deck' => 'required|max:5000|mimes:doc,docx,ppt,pptx,pdf',
            'fcs-purpose' => ['required', new words(60)],
            'delegate-city-message' => ['required', new words(100)],
            'track-conference' =>['required',Rule::in(['Hackathon','Industry Visit'])],
            'fcs-chapter-referral' =>['required',Rule::in(['BD','VN','CM','PH','RS'])],
            'referred-person' => 'required|regex:/^[\s\w-]*$/',
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
            $this->submitToDB($request);
            $this->suc = 'Application submitted, you will soon be contacted via email';
            return $this->returnView($request);
        }
    }

}

