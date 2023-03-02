<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
      $divisis = Divisi::all();
      return view('divisi',[
        'title' => "Divisi",
        'divisis' => $divisis
      ]);
    }
}
