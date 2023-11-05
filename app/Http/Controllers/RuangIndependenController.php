<?php

namespace App\Http\Controllers;

use App\Models\Art;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use App\Models\ArtLike;
use App\Models\Form;
use Carbon\Carbon;
use Illuminate\Http\Response;

class RuangIndependenController extends Controller
{
    public function ruangindependen()
    {
        $time = Carbon::create(2023, 9, 25, 00, 00, 00, 'Asia/Jakarta');
        return view('ruangIndependen', [
            'title' => "Ruang Independen Commpress",
            'time' => $time
        ]);
    }

    public function pameran(){
        $artikelInteraktif = Art::where('tipe', 'artikel interaktif')->withCount('likes')->get();
        $videoDokumenter = Art::where('tipe', 'video dokumenter')->withCount('likes')->get();
        $audioDokumenter = Art::where('tipe', 'audio dokumenter')->withCount('likes')->get();

        return view('pameran',[
            'title' => "Pameran Commpress",
            'artikel_interaktif' => $artikelInteraktif,
            'video_dokumenter' => $videoDokumenter,
            'audio_dokumenter' => $audioDokumenter,
        ]);
    }

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return the server IP if the client IP is not found using this method.
    }

    public function like(Request $request)
    {
        try {
            $isLikeExists = ArtLike::where("art_id", $request->artId)->where("ip", $request->visitorId)->first();
            if ($isLikeExists) {
                ArtLike::where("art_id", $request->artId)->where("ip", $request->visitorId)->delete();
            } else {
                ArtLike::create([
                    'ip' => $request->visitorId,
                    'art_id' => $request->artId
                ]);
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        return response()->json([
            "new_total_like" => ArtLike::where('art_id', $request->artId)->count()
        ]);
    }

    public function daftarruangindependen()
    {
        return view('daftarruangindependen', [
            'title' => "Daftar Ruang Independen"
        ]);
    }

    public function mobile_journalism()
    {
        return view('daftarmobilejournalism', [
            'title' => "Daftar Mobile Journalism"
        ]);
    }

    public function formValidateMOJO(Request $request)
    {

        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required', 'email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'instagram' => 'required',
            'linkkaryaig' => 'required',
        ]);

        $validReq['type'] = 'Mobile Journalism';

        $extension = $request->file('bukti')->getClientOriginalExtension();
        $newName = $request->namalengkap . '_BuktiBayar_MOJO_' . now()->timestamp . '.' . $extension;
        $request->file('bukti')->storeAs('pendaftar', $newName);
        $validReq['bukti'] = $newName;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];

        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function long_form_article()
    {
        return view('daftarlongformarticle', [
            'title' => "Daftar Long-Form Article"
        ]);
    }

    public function formValidateLFA(Request $request)
    {

        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required', 'email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'pathfilehasilkarya' => 'required',
        ]);

        $validReq['type'] = 'Long-Form Article';
        $extensionbuktibayar = $request->file('bukti')->getClientOriginalExtension();
        $pdfname = $request->file('pathfilehasilkarya')->getClientOriginalName();

        $buktibayar = $request->namalengkap . '_BuktiBayar_LFA_' . now()->timestamp . '.' . $extensionbuktibayar;
        $filepdf = now()->timestamp . '_' . $pdfname;

        $request->file('pathfilehasilkarya')->storeAs('pendaftar', $filepdf);
        $request->file('bukti')->storeAs('pendaftar', $buktibayar);

        $validReq['bukti'] = $buktibayar;
        $validReq['pathfilehasilkarya'] = $filepdf;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];

        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function news_infographic()
    {
        return view('daftarnewsinfographic', [
            'title' => "Daftar News Infographic"
        ]);
    }

    public function formValidateNI(Request $request)
    {

        $validReq = $request->validate([
            'namalengkap' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'email' => ['required', 'email:dns'],
            'medsos' => 'required',
            'bukti' => 'required',
            'pathfilehasilkarya' => 'required',
        ]);

        $validReq['type'] = 'News Infographic';
        $extensionbuktibayar = $request->file('bukti')->getClientOriginalExtension();
        $pdfname = $request->file('pathfilehasilkarya')->getClientOriginalName();

        $buktibayar = $request->namalengkap . '_BuktiBayar_NI_' . now()->timestamp . '.' . $extensionbuktibayar;
        $filepdf = now()->timestamp . '_' . $pdfname;

        $request->file('pathfilehasilkarya')->storeAs('pendaftar', $filepdf);
        $request->file('bukti')->storeAs('pendaftar', $buktibayar);

        $validReq['bukti'] = $buktibayar;
        $validReq['pathfilehasilkarya'] = $filepdf;

        Form::create($validReq);

        $mailData = [
            'body' => 'Terima Kasih telah mendaftarkan karyanya.
                        Stay Tune terus media sosial kitaa!!',
        ];

        Mail::to($request->email)->send(new sendEmail($mailData));

        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/ruangindependen/daftar/terimakasih');
    }

    public function akhirruangindependen()
    {
        return view('akhirruangindependen', [
            'title' => "Halaman Akhir Daftar Ruang Independen"
        ]);
    }
}
