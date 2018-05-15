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
        foreach (DB::table('site_templates_meta')->where('templates_id','=',$template_id)->orderBy('id','ASC')->orderBy('order','ASC')->where('parent_id','=',$parent_id)->get() as $row)
        {
            $tmp = array();
            $children = self::buildChildrenArray($template_id,$row->id);
            $tmp = array(
                'title'=>$row->title,
                'children' => $children
            );
            array_push($ret,$tmp);
        }
        return $ret;
    }


}
