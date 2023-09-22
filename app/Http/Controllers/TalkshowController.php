<?php

namespace App\Http\Controllers;

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
            'nim' => 'required',
            'prodi' => 'required',
            'email' => ['required','email:dns'],
            'medsos' => 'required',
            'asal' => 'required'
        ]);

        Talkshow::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftar talkshow.
                        Stay Tune terus media sosial kitaa!!',
        ];
        
        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/talkshow/daftar/terimakasih');
    }

    public function thankyouform(){
        return view('thankyouformtalkshow', [
            'title' => "Terima Kasih!"
        ]);
    }
}
