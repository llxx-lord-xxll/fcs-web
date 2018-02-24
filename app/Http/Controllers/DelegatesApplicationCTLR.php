<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelegatesApplicationCTLR extends Controller
{
    private $request = null;
    private $v;
    public function withReq(Request $request)
    {
        $this->request = $request;
        $this->v =  View('delegates-application');
    }

    public function returnView()
    {

        return $this->v;
    }
}
