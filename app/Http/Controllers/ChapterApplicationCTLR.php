<?php

namespace App\Http\Controllers;

use App\form_data;
use App\form_submissions;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $form_id =  \Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id');

        $fs = new form_submissions();
        $fs->forms_id = $form_id;
        $fs->created_at = Carbon::now();
        $fs->updated_at = Carbon::now();
        $fs->save();

        $name_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','name')->value('id');
        $country_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','country')->value('id');
        $occupation_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','occupation')->value('id');
        $university_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','university')->value('id');
        $company_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','company')->value('id');
        $ministry_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','ministry')->value('id');
        $email_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','email')->value('id');
        $mob_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','mob')->value('id');
        $social_fb_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-fb')->value('id');
        $social_li_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-li')->value('id');
        $social_sh_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','social-sh')->value('id');
        $chapter_title_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','chapter-title')->value('id');
        $pitching_deck_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','pitching-deck')->value('id');

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $name_field;
        $fd->field_data = $request->input('full_name');
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $country_field;
        $fd->field_data = $request->input('choose_country');
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
        $fd->field_id = $chapter_title_field;
        $fd->field_data = $request->input('open_chapter');
        $fd->save();

        if($request->has('delegate-pitching-deck'))
        {
            $deckname = $request->input('full_name') . '_' . $request->input('city_name') . '_' . md5(uniqid()) . '.' . $request->file('delegate-pitching-deck')->getClientOriginalExtension();
            $f = $request->file('delegate-pitching-deck');
            $f->move(base_path('public\uploads\pitching-decks'),$deckname);
            $fd = new form_data();
            $fd->submission_id =  $fs->id;
            $fd->field_id = $pitching_deck_field;
            $fd->field_data = $deckname;
            $fd->save();
        }


        return true;
    }

    public function submitForm(Request $request){

        if ($request->has('email_address'))
        {
            $form_id =  \Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id');
            $email_field = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','email')->value('id');

            if(form_data::where('field_data','=',$request->input('email_address'))->where('field_id','=',$email_field)->first())
            {
                $err = new MessageBag();
                $err->add('email_address','You have already applied, please wait for the reply in your email');
                return Redirect::back()->withErrors($err)->withInput();
            }
        }


        $validator = Validator::make($request->all(),[
            'full_name' => 'required|regex:/^[\s\w-]*$/',
            'choose_country' => ['required',new Two()],
            'occupation' => ['required',Rule::in(['student','corporate','ngos','government','university-scholar','others'])],
            'university-name' =>'nullable|regex:/^[\s\w-]*$/',
            'company-organization' =>'nullable|regex:/^[\s\w-]*$/',
            'ministry-department'  =>'nullable|regex:/^[\s\w-]*$/',
            'email_address' => 'required|email',
            'phone_number' => 'required|digits_between:8,15',
            'delegate-social-fb' => 'nullable|url|regex:/(https?:\/\/)?([\w\.]*)facebook\.com\/([a-zA-Z0-9_]*)$/',
            'delegate-social-li' => 'nullable|url|regex:/^https:\/\/[a-z]{2,3}\.linkedin\.com\/.*$/',
            'delegate-social-sh' => 'nullable|url',
            'open_chapter' => 'required|alpha',
            'delegate-pitching-deck' => 'max:5000|mimes:doc,docx,ppt,pptx,pdf',
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
            $this->submitToDB($request);
            $this->suc = 'Thank you for contacting with us, you will be notified through email';
            return $this->returnView($request);
        }
    }

}
