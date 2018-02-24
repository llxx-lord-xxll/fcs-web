<?php

namespace App\Http\Controllers;

use App\form_data;
use App\form_submissions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactFormCTLR extends Controller
{
   private $request = null;
   private $v;
    public function withReq(Request $request)
    {
        $this->request = $request;
        $this->v =  View('contact');
    }

    public function returnView()
    {

        return $this->v;
    }
    public function submitContact($name,$email,$country,$mob,$message)
    {
        $form_id =  \Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id');

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
    }
}
