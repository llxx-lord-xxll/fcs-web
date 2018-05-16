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

    public static function section($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<section" .$attrs . ">";
        $ret = self::parseTemplate($page,$element['children']);
        $ret .= "</section>";
        return $ret;
    }

    public static function div($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<div" .$attrs . ">";
        $ret = self::parseTemplate($page,$element['children']);
        $ret .= "</div>";
        return $ret;
    }

    public static function row($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<div class='row' " .$attrs . ">";
        $ret = self::parseTemplate($page,$element['children']);
        $ret .= "</div>";
        return $ret;
    }

    public static function container($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<div class='container' " .$attrs . ">";
        $ret = self::parseTemplate($page,$element['children']);
        $ret .= "</div>";
        return $ret;
    }

    public static function anicounters($element,$page)
    {

        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<div " .$attrs . ">";

        foreach ($element['children'] as $item)
        {
            $elem1 = $item['children'];
            $iconClass = SitePages::get_page_data($page,"input_" .$elem1[0]['id']);
            $number = SitePages::get_page_data($page,"input_" .$elem1[1]['id']);
            $desc = SitePages::get_page_data($page,"input_" .$elem1[2]['id']);

            $ret .= '<div class="item">
                                <i class="pe pe-4x '.$iconClass.'"></i>
                                <div class="desc">
                                    <p class="number">'.$number.'</p>
                                    <p class="description">'.$desc.'</p>
                                </div>
                            </div>';
        }

        $ret .= "</div>";
        return $ret;
    }

    public static function accordion_slider($element,$page)
    {
        $elems = $element['children'];

        $ret = '<section id="fcs-theme-panel" class="accordion-slider">
                    <div class="as-panels">';
        foreach ($elems as $elem)
        {
            $elem1 = $elem['children'];
            $bgImg = SitePages::get_page_data($page,"input_" .$elem1[0]['id']);
            $title = SitePages::get_page_data($page,"input_" .$elem1[1]['id']);
            $desc = SitePages::get_page_data($page,"input_" .$elem1[2]['id']);
            $footerText = SitePages::get_page_data($page,"input_" .$elem1[3]['id']);
            $link =  SitePages::get_page_data($page,"input_" .$elem1[4]['id']);
            if ($bgImg)
            {
                $ret .= '<div class="as-panel">
                <a href="'.$link.'">
                    <img class="as-background" src="'.asset('css/images/blank.gif').'" data-src="'. asset('uploads/'. $bgImg) .'" data-retina="'. asset('uploads/'. $bgImg) .'"/>
                </a>

                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    '. $title .'
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    '. $title .'
                </h3>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    '.$desc.'
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="'.$link.'"> '. $footerText .' </a>
                </p>
            </div>';
            }


        }


        $ret .= '    </div>
                </section>';

        return $ret;
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
