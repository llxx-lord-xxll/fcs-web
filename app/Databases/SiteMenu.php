<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteMenu extends Model
{
    protected $table = 'site_menu_tables';


    public static function buildMenuArray($menu_id = 1,$parent_id = 0)
    {
        $ret = array();
        foreach (DB::table('site_menu_tables')->where('menu_id','=',$menu_id)->orderBy('id','ASC')->orderBy('order','ASC')->where('parent_id','=',$parent_id)->get() as $row)
        {

            $tmp = array();
            $children = self::buildMenuArray($menu_id,$row->id);
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
