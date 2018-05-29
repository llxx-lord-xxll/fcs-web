<?php

namespace App\Http\Controllers;

use App\Databases\SiteGallary;
use App\Databases\SiteMenu;
use App\Databases\SitePackages;
use App\Databases\SitePages;
use App\Databases\SitePeople;
use App\Databases\SiteTemplates;
use App\Databases\SiteTimeline;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WidgetParser extends Controller
{
    public static function parse($page_id,$template_id){
       return self::parseTemplate($page_id,SiteTemplates::buildChildrenArray($template_id));
    }

    public static function people($element,$page)
    {
        $team_id = $text =SitePages::get_page_data($page,"input_" .$element['id']);

        $metas = $element['meta'];
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $team_title = SitePeople::find($team_id);
        if ($team_title != null)
        {
            $team_title= $team_title->title;
        }

        $team_people = SitePeople::getPeople($team_id);



        $ret = "<section" .$attrs . ">";
        $ret .= '<div class="container"><div class="row">';
        $ret .='  <div class="col-lg-12 panel-section text-center">
                    <h2 class="uppercase"> ' .$team_title. ' </h2>
                  </div>';

        $ret .= '<div class="container"><div class="row">';

        if (!empty($team_people))
        {
            $size = 3;
            if(count($team_people)< 5)
            {
                $size = 3;
            }
            else
            {
                if(count($team_people) % 5)
                {
                    $size = 15;
                }
                else
                {
                    $size = 3;
                }
            }
            foreach ($team_people as $person)
            {
                $pInfo = SitePeople::getPersonInfo($person);

                $ret.= '<div class="col-lg-'.$size.' col-md-3 col-sm-4"><div class="team-sin text-center">';

                $ret .= '<div class="speaker-img">
                                    <img src="'. asset('uploads/'.$pInfo->photo) . '" alt="" />
                                </div>';
                $ret .= '<div class="speaker-content">
                                    <h4>'.$pInfo->name.'</h4>
                                    <p>'.$pInfo->profession.'</p>
                                </div>';

                $ret.='</div></div>';
            }
        }

        $ret .= '</div></div>';

        $ret .= "</div></div></section>";

        return $ret;
    }


    public static function ul($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<ul" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</ul>";
        return $ret;
    }

    public static function ol($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<ol" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</ol>";
        return $ret;
    }

    public static function li($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<li" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</li>";
        return $ret;
    }

    public static function span($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<span" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</span>";
        return $ret;
    }


    public static function timeline($element,$page)
    {
        $ret = '<div class="zoomtimeline mode-3dslider auto-init zoomtimeline0 skin-light circuit-the-timeline-on inited ztm-ready" data-options="{startItem: 2}" id="zoomtimeline5"> <div class="items"></div>';
        $ret .= '      <div class="yearlist-con">
                            <div class="yearlist-container">
                                <div class="yearlist-container-inner">
                                    <div class="yearlist-line"></div>
                                </div>
                            </div>
                        </div>';

        $ret .= '<div class="details-container" style="height: 651px;"><div class="clear"></div>';
        $id = 0;

        $center = (int)round(SiteTimeline::all()->count()/2) ;

        foreach (SiteTimeline::get() as $item)
        {
            $id++;
            $checked = "";
            if ($id == $center)
            {
                $checked = "checked";
            }
            $ret .= '       <input type="radio" name="radio_btn" id="it'.$id.'" '.$checked.' />
                            <label for="it'.$id.'" class="detail ">
                                <div class="the-year">'.Carbon::parse($item->event_date)->format('d M y').'<figure></figure></div>
                                <h3 class="the-heading">'.$item->title.' </h3>
								<div class="detail-image-con" style="">
								<div class="detail-image--border"></div><div class="detail-image" style="background-image:url('.asset('uploads/'.$item->image).');"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div>
								<div class=" detail-excerpt"><p>'.$item->subtitle.'</p></div>
								<div class="clear"></div>
                            </label>';
        }

        $ret .= "</div></div>";

        return $ret;
    }

    public static function a($element,$page)
    {
        $metas = $element['meta'];

        $href = SitePages::get_page_data($page,"input_" .$element['id']);
        if (!filter_var($href, FILTER_VALIDATE_URL)) {
            $href = asset( $href);
        }

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<a href='$href' " .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</a>";
        return $ret;
    }

    public static function image($element,$page)
    {
        $metas = $element['meta'];
        $image = SitePages::get_page_data($page,"input_" .$element['id']);
        $image = asset('uploads/' . $image);
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<img" .$attrs . "";
        $ret .= " src='$image'";
        $ret .= "  />";
        return $ret;
    }

    public static function textarea($element,$page)
    {
        $text =SitePages::get_page_data($page,"input_" .$element['id']);

        return $text;
    }

    public static function text($element,$page)
    {
        $text =SitePages::get_page_data($page,"input_" .$element['id']);

        return $text;
    }

    public static function p($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<p" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</p>";
        return $ret;
    }

    public static function h6($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h6" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h6>";
        return $ret;
    }

    public static function h5($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h5" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h5>";
        return $ret;
    }

    public static function h4($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h4" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h4>";
        return $ret;
    }

    public static function h3($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h3" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h3>";
        return $ret;
    }

    public static function h2($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h2" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h2>";
        return $ret;
    }

    public static function h1($element,$page)
    {
        $metas = $element['meta'];

        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "<h1" .$attrs . ">";
        $ret .= self::parseTemplate($page,$element['children']);
        $ret .= "</h1>";
        return $ret;
    }

    public static function testimonial_carousel($element,$page)
    {
        $ret = "<div class='testimonial-inner'>
                        <div class='testimonial-carousel' id='testimonial-carousel'>";
       $elems =  $element['children'];


       foreach ($elems as $elem)
       {
           $item = $elem['children'];
           $photo = SitePages::get_page_data($page,"input_" .$item[0]['id']);
           $photo = asset('uploads/' . $photo);
           $content = SitePages::get_page_data($page,"input_" .$item[1]['id']);
           $intro = SitePages::get_page_data($page,"input_" .$item[2]['id']);

            $ret .= "<div class='item'>";

            $ret .= "<img class='img-circle img-testimonial' src='$photo' alt=''>";
            $ret .= "<p class='lead'>$content</p>";
            $ret .= "<p class='name'>$intro</p>";

            $ret .= "</div>";
       }
        $ret .= ' </div></div>';

       return $ret;
    }

    public static function gallery($element,$page)
    {
        $gallery_id =SitePages::get_page_data($page,"input_" .$element['id']);
        $gallery = SiteGallary::getGallery($gallery_id);
        $ret = "";
        if ($gallery != null)
        {
            $albums = SiteGallary::getAlbums($gallery_id);
            $photos = SiteGallary::getPhotos($albums);
            $ret = "<section>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-12 fcs-section-grid text-center'>
                                    <h2 class='uppercase'>$gallery->description</h2>
                                </div>
                            </div>
                        </div>
                    </section>
    
                        <div class='container-fluid grid-section'>
                
                         <div class='content grid-container'>";


                    if (!empty($albums))
                    {
                        $ret .= ' <div class="filters-container text-center partner-row"><ul class="media-boxes-filter" id="filter"> <li><a class="selected" href="#" data-filter="*">All</a></li>';

                        foreach ($albums as $album)
                        {
                            $album_model = SiteGallary::getAlbumInfo($album);
                            $ret .= "<li><a href='#' data-filter='.$album_model->slug'>$album_model->title </a></li>";
                        }

                        $ret .= '    </ul></div>';
                    }

                    if (!empty($photos))
                    {
                        $ret .= "<div class='container-fluid partner-row'>
                                    <div class='fcs-gallery'>";


                        foreach ($photos as $photo)
                        {
                            $photo_model = SiteGallary::find($photo);
                            if($photo_model !=null)
                            {
                                $slugs = SiteGallary::getPhotoSlugs($photo);
                                $ret .= '<div class="media-box '.$slugs.' "><div class="media-box-image">';
                                $ret .= "<div data-width='$photo_model->width' data-height='$photo_model->height' data-thumbnail='".asset('uploads/' . $photo_model->image). "'></div>";
                                $ret .= "<div class='thumbnail-overlay'>
                                <a href='#' class='mb-open-popup btn btn-sm btn-default' data-src='".asset('uploads/' . $photo_model->image). "' data-title='$photo_model->caption'>
                                    <span class='fa fa-search'></span>&nbsp; View Larger
                                </a>
                            </div>";

                                $ret .= ' </div></div>';
                            }
                        }

                        $ret .= '    </div>
                        </div>';

                    }



            $ret .= '    </div>
                        </div>';
        }
        else
        {
            $ret = "<strong>Invalid gallery</strong>";
        }

        return $ret;
    }

    public static function pricing_table($element,$page)
    {
        $package_group_id =SitePages::get_page_data($page,"input_" .$element['id']);

        $group_info = SitePackages::get_package_group($package_group_id);

        $ret = "";
        if ($group_info != null || $group_info != false)
        {
            $packages = SitePackages::where('package_group_id','=',$package_group_id);

            $ret = '<div class="col-lg-12">

                    <div class="col-lg-12">
                        <h2 class="uppercase text-center">'.$group_info->title.'</h2>
                        <p class="lead text-center">('.$group_info->description.')</p>
                    </div>';

            if ($packages->count() > 0) $ret .= '<div class="price-carousel">';


            foreach ($packages->get() as $item)
            {
                $ret .= '<div class="price-table early-bird">';
                $ret .= '<div class="icon">
                                <i class="fa fa-5x '.$item->icon.'"></i>
                          </div>';
                $ret .= '<div class="table-header">
                                <h3>'.$item->title.'</h3>
                                <p class="price"> $'.$item->price.'</p>
                                <p class="early-date center-right">Deadline: '.Carbon::parse($item->deadline)->format('d M, Y').'</p>
                            </div>';

                $ret .= '<ul class="desc list-unstyled">';

                foreach (SitePackages::get_package_details($item->id)->get() as $feature)
                {
                    $ret .= "<li>$feature->description</li>";
                }

                $ret .= '</ul>';


                $ret .= '</div>';
            }


            if ($packages->count() > 0) $ret.= '</div>';


            $ret .= '</div>';
        }
        else
        {
            $ret = "<h3>Invalid Group</h3>";
        }




        return $ret;
    }

    public static function html($element,$page)
    {
    return SitePages::get_page_data($page,"input_" .$element['id']);
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
        $ret .= self::parseTemplate($page,$element['children']);
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
        $ret .= self::parseTemplate($page,$element['children']);
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
        $ret .= self::parseTemplate($page,$element['children']);
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
        $ret .= self::parseTemplate($page,$element['children']);
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
