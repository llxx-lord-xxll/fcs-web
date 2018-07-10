<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteSettings extends Model
{
    protected $table = "site_general_settings";

    public static function get_value($key,$default = null)
    {
        $qry = SiteSettings::where('meta_key','=',$key)->first();
        if ( $qry != null)
        {
            return $qry->meta_value;
        }
        else
        {
            return $default;
        }
    }

    public static function get_footer($meta_key)
    {
        try
        {
            $ret =  DB::table('site_footer')->where('meta_key','=',$meta_key)->first()->meta_value;
        }
        catch (\Exception $exception)
        {
            $ret = "";
        }
       return $ret;

    }
}
