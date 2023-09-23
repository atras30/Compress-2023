@extends("layout.user.master_layout")

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
        font-family: 'Bazinga';
        font-style: normal;
        font-weight: 400;
        src: url('/fonts/Bazinga-Regular.ttf');
    }
    @media (max-width: 639px) {
      .title5{
        font-size:2.5rem!important;
      }

      .title6{
        font-size:4rem!important;
      }
      .hero-title2{
        font-size: 3rem!important;
      }

      .hero-title {
        font-size: 1.5rem!important;
      } 
    }

    @media (max-width: 1141px) {
      .hero-title3 {
        font-size: 4rem!important;
      }

      .hero-title4 {
        font-size: 2rem!important;
      }

      .list{
          max-width: 40rem!important;
          font-size:15pt!important;
          
      }
    }

    @media (max-width: 812px) {
      .hero-title3 {
        font-size: 3rem!important;
      }

      .hero-title4 {
        font-size: 1.5rem!important;
      }

      .list{
          max-width: 30rem!important;
          font-size:12pt!important;
      }
    }

    @media (max-width: 990px) {
      .btn-bar{
        left:95pt!important;
      }
    }

    @media (max-width: 414px) {
      .btn-bar{
        left:90pt!important;
      }
    }

    @media (max-width: 500px) {
      .title5{
        font-size:2rem!important;
        margin-top:1.5rem!important;
      }

      .title6{
        font-size:2.5rem!important;
      }
    }

    
    .font-bazinga {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .font-bazinga-daftar {
      font-family: Bazinga;
    }

    .bg-blue {
      background-color: #38448F;
    }

    .bg-yellow {
      background-color: #FBD019;
    }

    .judul-list {
      font-family: Bazinga;
      font-size: 1.8rem;
    }

    .bg-red{
      background-color: #BB181B;
    }

    .text-red{
      color: red;
    }

    .mh-85vh {
      min-height: 85vh;
    }

    .mw-100 {
      max-width: 100%;
    }

    .mw-100vw {
      min-width: 100vw;
    }

    .ptop-5 {
      padding-top: 8rem;
      padding-left: 2rem;
    }

    .pleft-2{
        padding-left: 4.5rem;
    }

    .hero-title {
      font-size: 2.5rem;
    }

    .hero-title2 {
      font-size: 6.5rem;
      max-width: 50rem;
    }

    .hero-title3 {
      font-size: 6rem;
    }

    .hero-title4 {
      font-size: 3.5rem;
    }

    .list{
        max-width: 60rem;
        border-style: solid;
        border-width: thick;
        background-color: white;
    }

</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-blue pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100" src="{{ asset('/images/talkshow/spiral-daftar.png') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/daftar-ruangindependen/kurator.png') }}" alt="Right Outer">
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
                {{-- Title --}}
                <section class="ptop-5">
                <div class="hero-title px-5 mb-3 font-bazinga text-white">
                    YUK, IKUTI KESERUAN:
                </div>
                <div class="hero-title2 px-5 mb-5 font-bazinga text-warning">
                    TALKSHOW
                </div>
                </section>
                <section class="d-flex flex-column flex-lg-row pleft-2 gap-4 mb-5 pb-5">
                    <div class="flex-item position-relative" style="max-width: 70%">
                        <a id="btn-daftar" href="#formdaftar"><img class="mw-100" src="{{ asset('/images/components/buttons/button-rounded.png') }}" alt="Button Rounded">
                        <p class="position-absolute start-50 top-50 font-bazinga-daftar btn-bar translate-middle fs-4 fw-bold text-black text-decoration-none" style="white-space: nowrap;">Daftar</p></a>
                    </div>
                </section>
        </div>
    </div>
    <div>
        <div class="main-content mh-85vh position-relative bg-yellow pb-5">
          <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/talkshow/glass-bg.png') }}" alt="background">
            <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

            <div class="position-relative">
              <section class="ptop-5 mb-5">
                  <div class="hero-title3 px-5 mb-3 font-bazinga text-center text-white">
                      NARASUMBER
                  </div>
              </section>
              <section class="position-relative">
                  <div class="px-5 mw-100">
                    <div class="row mb-5">
                        <div class="col mb-5 d-flex justify-content-center">
                            <img class="p-3" style="z-index:1;" src="{{ asset('/images/talkshow/narasumber-frame.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col mb-5 d-flex justify-content-center">
                          <img class="p-3" style="z-index:1;" src="{{ asset('/images/talkshow/narasumber-frame.png') }}" alt="">
                      </div>
                      <div class="col mb-5 d-flex justify-content-center">
                          <img class="p-3" style="z-index:1;" src="{{ asset('/images/talkshow/narasumber-frame2.png') }}" alt="">
                      </div>
                    </div>
                  </div>
              </section>
        </div>
        </div>
    </div>
    </div>
    <div class="position-relative bg-red pb-5 mh-85vh" id="formdaftar">
      <img class="position-absolute object-fit-cover w-100 h-100 motive2" src="{{ asset('/images/talkshow/regis-bg.png') }}" alt="motive">
      <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

      <div class="position-relative">
      <section class="d-flex justify-content-center align-items-center flex-column ptop-7">
        <div class="position-relative text-center">
            <img class="mw-100" style="width:54rem; padding-bottom:3rem;"src="{{ asset('/images/talkshow/registration-title-bg.png')}}"/>
            <div class="position-absolute top-50 start-50 translate-middle fs-2 fw-bold text-black text-length">
              <div class="px-5 font-bazinga text-info title5" style="font-size:4rem;">
                  Registrasi:
              </div>
              <div class="px-5 font-bazinga text-warning title6" style="font-size:5rem;">
                  Talkshow
              </div>
              <div class="px-5 mb-2 font-bazinga text-warning title6" style="font-size:5rem;">
                  ....
              </div>
            </div>
        </div>
      </section>
      <form class="px-5" action="{{ route('validateTalkshow') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="mb-4">
          <label class="judul-list text-white"for="namalengkap">Nama Lengkap <span class="text-red"> * </span></label>
          <input type="text" name="namalengkap" class="form-control" value={{ @old('namalengkap') }}>
          @error('namalengkap')
            <div class="error-text">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
            <label class="judul-list text-white"for="universitas">Asal Universitas <span class="text-red"> * </span></label>
            <input type="text" name="universitas" class="form-control" value={{ @old('universitas') }}>
            @error('universitas')
              <div class="error-text">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="judul-list text-white"for="nim">NIM <span class="text-red"> * </span></label><br>
            <input type="text" name="nim" placeholder="contoh: 00000012345" class="form-control" value={{ @old('nim') }}>
            <small class="fs-6 fs-bold text-white">Khusus Mahasiswa Universitas Multimedia Nusantara.<br>
            Isi '-' Jika Bukan Mahasiswa Universitas Multimedia Nusantara</small>
            @error('nim')
              <div class="error-text">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mb-4">
          <label class="judul-list text-white"for="prodi">Program Studi <span class="text-red"> * </span></label><br>
          <select name="prodi" class="form-control" value={{ @old('prodi') }}>
              <option value="" disabled selected>Select an option</option>
              <option value="jurnalistik">Jurnalistik</option>
              <option value="informatika">Informatika</option>
          </select>
          @error('prodi')
            <div class="error-text">
              {{ $message }}
            </div>
          @enderror
      </div>
        <div class="row mb-4">
          <div class="col">
            <label class="judul-list text-white"for="email">Email <span class="text-red"> * </span></label>
            <input type="text" name="email" class="form-control" value={{ @old('email') }}>
            @error('email')
              <div class="error-text">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col">
            <label class="judul-list text-white"for="medsos">Line atau Whatsapp <span class="text-red"> * </span></label>
            <input type="text" name="medsos" class="form-control" value={{ @old('medsos') }}>
            @error('medsos')
              <div class="error-text">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <div class="mb-4">
          <label class="judul-list text-white"for="asal">Dari mana kamu tahu Seminar/Workshop COMMPRESS 2023?<span class="text-red"> * </span>
          </label><br>
          <select name="asal" class="form-control" value={{ @old('asal') }}>
              <option value="" disabled selected>Select an option</option>
              <option value="instagram">Instagram COMMPRESS UMN</option>
              <option value="tiktok">TikTok COMPRESS UMN</option>
              <option value="medpar">Sosial Media Milik Media Partner</option>
              <option value="teman">Teman</option>
          </select>
          @error('prodi')
            <div class="error-text">
              {{ $message }}
            </div>
          @enderror
      </div>

        <button class="btn btn-light judul-list rounded text-black d-grid gap-2 col-3 mx-auto mb-5" type="submit">Kirim</button>
      </form>
    </div>
  </div>

@endsection

@section('scripts')
    
@endsection
