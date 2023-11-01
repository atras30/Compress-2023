<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Talkshow;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

class TalkshowController extends Controller
{
    public function talkshow(){
        $time = Carbon::create(2023, 9, 10, 00, 00, 30, 'Asia/Jakarta');
        return view('talkshow',[
            'title' => "Talkshow Commpress",
            'time' => $time
        ]);
    }

    public function before(){
        return view('talkshowbefore',[
            'title' => "Talkshow Commpress 2022"
        ]);
    }

    public function daftarTalkshow(){
        return view('daftartalkshow',[
            'title' => "Daftar Talkshow Commpress 2023"
        ]);
    }

    public function formValidateTalkshow(Request $request){
        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'medsos' => 'required',
            'nim' => 'required_if:universitas,==,UMN',
            'prodi' => 'required_if:universitas,==,UMN',
            'angkatan' => 'required_if:universitas,==,UMN',
            'email' => ['required_if:universitas,==,UMN|email:dns'],
            
        ]);
        Talkshow::create($validReq);

        return redirect('/talkshow/daftar/terimakasih');
    }

    public function thankyouform(){
        return view('thankyouformtalkshow', [
            'title' => "Terima Kasih!"
        ]);
    }
}
