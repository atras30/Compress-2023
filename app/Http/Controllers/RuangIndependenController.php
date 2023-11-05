<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use App\Models\Form;
use Carbon\Carbon;

class RuangIndependenController extends Controller
{
    public function ruangindependen(){
        $time = Carbon::create(2023, 9, 25, 00, 00, 00, 'Asia/Jakarta');
        return view('ruangIndependen',[
            'title' => "Ruang Independen Commpress",
            'time' => $time
        ]);
    }

    public function pameran(){
        return view('pameran',[
            'title' => "Pameran Commpress",
        ]);
    }

    public function daftarruangindependen(){
        return view('daftarruangindependen', [
            'title' => "Daftar Ruang Independen"
        ]);
    }

    public function mobile_journalism(){
        return view('daftarmobilejournalism', [
            'title' => "Daftar Mobile Journalism"
        ]);
    }
    
    public function formValidateMOJO(Request $request){
        
        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required','email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'instagram' => 'required',
            'linkkaryaig' => 'required',
        ]);
        
        $validReq['type']='Mobile Journalism';

        $extension = $request->file('bukti')->getClientOriginalExtension();
        $newName = $request->namalengkap.'_BuktiBayar_MOJO_'.now()->timestamp.'.'.$extension;
        $request->file('bukti')->storeAs('pendaftar',$newName);
        $validReq['bukti']=$newName;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];
        
        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function long_form_article(){
        return view('daftarlongformarticle', [
            'title' => "Daftar Long-Form Article"
        ]);
    }

    public function formValidateLFA(Request $request){
        
        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required','email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'pathfilehasilkarya' => 'required',
        ]);
        
        $validReq['type']='Long-Form Article';
        $extensionbuktibayar = $request->file('bukti')->getClientOriginalExtension();
        $pdfname = $request->file('pathfilehasilkarya')->getClientOriginalName();
        
        $buktibayar = $request->namalengkap.'_BuktiBayar_LFA_'.now()->timestamp.'.'.$extensionbuktibayar;
        $filepdf = now()->timestamp.'_'.$pdfname;        
        
        $request->file('pathfilehasilkarya')->storeAs('pendaftar', $filepdf);
        $request->file('bukti')->storeAs('pendaftar', $buktibayar);
        
        $validReq['bukti']=$buktibayar;
        $validReq['pathfilehasilkarya']=$filepdf;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];
        
        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function news_infographic(){
        return view('daftarnewsinfographic', [
            'title' => "Daftar News Infographic"
        ]);
    }

    public function formValidateNI(Request $request){
        
        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required','email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'pathfilehasilkarya' => 'required',
        ]);
        
        $validReq['type']='News Infographic';
        $extensionbuktibayar = $request->file('bukti')->getClientOriginalExtension();
        $pdfname = $request->file('pathfilehasilkarya')->getClientOriginalName();
        
        $buktibayar = $request->namalengkap.'_BuktiBayar_NI_'.now()->timestamp.'.'.$extensionbuktibayar;
        $filepdf = now()->timestamp.'_'.$pdfname;        
        
        $request->file('pathfilehasilkarya')->storeAs('pendaftar', $filepdf);
        $request->file('bukti')->storeAs('pendaftar', $buktibayar);

        $validReq['bukti']=$buktibayar;
        $validReq['pathfilehasilkarya']=$filepdf;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];
        
        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function akhirruangindependen(){
        return view('akhirruangindependen', [
            'title' => "Halaman Akhir Daftar Ruang Independen"
        ]);
    }
}
