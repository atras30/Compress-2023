@extends("layout.user.master_layout")

@section('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
@endsection

@section("contents")
<div class="container">
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <h1>commpress 2023</h1>
        <a href="{{ route('form') }}" class="btn btn-primary">Go To Form Registrasi</a>
        <a href="{{ route('divisi') }}" class="btn btn-primary">Go To Divisi</a>
    </div>
</div>
@endsection