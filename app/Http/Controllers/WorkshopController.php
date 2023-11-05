<?php

namespace App\Http\Controllers;

use App\Models\WorkshopRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class WorkshopController extends Controller
{
    public function workshop()
    {
        $time = Carbon::create(2023, 9, 10, 00, 00, 30, 'Asia/Jakarta');
        return view('workshop', [
            'title' => "Workshop Commpress",
            'time' => $time
        ]);
    }

    public function registrationView()
    {
        return view('workshop_registration', [
            'title' => "Workshop Registration"
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama-lengkap' => "required",
            "asal-universitas" => "required",
            "nim" => "required_if:asal-universitas,==,Universitas Multimedia Nusantara",
            "program-studi" => "required_if:asal-universitas,==,Universitas Multimedia Nusantara",
            "email" => "required_if:asal-universitas,==,Universitas Multimedia Nusantara",
            "angkatan" => "required_if:asal-universitas,==,Universitas Multimedia Nusantara",
            "line-whatsapp" => "required",
            "know-commpress-from" => "required",
            "input-other" => "present",
            "alasan" => "required",
        ], [
            "nama-lengkap.required" => "Nama lengkap harus diisi.",
            "asal-universitas.required" => "Asal Universitas harus diisi.",
            "nim.required" => "NIM harus diisi.",
            "program-studi.required" => "Program Studi harus diisi.",
            "angkatan.required" => "Angkatan harus diisi",
            "email.required" => "Email harus diisi",
            "email.rfc" => "Email harus merupakan email yang valid.",
            "email.dns" => "Email harus merupakan email yang valid.",
            "line-whatsapp.required" => "Line atau Nomor Whatsapp harus diisi",
            "know-commpress-from.required" => "Input ini harus diisi.",
            "alasan.required" => "Alasan harus diisi.",
        ]);

        if ($validator->fails())
            return to_route("workshop.registration")
                ->with("isFormValidationError", true)
                ->withErrors($validator)
                ->withInput();



        $validated = $validator->validated();

        //Error handling kalau field `tahu commpress dari: Lainnya` dan field `Lainnya` ga diisi.
        $knowCommpressFrom = $validated['know-commpress-from'];
        if (!empty($knowCommpressFrom) && $knowCommpressFrom == "Lainnya") {
            $validated['know-commpress-from'] = $validated['input-other'];
            $inputOtherValidator = Validator::make($request->all(), [
                "input-other" => "required",
            ], [
                "input-other.required" => "Input `Lainnya` harus diisi."
            ]);
            if ($inputOtherValidator->fails())
            return to_route("workshop.registration")
            ->with("isFormValidationError", true)
            ->withErrors($inputOtherValidator)
            ->withInput();
        }

        try {
            WorkshopRegistration::create([
                "full_name" => $validated['nama-lengkap'],
                "nim" => $validated['nim'],
                'asal_universitas'=> $validated['asal-universitas'],
                "major" => $validated['program-studi'] ?? null,
                "angkatan" => $validated["angkatan"] ?? null,
                "email" => $validated['email'],
                "line_id_or_whatsapp_number" => $validated['line-whatsapp'],
                "know_commpress_from" => $validated['know-commpress-from'],
                "alasan" => $validated['alasan'],

            ]);

            session()->flash("flash_message", "Yeay, Pendaftaran Workshop Sukses!");
        } catch (\Exception $e) {
            Log::critical($e->getMessage());
            session()->flash("flash_message", "Error: ".$e->getMessage());
            session()->flash("isFormValidationError", true);
        }

        return to_route('workshop.registration');
    }
}
