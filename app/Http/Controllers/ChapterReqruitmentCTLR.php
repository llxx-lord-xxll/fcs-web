<?php

namespace App\Http\Controllers;

use App\form_data;
use App\form_submissions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use LVR\CountryCode\Two;

class ChapterReqruitmentCTLR extends Controller
{
    private $suc = null;
    public function __construct()
    {
        $this->v =  View('chapter-recruitment');
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
        $form_id =  \Illuminate\Support\Facades\DB::table('forms')->where('nametitle','=','Contact')->value('id');

        $fs = new form_submissions();
        $fs->forms_id = $form_id;
        $fs->created_at = Carbon::now();
        $fs->updated_at = Carbon::now();
        $fs->save();

        $namefield = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','name')->value('id');
        $emailfield = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','email')->value('id');
        $countryfield = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','country')->value('id');
        $mobfield = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','mob')->value('id');
        $msgfield = \Illuminate\Support\Facades\DB::table('form_fields')->where('forms_id','=',$form_id)->where('field_name','=','message')->value('id');

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $namefield;
        $fd->field_data = $name;
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $emailfield;
        $fd->field_data = $email;
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $countryfield;
        $fd->field_data = $country;
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $mobfield;
        $fd->field_data = $mob;
        $fd->save();

        $fd = new form_data();
        $fd->submission_id =  $fs->id;
        $fd->field_id = $msgfield;
        $fd->field_data = $message;
        $fd->save();

        return true;
    }

    public function submitForm(Request $request){
        $validator = Validator::make($request->all(),[
            'full-name' => 'required|regex:/^[\s\w-]*$/',
            'choose-country' => ['required',new Two()],
            'email-address' => 'required|email',
            'phone-number' => 'required|digits:13',
            'contact-message' => 'required|string|min:10|max:200',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $this->submitToDB($request->input('full-name'),$request->input('email-address'),$request->input('choose-country'),$request->input('phone-number'),$request->input('contact-message'));
            $this->suc = 'Thank you for contacting with us, you will be notified through email';
        }
    }
}
