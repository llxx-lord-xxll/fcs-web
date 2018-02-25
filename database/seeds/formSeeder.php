<?php

use Illuminate\Database\Seeder;

class formSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('forms')->insert([
            'title' => 'Contact',
        ]);
        \Illuminate\Support\Facades\DB::table('forms')->insert([
            'title' => 'Delegate Application',
        ]);
        \Illuminate\Support\Facades\DB::table('forms')->insert([
            'title' => 'Chapter Application',
        ]);
        \Illuminate\Support\Facades\DB::table('forms')->insert([
            'title' => 'Chapter Recruitment',
        ]);


        $data = array(
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id'), 'field_name'=> 'name'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id'), 'field_name'=> 'email'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id'), 'field_name'=> 'country'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id'), 'field_name'=> 'mob'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Contact')->value('id'), 'field_name'=> 'message'),

            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'title'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'fname'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'lname'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'prfname'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'country'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'city'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'occupation'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'university'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'company'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'ministry'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'email'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'mob'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'social-fb'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'social-li'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'social-sh'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'pitching-deck'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'purpose'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'city-message'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'track-conference'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'chapter-referral'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'referred-person'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'fcs-package'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'scholarship'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Delegate Application')->value('id'), 'field_name'=> 'newsletter-subscription'),

            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'name'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'country'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'occupation'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'university'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'company'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'ministry'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'email'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'mob'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'social-fb'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'social-li'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'social-sh'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'chapter-title'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Application')->value('id'), 'field_name'=> 'pitching-deck'),

            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'name'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'country'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'occupation'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'university'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'company'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'ministry'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'email'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'mob'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'social-fb'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'social-li'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'social-sh'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'resume'),
            array('forms_id'=>\Illuminate\Support\Facades\DB::table('forms')->where('title','=','Chapter Recruitment')->value('id'), 'field_name'=> 'pitching-deck'),
        );


        \Illuminate\Support\Facades\DB::table('form_fields')->insert($data);





        $faker = Faker\Factory::create();

       for ($i=0;$i<10;$i++)
       {
           $cfctl = new \App\Http\Controllers\ContactFormCTLR();
           $cfctl->submitToDB($faker->name(),$faker->unique()->safeEmail,$faker->countryCode,$faker->phoneNumber,$faker->text());
       }

    }
}
