<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteTemplates extends Model
{
    protected $fillable = ['title', 'layout_id', 'slug', 'author', 'updated_at'];
    protected $table = 'site_templates';
    public static function buildChildrenArray($template_id,$parent_id = 0)
    {
        $ret = array();
        foreach (DB::table('site_templates_meta')->where('templates_id','=',$template_id)->orderByRaw("`order` = '0', `order` ASC")->where('parent_id','=',$parent_id)->get() as $row)
        {
            $tmp = array();
            $children = self::buildChildrenArray($template_id,$row->id);
            $tmp = array(
                'id' => $row->id,
                'order'=> $row->order,
                'type' => SiteWidgets::find($row->widgets_id)->slug,
                'children' => $children
            );
            array_push($ret,$tmp);
        }
        return $ret;
    }


}
