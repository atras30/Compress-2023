@extends("layout.user.master_layout")

@section('styles')
@endsection

@section("contents")
<div class="container">
  <h1>HOME NYA DIBUAT NABIL!</h1>
  <a href="{{ route('form') }}" class="btn btn-primary">Go To Form Registrasi</a>
  <a href="#" class="btn btn-primary">Go To Liat Divisi</a>
</div>
@endsection