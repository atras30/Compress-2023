<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WorkshopController extends Controller
{
    public function workshop(){
        $time = Carbon::create(2023, 9, 10, 00, 00, 30, 'Asia/Jakarta');
        return view('workshop',[
            'title' => "Talkshow Commpress",
            'time' => $time
        ]);
    }
}
