@extends('layout.user.master_layout')

@section('styles')
  <style>
    body {
      font-family: 'Lato', sans-serif;
      padding-top: 50px;
    }

    .starter-template {
      padding: 0px 15px 80px;
      text-align: center;
    }

    span.lower-text {
      color: #ffc300;
      font-size: 25px;
      display: block;
    }

    .hover-div {
      padding: 20px 20px;
      text-align: center;
      min-height: 350px;
    }

    .hover-div {
      border-top: 1px solid #f8f8f8;
      background: #f8f8f8;
      box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      margin: 10px 0px;
    }

    .hover-div:hover {
      -webkit-transform: translateY(-20px);
      -ms-transform: translateY(-20px);
      transform: translateY(-20px);
      box-shadow: 0 22px 43px rgba(0, 0, 0, 0.32);
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
@endsection

@section('contents')
  <div class="container">
    <a href="{{ route('home') }}" class="btn btn-primary mb-4">&laquo; Back</a>
    <div class="starter-template">
      <h1>INI HALAMAN DIVISI...</h1>
      <div class="row">
        @foreach ($divisis as $divisi)
          <div class="col-sm-4">
            <section class="hover-div" style="height:300px !important; overflow-y: auto">
              <div class="hover-div_inner">
                <h3>{{ $divisi->nama }}</h3>
                <div class="text-start">{!! $divisi->deskripsi !!}</div>
              </div>
            </section>
          </div>
        @endforeach
      </div>
      <a href="{{ route('form') }}" class="btn btn-primary">Go To Form Registrasi</a>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      $('.hover-div').hover(function() {
        $('.hover-div').stop().fadeTo('fast', 0.3);
        $(this).stop().fadeTo('fast', 1);
      }, function() {
        $('.hover-div').stop().fadeTo('fast', 1);
      });
    });
  </script>
@endsection
