<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class YJAController extends Controller
{
    public function yja(){
        $time = Carbon::create(2023, 9, 10, 00, 00, 30, 'Asia/Jakarta');
        return view('yja',[
            'title' => "Workshop Commpress",
            'time' => $time
        ]);
    }
}
