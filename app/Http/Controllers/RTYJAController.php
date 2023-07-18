<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTYJAController extends Controller
{
    public function rtyja(){
        $time = "2023-09-10 23:39:00";
        return view('rtyja',[
            'title' => "RTYJA Commpress",
            'time' => $time
        ]);
    }
}
