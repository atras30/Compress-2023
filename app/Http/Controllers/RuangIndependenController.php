<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangIndependenController extends Controller
{
    public function ruangindependen(){
        $time = "2023-09-10 23:39:00";
        return view('ruangIndependen',[
            'title' => "Ruang Independen Commpress",
            'time' => $time
        ]);
    }
}
