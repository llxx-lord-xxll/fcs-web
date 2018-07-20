<?php

namespace App\Http\Controllers;

use App\Databases\SiteForms;
use App\Databases\SiteGallary;
use App\Databases\SiteMenu;
use App\Databases\SitePackages;
use App\Databases\SitePages;
use App\Databases\SitePeople;
use App\Databases\SiteStories;
use App\Databases\SiteTemplates;
use App\Databases\SiteTimeline;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;


class WidgetParser extends Controller
{
    public static function parse($page_id,$template_id){
       return self::parseTemplate($page_id,SiteTemplates::buildChildrenArray($template_id));
    }

    public static function delegate_handbook($element,$page){
        $handbooks = SitePages::get_page_data($page,"input_" .$element['id']);
        $ret = "";

        $metas = $element['meta'];
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        if (($handbooks != null || $handbooks != "") && str_contains($handbooks,"\r\n"))
        {
            $handbooks = explode("\r\n",$handbooks);
            $ret .= '    <section id="landing-download">
                            <div class="container">
                                <div class="row">
                                    <h2 class="uppercase text-center">Materials to Download</h2>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">';
            foreach ($handbooks as $handbook)
            {
                if (($handbook != null || $handbook != "") && str_contains($handbook,"=="))
                {
                    $handbook = str_replace(" ","",$handbook);
                    $books = explode("==",$handbook);

                    $ret .= '<div class="col-lg-4 col-md-4 col-sm-4">
                            <div>
                                <img class="img-media-kit" src="'. asset('img/Conference-Booklet-FCS-2017.png') . '" alt="" />
                                <h3 class="text-center">'.$books[0].'</h3>
                                <a class="button button-small button-line-dark fcs-btn" href="'.$books[1].'">download pdf</a>
                            </div>
                        </div>';
                }
            }

            $ret .= '                    </div>
                                        </div>
                        
                                    </div>
                                </div>
                            </section>';
        }

        return $ret;
    }

    public static function i($element,$page){
        $icon_class = SitePages::get_page_data($page,"input_" .$element['id']);
        $metas = $element['meta'];
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        return '<i class="fa '.$icon_class.'" '. $attrs .' ></i>';
    }

    public static function cover_image($element,$page){
        $elem = $element['children'];

        $height = SitePages::get_page_data($page,"input_" .$elem[0]['id']);
        $image = SitePages::get_page_data($page,"input_" .$elem[1]['id']);
        $content = SitePages::get_page_data($page,"input_" .$elem[2]['id']);

        $ret = '
        <section class="cover-image" style="background-image: url('.asset('/uploads/'.$image).'); height: '.$height.'">
            <div class="container-fluid" style="padding-top: 150px;">
              '.$content.'
            </div>
        </section>';

        return $ret;
    }


    public static function br($element,$page)
    {
        return '<br>';
    }
    public static function accordion_faq($element,$page)
    {
        $faq_content = SitePages::get_page_data($page,"input_" .$element['id']);
        $metas = $element['meta'];
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $faq_content = str_replace("\r\n","",$faq_content);
        if (($faq_content != null || $faq_content != "") && str_contains($faq_content,"#END OF TAB#"))
        {
            $faq_content = explode("#END OF TAB#",$faq_content);
            $incrementer = 0;
            $ret = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
            foreach ($faq_content as $item)
            {
                if (str_contains($item,"#CONTENT"))
                {
                    $content = explode("#CONTENT",$item);
                    $in = $incrementer == 0?'in':'';
                    $aria_expanded = $incrementer == 0?'true':'false';
                    $aria_collapsed =  $incrementer == 0?'':'collapsed';
                    $ret .= '
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="heading'.$element['id'].$incrementer.'">
                         <h4 class="panel-title">
                             <a class="'.$aria_collapsed.'" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$element['id'].$incrementer.'" aria-expanded="'.$aria_expanded.'" aria-controls="collapse'.$element['id'].$incrementer.'">
                             '.$content[0].'
                             </a>
                         </h4>
                     </div>
                     <div id="collapse'.$element['id'].$incrementer.'" class="panel-collapse collapse '. $in .'" role="tabpanel" aria-labelledby="heading'.$element['id'].$incrementer.'">
                         <div class="panel-body">
                         '.$content[1].'
                         </div>
                     </div>
                 </div>';
                    $incrementer++;
                }
            }
            $ret .= '</div>';
        }
        else
        {
            $ret = "Invalid data format for Accordion FAQ widget";
        }






        return $ret;

    }

