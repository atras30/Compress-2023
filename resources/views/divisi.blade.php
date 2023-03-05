@extends('layout.user.master_layout')

@section('styles')
<link href="{{ asset('css/divisi.css') }}" rel="stylesheet"/>
@endsection

@section('contents')
  <a href="{{ route('home') }}" class="cta mb-4">
      <svg viewBox="0 0 13 10" height="10px" width="15px" class="backarw">
        <path d="M1,5 L11,5"></path>
        <polyline points="8 1 12 5 8 9"></polyline>
      </svg>
      <span>Back</span>
  </a>
  <div class="container">
    <div class="starter-template">
      <h1 class="pt-2 judul">COMPRESS 2023's DIVISIONS</h1>
      <div class="row">
        @foreach ($divisis as $divisi)
          <div class="col-sm-4">
            <section class="hover-div" style="height:300px !important; overflow-y: auto">
              <div class="hover-div_inner">
                <h3 class="tdivisi fw-bold">{{ $divisi->nama }}</h3>
                <div class="text-start pt-1">{!! $divisi->deskripsi !!}</div>
              </div>
            </section>
          </div>
        @endforeach
      </div>
      <a href="{{ route('form') }}">
        <button class="mt-3">
          <span class="shadow"></span>
          <span class="edge"></span>
          <span class="front text"> Go to Form Registration</span>
        </button>
      </a>
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
