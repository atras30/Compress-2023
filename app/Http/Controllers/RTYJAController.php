<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class RTYJAController extends Controller
{
    public function rtyja(){
        $eps1 = Carbon::create(2023, 9, 27, 00, 00, 00, 'Asia/Jakarta');
        $eps2 = Carbon::create(2023, 9, 28, 00, 00, 00, 'Asia/Jakarta');
        $eps3 = Carbon::create(2023, 9, 29, 00, 00, 00, 'Asia/Jakarta');

        return view('rtyja',[
            'title' => "RTYJA Commpress",
            'eps1' => $eps1,
            'eps2' => $eps2,
            'eps3' => $eps3,
        ]);
    }
}
