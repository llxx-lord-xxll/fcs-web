<?php

namespace App\Http\Controllers;

use App\Databases\SiteLayouts;
use App\Databases\SitePages;
use App\Databases\SiteStories;
use App\Databases\SiteTemplates;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class RouteController extends Controller
{

    public function index()
    {
      return 'test';
    }

    public function show(Request $request)
    {
        switch ($request->method())
        {
            case 'GET':

                if(substr(ltrim($request->path(),'/'),0,5) == "posts")
                {
                    $post_slug = str_after(ltrim($request->path(),'/'),"posts/");
                    $post_slug = str_before($post_slug,"?");
                    $tmp = 0;
                    foreach (SiteStories::all() as $row)
                    {
                        if ($row->post_slug == $post_slug)
                        {
                            $tmp = 1;
                            return view('layouts.post')->with('data',$row)->with('menus', WidgetParser::buildMenuWidget());

                        }
                    }
                    if ($tmp == 0)
                    {
                        return view('404')->with('menus', WidgetParser::buildMenuWidget());
                    }
                }

                foreach(SitePages::all() as $row)
                {
                    if (ltrim($row->permalink,'/') == ltrim($request->path(),'/'))
                    {
                        try{
                            $template = 'layouts.'.SiteLayouts::find(SiteTemplates::find($row->template_id)->layout_id)->slug;
                            $data = WidgetParser::parse($row->id,$row->template_id);
                            return view($row->slug)->with('request',$request)->with('template',$template)->with('menus', WidgetParser::buildMenuWidget())->with('data',$data)->with('page_title',$row->title);
                        }
                        catch (NotFoundResourceException $e)
                        {
                            return view('404')->with('menus', WidgetParser::buildMenuWidget());
                        }
                    }
                }

                return view('404')->with('menus', WidgetParser::buildMenuWidget());
            break;
            case 'POST':

                break;
        }

    }


}
