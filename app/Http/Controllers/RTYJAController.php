<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTYJAController extends Controller
{
    public function rtyja(){
        $eps1 = "2023-09-10 23:39:00";
        $eps2 = "2023-09-10 23:39:00";
        $eps3 = "2023-09-10 23:39:00";
        return view('rtyja',[
            'title' => "RTYJA Commpress",
            'eps1' => $eps1,
            'eps2' => $eps2,
            'eps3' => $eps3
        ]);
    }
}
