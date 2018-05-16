<?php

namespace App\Http\Controllers;

use App\Databases\SiteMenu;
use App\Databases\SitePages;
use App\Databases\SiteTemplates;
use Illuminate\Http\Request;

class WidgetParser extends Controller
{
    public static function parse($page_id,$template_id){
       return self::parseTemplate($page_id,SiteTemplates::buildChildrenArray($template_id));
    }

    public static function accordion_slider($element,$page)
    {
        $elems = $element['children'];

        $ret = '<section id="fcs-theme-panel" class="accordion-slider">
                    <div class="as-panels">';
        foreach ($elems as $elem)
        {
            dump($elem);

        }


        $ret .= '    </div>
                </section>';

    }

    public static function countdown($element,$page)
    {
        $elem = $element['children'];

        $title = SitePages::get_page_data($page,"input_" .$elem[0]['id']);
        $subtitle = SitePages::get_page_data($page,"input_" .$elem[1]['id']);
        $date = SitePages::get_page_data($page,"input_" .$elem[2]['id']);
        if ($date){
            $date = str_replace('-','/',$date);
        }
        return '<section id="highlight">
        <div class="container-fluid">
            <div class="row">

                <div id="left" class="left col-lg-9 col-md-8 text-right">
                    <h2>'.$title.'</h2>
                    <p>'.$subtitle.'</p>
                </div>

                <div id="right" class="col-lg-3 col-md-4 text-left">
                    <div id="countdown" data-countdown="'.$date.'"></div>
                </div>

            </div>
        </div>
    </section>';
    }

    public static function slider($element,$page)
    {
        $elems = $element['children'];

        $ret = '<div class="tp-banner-container">
                    <div class="tp-banner">
                    <ul>';
        foreach ($elems as $elem)
        {
            $bgimg = SitePages::get_page_data($page,"input_" .$elem['children'][0]['id']);
            $oText = SitePages::get_page_data($page,"input_" .$elem['children'][1]['id']);
            if($bgimg)
            {
                $ret .= '<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="'. asset('uploads/'. $bgimg) .'"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="'. asset('uploads/'. $bgimg) .'"  alt="fullslide1"  data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="250"
                         data-y="center" data-voffset="-70"
                         data-speed="600"
                         data-start="800"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">'.$oText.'
                    </div>
                </li>';
            }
        }

        $ret .= ' </ul>
                  <div class="tp-bannertimer"></div>
                </div>
             </div>';

        return $ret;

    }


    public static function parseTemplate($page,$elements)
    {
        $ret = "\n";
        foreach ($elements as $element)
        {

            $tmp = "";

            if (is_callable("self::".$element['type']))
            {
                $tmp = call_user_func("self::".$element['type'],$element,$page);
            }
            else
            {
                throw new \Exception("The widget slug '" . $element['type'] ."' can not be parsed");
            }
            $ret .=  $tmp . "\n";
        }

        return $ret;
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
