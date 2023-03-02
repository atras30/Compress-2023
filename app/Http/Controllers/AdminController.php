<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Exports\recruitmentExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    function login()
    {
        return view('admin.login', [
            'title' => "Login Admin",
        ]);
    }

    function verifyLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah',
        ])->onlyInput('email');
    }

    function dashboard()
    {
        return view('admin.dashboard', [
            'title' => "Registration",
            "registeredUsers" => Registration::all()
        ]);
    }

    function viewmore($id){
        return view('admin.viewmore-user', [
            'title' => "User Information",
            "User" => Registration::find($id)
        ]);
    }

    public function export() 
    {
        return Excel::download(new recruitmentExport, 'recruitment.xlsx');
    }


}
