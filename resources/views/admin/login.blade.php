@extends("layout.admin.master_layout")

@section('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
@endsection

@section("contents")
<div class="container center-div">
    <img class="logo-tv" src="{{ asset('images/commpress2022.svg') }}"/>
  <h2 class="text-center mt-4">Welcome, Admin!</h2>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form action="/admin/login" method="POST">
    @csrf
    <div class="mb-3">
      <input type="email" class="form-control" id="email" name="email" placeholder="Username/Email">
    </div>
    <div class="mb-3 ">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <div class="text-start justify-content-start mt-2 ms-2">
          <input type="checkbox" id="showPassword"> Show Password
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Login</button>
  </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script>
  $(document).ready(function(){
    $('#showPassword').on('change', function(){
      $('#password').attr('type',$('#showPassword').prop('checked')==true?"text":"password"); 
    });
  });
</script>
@endsection
