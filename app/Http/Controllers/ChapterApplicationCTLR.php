<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterApplicationCTLR extends Controller
{
    private $request = null;
    private $v;
    public function withReq(Request $request)
    {
        $this->request = $request;
        $this->v =  View('chapter-application');
    }

    public function returnView()
    {

        return $this->v;
    }

}
