<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Registration;

class FormController extends Controller
{
    public function form(){
        return view('formRecruitment',[
            'title' => "Form Recruitment",
        ]);
    }
    
    public function formValidate(Request $request){
        $validReq = $request->validate([
            'fullname' => 'required|regex:/[a-zA-Z]+$/x',
            'nickname' => 'required|regex:/[a-zA-Z]+$/x',
            'nim' => 'required|regex:/000000(\d{5})/|unique:registrations,NIM',
            'angkatan' => 'required',
            'prodi' => 'required',
            'tanggallahir' => 'required',
            'email' => ['required','email:dns','regex:/^.+@(student\.umn\.ac\.id)$/', 'unique:registrations,email'],
            'noHp' => 'required|unique:registrations,noHp',
            'idLine' => 'required|unique:registrations,idLine',
            'instagram' => 'required|unique:registrations,instagram',
            'divisi1' => 'required',
            'divisi2' => 'required',
            'alasandiv1' => 'required',
            'alasandiv2' => 'required',
            'pengalaman' => 'required',
            'kesibukan' => 'required',
            'alasan-masuk-commpress' => 'required',
            'portofolio' => 'required',
        ]);

        Registration::create($validReq);
        
        Alert::html('Thankyou!', 'You\'ve Successfully Registered.<br> Please wait for further information <br> <small>Stay tune on our instagram <a href="https://www.instagram.com/commpressumn">@commpressumn</a></small>', 'success');

        return redirect('/');
    }
}
