<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteMenu extends Model
{
    protected $table = 'site_menu_tables';


    public static function buildMenuArray($parent_id = 0)
    {
        $ret = array();
        foreach (DB::table('site_menu_tables')->orderBy('id','ASC')->orderBy('order','ASC')->where('parent_id','=',$parent_id)->get() as $row)
        {

            $tmp = array();
            $children = self::buildMenuArray($row->id);
            $tmp = array(
                'title'=>$row->title,
                'uri' => $row->uri,
                'children' => $children
            );

            array_push($ret,$tmp);

        }

        return $ret;
    }
}
