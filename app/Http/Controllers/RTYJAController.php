<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class RTYJAController extends Controller
{
    public function rtyja(){
        $eps1 = "2023-07-20 00:00:00";
        $eps2 = "2023-12-10 23:39:45";
        $eps3 = "2023-09-10 23:39:23";

        return view('rtyja',[
            'title' => "RTYJA Commpress",
            'eps1' => $eps1,
            'eps2' => $eps2,
            'eps3' => $eps3,
        ]);
    }
}
