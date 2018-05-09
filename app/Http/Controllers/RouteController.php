<?php

namespace App\Http\Controllers;

use App\Databases\SiteLayouts;
use App\Databases\SiteMenu;
use App\Databases\SitePages;
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
                foreach(SitePages::all() as $row)
                {
                    if ($row->permalink == $request->path())
                    {
                        try{
                            $template = 'layouts.'.SiteLayouts::find(SiteTemplates::find($row->template_id)->layout_id)->slug;
                            return view($row->slug)->with('request',$request)->with('template',$template)->with('menus', $this->buildMenuWidget())->with('data',array('test','test1'));
                        }
                        catch (NotFoundResourceException $e)
                        {
                            return view('404')->with('menus', $this->buildMenuWidget());
                        }
                    }
                }

                return view('404')->with('menus', $this->buildMenuWidget());
            break;
            case 'POST':
                break;
        }

    }

    private function buildMenuWidget($obj = null){

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

                $ret .= $this->buildMenuWidget($node['children']);

                $ret .= "</ul>
                </li>\n";
            }
        }

        return $ret;
    }
}