    public static function forms($element,$page)
    {
        $form = $text =SitePages::get_page_data($page,"input_" .$element['id']);
        $metas = $element['meta'];
        $attrs = "";
        foreach ($metas as $meta_key => $meta_value)
        {
            $attrs .= " ". $meta_key . " = '" . $meta_value . "' ";
        }

        $ret = "";

        $form = SiteForms::find($form);
        if ($form)
        {
                $ret = "";
                $errors = Session::get('errors');
                $success = Session::get('success');
                if($success !== null)
                {
                    foreach ($success->all() as $suc)
                    {
                        $ret .= '<p class="text-center bg-success">'.$suc.'</p>';
                    }
                }
                if($errors !== null)
                {
                    foreach ($errors->all() as $error)
                    {
                        $ret .= '<p class="text-center bg-danger text-muted">'.$error.'</p>';
                    }
                }

                $ret .= '<form '.$attrs.' action="/forms/'.$form->id.'" method="post" enctype="multipart/form-data"> <ul class="fcs-form-outer">' . csrf_field() ;

          foreach (DB::table('site_form_entries')->where('form_id',$form->id)->get() as $input)
          {
                $vals = $input->field_ivals;
                $vType = str_before($vals,"(");
                $rules = explode("\r\n",$input->field_rules);
                $input->required = "";
                switch ($vType)
                {
                    case 'array':
                        $vals = str_before(str_after($vals,"array("),")");
                        $vals = explode(",",$vals);
                        $tmp = array();
                        foreach ($vals as $val)
                        {
                            $tmp[str_slug($val)] = ltrim(rtrim($val,'"'),'"');
                        }
                        $vals = $tmp;
                        break;
                    case 'string':
                        $vals = str_before(str_after($vals,"array("),")");
                        break;
                }


                foreach ($rules as $key => $rule)
                {
                    switch ($rule)
                    {
                        case 'unique':
                            $rules[$key] = 'unique:' . $form->table_name . ',' . $input->field_name;
                            break;
                        case 'in':
                            if ($vType == 'array')
                            {
                                $rules[$key] = Rule::in(array_keys($vals));
                            }
                            else
                            {
                                $rules[$key] = Rule::in(array($vals));
                            }

                            break;
                        case 'required':
                            $input->required = 'required';
                            break;
                    }
                }
                $err = array();

                if ($errors != null)
                {
                    if ($errors->has($input->field_name))
                    {
                        $err[0] = 'text-danger"';
                        $err[1] = 'has-danger';
                        $err[2] = 'form-control-danger';
                    }
                    else
                    {
                        $err[0] = "";
                        $err[1] = "";
                        $err[2] = "";
                    }
                }
                else
                {
                    $err[0] = "";
                    $err[1] = "";
                    $err[2] = "";
                }


                switch ($input->field_type)
                {

                    case 'radiobutton':
                        $ret .="<li class='$err[1]'>";
                        $ret .="<p class='$err[0]'>$input->field_title</p>";

                        $ret .= '<ul class="fcs-form-inner">';
                        foreach ($vals as $key => $val)
                        {
                           $checked = old($input->field_name)==$key?"checked":"";
                         $ret .="<li>";
                         $ret .= '<input type="radio" name="'.$input->field_name.'" value="'.$key.'" '.$input->required . ' ' .  $checked .'>';
                         $ret .= '<label>'.$val.'</label>';
                         $ret .="</li>";
                        }

                        $ret .="</ul></li>";
                        break;
                    case 'text':
                        $ret .= '<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for="'.$input->field_name.'">'.$input->field_title.' </label>
                                <input class="'.$err[2].'" type="text" id="'.$input->field_name.'" name="'.$input->field_name.'" value="'.old($input->field_name).'" placeholder="'.$input->field_placeholder.'" '.$input->required.' >
                                '.$input->field_instructions.'
                            </li>';
                        break;
                    case 'textarea':
                        $ret .= '<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for="'.$input->field_name.'">'.$input->field_title.' </label>
                                <textarea class="'.$err[2].'" id="'.$input->field_name.'" name="'.$input->field_name.'" placeholder="'.$input->field_placeholder.'" '.$input->required.' >'.old($input->field_name).'</textarea>
                            </li>';
                        break;
                    case 'select':

                        $ret .= '<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for="'.$input->field_name.'">'.$input->field_title.'</label>';

                        $ret .= '<select class="'.$err[2].'" id="'.$input->field_name.'" name="'.$input->field_name.'" '.$input->required.' >';

                        foreach ($vals as $key => $val)
                        {
                            $selected = old($input->field_name)==$key?"selected":"";

                            $ret  .= '<option value="'.$key.'" '.$selected.' >'.$val.'</option>';
                        }

                        $ret.= '</select></li>';
                        break;
                    case  'file':
                        $ret .= '<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for="'.$input->field_name.'">'.$input->field_title.' </label>
                                <input class="'.$err[2].'" type="file" id="'.$input->field_name.'" name="'.$input->field_name.'" accept=".doc,.docx,.ppt,.pptx,.pdf" '.$input->required.' > '.$input->field_instructions.'
                            </li>';
                        break;
                    case  'email':
                        $ret .='<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for='.$input->field_name.'>'.$input->field_title.' </label>
                                <input class="'.$err[2].'" type="email" id="'.$input->field_name.'" name="'.$input->field_name.'" value="'.old($input->field_name).'" placeholder="'.$input->field_placeholder.'" '.$input->required.' >
                            </li>';
                        break;
                    case  'tel':
                        $ret .='<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for='.$input->field_name.'>'.$input->field_title.' </label>
                                <input class="'.$err[2].'" type="tel" id="'.$input->field_name.'" name="'.$input->field_name.'" value="'.old($input->field_name).'" placeholder="'.$input->field_placeholder.'" '.$input->required.' >
                            </li>';
                        break;
                    case  'url':
                        $ret .='<li class="'.$err[1].'">
                                <label class="'.$err[0].'" for='.$input->field_name.'>'.$input->field_title.' </label>
                                <input class="'.$err[2].'" type="url" id="'.$input->field_name.'" name="'.$input->field_name.'" value="'.old($input->field_name).'" placeholder="'.$input->field_placeholder.'" '.$input->required.' >
                            </li>';
                        break;
                }
          }

          if ($form->newsletter == 1)
          {
                $ret .= ' <li>
                                <label for="newsletter_subscription">Would you like to subscribe to Future City
                                    Summit newsletter? </label>
                                <select name="newsletter_subscription" id="newsletter_subscription">
                                    <option value="y">Yes</option>
                                    <option value="n">No</option>
                                </select>
                            </li>';
          }

          if ($form->agreement_html != "")
          {
              $ret .= '<li>
							<label></label>
								<div class="checkbox"><input required="" name="agreement" type="checkbox" value="">'.$form->agreement_html.'</div>
							
							</li>';
          }


                $ret .= '<li>
                                <button type="submit">'.$form->submit_button.'</button>
                            </li>';
                $ret .= " </ul></form>";
        }


        return $ret;
    }

