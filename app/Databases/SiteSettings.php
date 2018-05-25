<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

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
}
