<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SitePeople extends Model
{
    protected $table = "site_teams";


    public static function getPeople($team_id){
        $ret = array();
        foreach (DB::table('site_teams_meta')->where('teams_id','=',$team_id)->get() as $person)
        {
            $ret = array_add($ret,count($ret),$person->people_id);
        }
        return $ret;
    }
    public static function getPersonInfo($people_id)
    {
        return DB::table('site_teams_people')->find($people_id);
    }


}