    public static function stories($element,$page)
    {
        $team_id = $text =SitePages::get_page_data($page,"input_" .$element['id']);

        $metas = $element['meta'];
        $ret = '    <section id ="inspirational-stories">
        <div class="inspirational-stories-section">
            <div class="container">
                <div class="row">';

                foreach (SiteStories::where('post_type','=','article')->get() as $stories)
                {

                    $content = strip_tags($stories->post_content);
                    $content = str_limit($content,140,'...');

                    $ret .= '<div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="fcs-story-row">
                            <div class="fcs-story-post fcs-story-card">
                                <div class="fcs-story-block story-image-1" style="background: url('.$stories->post_thumb.') center/cover no-repeat">
                                    <div class="fcs-story-header">
                                        <div class="fcs-story-date">
                                        <span class="text-electric-seafoam">
                                        '. Carbon::parse($stories->created_at)->format("d M Y") .'
                                        </span>
                                        <!--
                                            <span class="fcs-story-day">22</span>
                                            <span class="fcs-story-month">Feb</span>
                                            <span class="fcs-story-year">2018</span> -->
                                        </div>
                                        <ul class="fcs-story-menu-fcs-story-content">
                                            <li>
                                                <a href="/posts/'.$stories->post_slug.'" data-title="FCS POST - '.$stories->post_title.'" class="fa fa-bookmark-o"></a>
                                            </li>
                                            <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
                                            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="fcs-story-data">
                                        <div class="fcs-story-content">
                                            <span class="fcs-story-author">'.DB::table('admin_users')->find($stories->author_ID)->name.'</span>
                                            <h3 class="fcs-story-title"><a href="/posts/'.$stories->post_slug.'">'. $stories->post_title .' </a></h3>
                                            <p class="fcs-story-text">'.$content.'</p>
                                            <a href="/posts/'.$stories->post_slug.'" class="fcs-story-button">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }

        $ret .= '</div>
            </div>
        </div>
    </section>
';
        return $ret;
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

    public static function vhtml($element,$page)
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


    public static function venue_slider($element,$page)
    {
        $elemid = "input_" . $element['id'];



        $slider = SitePages::get_page_data($page, "input_" . $element['id']);

        $elems = DB::table('site_slider_meta')->where('slider_id', '=', $slider)->get();

        $ret = '<div id="'.$elemid.'">';

        $counter = 1;
        foreach ($elems as $elem) {
            $bgimg = $elem->img;
            $oText = $elem->content;
            $active = $counter==1?'active':'';
            if ($bgimg) {
                $ret .= '<div class="content ' . $active .'" data-slide="'.$counter.'" data-bg="'.$bgimg.'">
                <div class="info-wrapper">
                    '.$oText.'
                </div>
            </div>';
            }

            $counter++;
        }


        $ret .= '
            <div class="slide-left"><i class="material-icons">chevron_left</i></div>
            <div class="slide-right"><i class="material-icons">chevron_right</i></div>
                </div>';


        $elemid = '#' . $elemid;

        $ret .= "
<style type='text/css'>
                /* Landing Page Venue */
                $elemid {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    height: 100vh;
                    overflow: hidden;
                    background-color: #282828;
                }
                
                $elemid.compact .content:not(.active) {
                    width: 0%;
                }
                
                $elemid .content {
                    width: 100%;
                    height: 100%;
                    position: relative;
                    overflow: hidden;
                    -webkit-box-shadow: 5px 10px 20px black;
                    box-shadow: 5px 10px 20px black;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                    -webkit-filter: saturate(50%);
                    filter: saturate(50%);
                    -webkit-transition-property: width, -webkit-filter;
                    transition-property: width, -webkit-filter;
                    transition-property: filter, width;
                    transition-property: filter, width, -webkit-filter;
                    -webkit-transition-duration: 0.5s;
                    transition-duration: 0.5s;
                    -webkit-transition-timing-function: ease-in-out;
                    transition-timing-function: ease-in-out;
                    -webkit-transition-delay: 0.5s;
                    transition-delay: 0.5s;
                }
                $elemid .content.transition {
                    width: 50% !important;
                }
                
                $elemid .content:before {
                    content: \"\";
                    position: absolute;
                    width: 32px;
                    height: 32px;
                    bottom: 10px;
                    position: absolute;
                    left: 50%;
                    -webkit-transform: translate(-50%, 0%) scale(0.5);
                    transform: translate(-50%, 0%) scale(0.5);
                    background-color: rgba(0, 0, 0, 0.3);
                    -webkit-box-shadow: 0px 5px 1px rgba(0, 0, 0, 0.3) inset;
                    box-shadow: 0px 5px 1px rgba(0, 0, 0, 0.3) inset;
                    border-radius: 50%;
                    -webkit-transition: background-color 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
                    transition: background-color 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
                    transition: background-color 0.5s ease-in-out, transform 0.5s ease-in-out;
                    transition: background-color 0.5s ease-in-out, transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
                }
                
                $elemid .content.active {
                    width: 1000%;
                }
                
                $elemid .content:not(.active) {
                    cursor: pointer;
                    width: 100%;
                }
                $elemid .content:not(.active) .info-wrapper {
                    opacity: 0;
                    -webkit-transition: opacity 0.5s ease-in-out 0s;
                    transition: opacity 0.5s ease-in-out 0s;
                }
                
                $elemid .content .info-wrapper {
                    color: white;
                    margin: 20%;
                    -webkit-transition: opacity 1s ease-in-out 1s;
                    transition: opacity 1s ease-in-out 1s;
                }
                $elemid .content .info-wrapper h3.slidetitle {
                    font-size: 3em;
                    color: #fff;
                }
                $elemid .content .info-wrapper h3.slidetitle span {
                    font-size: 0.25em;
                    color: rgba(255, 255, 255, 0.3);
                }
                $elemid .content .info-wrapper p {
                    width: 100%;
                    font-size: 1.5em;
                    text-align: justify;
                    line-height: 30px;
                }
                
                $elemid .slide-left, html $elemid .slide-right {
                    position: absolute;
                    top: 50%;
                    -webkit-transform: translate(0%, -50%);
                    transform: translate(0%, -50%);
                    color: rgba(255, 255, 255, 0.5);
                    background-color: rgba(255, 255, 255, 0.1);
                    cursor: pointer;
                    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
                    -webkit-transition-property: color, padding, left, right;
                    transition-property: color, padding, left, right;
                    -webkit-transition-duration: 0.25s;
                    transition-duration: 0.25s;
                    -webkit-transition-timing-function: ease-in-out;
                    transition-timing-function: ease-in-out;
                }
                $elemid .slide-left:hover, html $elemid .slide-right:hover {
                    color: rgba(255, 255, 255, 0.9);
                }
                $elemid .slide-left:hover.slide-left, html $elemid .slide-right:hover.slide-left {
                    left: 0px;
                }
                $elemid .slide-left:hover.slide-right, html $elemid .slide-right:hover.slide-right {
                    right: 0px;
                }
                $elemid .slide-left:active, html $elemid .slide-right:active {
                    background-color: rgba(255, 255, 255, 0.2);
                    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
                }
                $elemid .slide-left i, html $elemid .slide-right i {
                    font-size: 5em;
                    margin-top: 5px;
                }
                $elemid .slide-left {
                    left: -10px;
                    border-radius: 0px 60px 60px 0px;
                }
                $elemid .slide-right {
                    right: -10px;
                    border-radius: 60px 0px 0px 60px;
                }
                
                
                </style>
                ";

        $ret .= '    <script type="text/javascript">
        // I\'m kinda tempted to turn this into a jquery/css plugin
        $(document).ready(function() {
            Math.seedrandom(\'pr\'); // Make Math.random seed based

            // Set timers and intervals
            var slideInterval = 5000,
                transTimer = 2500;

            // Init vars
            var compact = $("'.$elemid.'").hasClass("compact");
            var contentAmt = $("'.$elemid.' .content").length;  // Number of slides
            var loop = true;

            // HEX TO RGB FUNCTION
            function hexToRgb(hex) {
                var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                    r: parseInt(result[1], 16),
                    g: parseInt(result[2], 16),
                    b: parseInt(result[3], 16)
                } : null;
            }

            // Styling
            var dullcolors = ["#f44336", "#ec407a", "#ab47bc", "#7e57c2",
                    "#3f51b5", "#2196f3", "#4fc3f7", "#00bcd4",
                    "#66bb6a", "#aed581", "#e6ee9c", "#fff176",
                    "#ffca28", "#ffa726", "#ff5722"],
                fullcolors = ["#8d6e63", "#f50057", "#d500f9", "#651fff",
                    "#3d5afe", "#2979ff", "#00b0ff", "#00e5ff",
                    "#1de9b6", "#00e676", "#76ff03", "#c6ff00",
                    "#ffea00", "#ffc400", "#ff9100", "#ff3d00"];

            // Color each slide
            $(".content").each(function() {
                var bg_img = $(this).attr("data-bg");


                $(this).css({
                    "background" : " url("+bg_img+")",
                    "background-repeat" : "no-repeat",
                    "background-position" : "center",
                    "background-size" : "cover",
                    "-webkit-background-size" : "cover",
                    "-moz-background-size" : "cover"
                })
            });

            // Functionality
            if (loop) { var repeat = setInterval(changeSlide, slideInterval); }

            // Hide or show left right controls | only compact supports those
            if (compact == true) {
                $(".slide-left, .slide-right").show();
            } else {
                $(".slide-left, .slide-right").hide();
            }


            // Physical clicking | Content panels
            $(".content").on("click", function() {
                clearInterval(repeat); // Clear the interval | pause, basically
                $(".playbutton").addClass("paused"); // add the paused class | visual shit
                changeSlide($(this).attr("data-slide"), "clicked"); // changeSlide
            }); // END onClick

            $(".slide-left, .slide-right").on("click", function() {
                var slide = parseInt($("'.$elemid.' .content.active").attr("data-slide"));
                if ($(this).hasClass("slide-left")) {
                    slide--
                    console.log(slide);
                    if (slide == 0) {
                        slide = contentAmt;
                    }
                } else {
                    slide++
                    if (slide > contentAmt) {
                        slide = 1;
                    }
                }
                $(".playbutton").addClass("paused");
                clearInterval(repeat);
                changeSlide(slide, "clicked");
            });


            // FUNCTIONS -------

            // changeSlide() function
            function changeSlide(clicked, method) {
                var compact = $("'.$elemid.'").hasClass("compact"); // If compact is added
                // If natural, and not clicked called
                if (method != "clicked") {
                    // Figure slides
                    var currentSlide = $("'.$elemid.' .content.active").attr("data-slide");
                    var nextSlide = parseInt(currentSlide) + 1;

                    // Check if last slide
                    if (nextSlide > contentAmt) {
                        nextSlide = 1; // Set next slide to be the first slide

                        // Mobile/Fullscreen end slide transition | show all for a time
                        if (compact == true) {
                            // Transitioney stuff
                            $("'.$elemid.' .content:not(.active)").addClass("transition");
                            setTimeout(function() {
                                $("'.$elemid.' .content").removeClass("transition");
                            }, transTimer);
                        }
                    }
                } else { // If clicked, not natural
                    nextSlide = clicked;
                } // END if/else

                //Remove and add the active class | Make the slides slide
                $("'.$elemid.' .content").removeClass("active");
                $("'.$elemid.' .content[data-slide=\'"+nextSlide+"\']").addClass("active");
            } // END function
        }); // END .ready
        //# sourceURL=pen.js
    </script>';

        return $ret;
    }


        public static function slider($element,$page)
    {
        $slider = SitePages::get_page_data($page,"input_" .$element['id']);

        $elems = DB::table('site_slider_meta')->where('slider_id','=',$slider)->get();

        $ret = '<div class="tp-banner-container">
                    <div class="tp-banner">
                    <ul>';
        foreach ($elems as $elem)
        {
            $bgimg = $elem->img;
            $oText = $elem->content;
            if($bgimg)
            {
                $ret .= '<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="'. $bgimg .'"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="'. $bgimg .'"  alt="fullslide1"  data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
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
                try
                {
                    $tmp = call_user_func("self::".$element['type'],$element,$page);
                }
                catch (\Exception $exception)
                {
                    dump($exception->getMessage());
                    $tmp = "<strong>" . $element['type'] . '</strong> can not be parsed';
                }

            }
            else
            {
                $tmp = "<span class='text-danger bg-danger' style='padding: 5px; font-size: large'>Widget slug <strong>" . $element['type'] . '</strong> can not be parsed</span>';
            }

            $ret .=  $tmp . "\n";
        }

        return $ret;
    }

    public static function buildFooterMenuWidget($slot_code,$placement = 'nav')
    {
        $ret = "";
        try
        {
            $menu_id = DB::table('site_footer')->where('meta_key','=','sel_menu'. $slot_code)->first()->meta_value;
            $menu = DB::table('site_menus')->find($menu_id);
            $obj = SiteMenu::buildMenuArray($menu_id);

            if ($placement == 'nav')
            {
                $ret = '<h3 class="nav-title">'.$menu->title.'</h3>  <ul class="footer-list">';
            }
            elseif ($placement == 'social')
            {
                $ret = '<ul class="nav list-unstyled list-inline uppercase">';
            }
            elseif ($placement == 'subfooter')
            {
                $ret .= '<ul class="nav nav-small">';
            }

            foreach ($obj as $node)
            {
                $ret .= '<li><a href="'.$node['uri'].'">'.$node['title'].'</a></li>';
            }

            $ret .= '</ul>';
        }
        catch (\Exception $exception)
        {
            $ret = "";
        }

        return $ret;
    }

    public static function buildMenuWidget($obj = null){

        if ($obj==null)
        {
            $obj = SiteMenu::buildMenuArray(1);
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
