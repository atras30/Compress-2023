<?php

namespace App\Http\Controllers;

use App\Models\Form;
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    function dashboard()
    {
        return view('admin.dashboard', [
            'title' => "Registration",
            "registeredUsers" => Form::all()
        ]);
    }

    function viewmorePDF($id)
    {
        return view('admin.viewmore-userPDF', [
            'title' => "User Information",
            "User" => Form::find($id)
        ]);
    }

    function viewmoreBukti($id)
    {
        return view('admin.viewmore-userBukti', [
            'title' => "User Information",
            "User" => Form::find($id)
        ]);
    }

    public function export()
    {
        return Excel::download(new recruitmentExport, 'PendaftarLomba.xlsx');
    }
}
