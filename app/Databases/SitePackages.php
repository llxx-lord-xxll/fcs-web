<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SitePackages extends Model
{
    protected $table = 'site_packages';


    public static function get_package_group($group_id)
    {
        return DB::table('site_package_group')->find($group_id);
    }

    public static function get_package_details($package_id)
    {
        return DB::table('site_packages_meta')->where('package_id','=',$package_id);
    }

}
