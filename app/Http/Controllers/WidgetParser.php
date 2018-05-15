<?php

namespace App\Http\Controllers;

use App\Databases\SiteMenu;
use App\Databases\SitePages;
use Illuminate\Http\Request;

class WidgetParser extends Controller
{
    public static function parse($page_id,$template_id){
        static::parseTemplate($template_id);
    }

    public static function parseTemplate($template_id)
    {

    }

    public static function iterateTemplateChildren($parent_id){


    }

    public static function buildMenuWidget($obj = null){

        if ($obj==null)
        {
            $obj = SiteMenu::buildMenuArray();
        }

        $ret = "";
        foreach ($obj as $node)
        {
            if (empty($node['children']))
            {
                $ret .=  "<li>
                            <a data-toggle='elementscroll' href='".$node['uri']."'>" .$node['title'] . "</a>
                          </li>\n";
            }
            else
            {
                $ret .=  "<li class='dropdown'>
                            <a  class='dropdown-toggle'  data-toggle='dropdown' href='".$node['uri']."'>" . $node['title']. "</a> 
                            <ul class='dropdown-menu'>\n";

                $ret .= static::buildMenuWidget($node['children']);

                $ret .= "</ul>
                </li>\n";
            }
        }

        return $ret;
    }
}
