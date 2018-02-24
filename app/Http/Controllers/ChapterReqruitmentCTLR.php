<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterReqruitmentCTLR extends Controller
{
    private $request = null;
    private $v;
    public function withReq(Request $request)
    {
        $this->request = $request;
        $this->v =  View('chapter-recruitment');
    }

    public function returnView()
    {

        return $this->v;
    }

}
