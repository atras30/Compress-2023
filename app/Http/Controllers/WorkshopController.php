<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function workshop(){
        $time = "2023-09-10 23:39:00";
        return view('workshop',[
            'title' => "Workshop Commpress",
            'time' => $time
        ]);
    }
}
