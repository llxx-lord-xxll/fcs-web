<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SitePages extends Model
{
    protected $table = 'site_pages';
    protected $fillable = ['meta_type','template_id','meta_key','meta_value'];

    public static function get_page_data($page_id,$key)
    {
       $data =  DB::table('site_pages_meta')->where('pages_id','=',$page_id)->where('meta_type','=','data')->where('meta_key','=',$key);



       if ($data->count() != 0 )
       {
           return $data->first()->meta_value;
       }

       return false;

    }


}
