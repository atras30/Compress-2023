<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YJAController extends Controller
{
    public function yja(){
        $time = "2023-09-10 23:39:00";
        return view('yja',[
            'title' => "YJA Commpress",
            'time' => $time
        ]);
    }
}
