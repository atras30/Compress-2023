@extends("layout.user.master_layout")

@section('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
@endsection

@section("contents")
<div class="container">
  <div class="maintit">
      <h1>commpress 2023</h1>
  </div>
  
  <a href="{{ route('form') }}" class="btn btn-primary">Go To Form Registrasi</a>
  <a href="{{ route('divisi') }}" class="btn btn-primary">Go To Divisi</a>
</div>
@endsection