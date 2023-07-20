@extends('layout.user.master_layout')

@section('styles')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
      font-family: 'Bazinga';
      font-style: normal;
      font-weight: 400;
      src: url('fonts/Bazinga-Regular.ttf');
    }

    .yellow {
      background-color: #FBD019;
    }

    .green {
      background-color: #3395A9;
    }

    .spiral-bg {
      background-image: url('images/workshop/base/spiral-bright.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
    }

    .first-section {
      min-height: 40rem;
    }

    .mh-100vh {
      min-height: 100vh;
    }

    .mw-100 {
      max-width: 80%;
    }

    .ptop-5 {
      padding-top: 5rem;
    }

    .h-2 {
      height: 2rem;
    }

    .w-max-3 {
      width: 3rem;
    }

    .h-max-10 {
      height: 10rem;
    }

    .w-max-50 {
      width: 50rem;
    }

    .w-max-21vw {
      width: 21vw;
    }

    .base-right {
      right: 1rem;
    }

    .base-left {
      left: 1rem;
    }

    .hero-title {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
      font-size: 500px;
    }

    .title-content {
      font-family: 'Inter', sans-serif;
      font-weight: 400;
    }

    .fs-4rem {
      font-size: 4rem;
    }

    .timer {
      font-family: 'Inter', sans-serif;
    }

    .base-top-left {
      left: 2rem;
    }

    .w-max-95vw {
      width: 95vw;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .sun-bg {
      z-index: 0;
      opacity: 35%;
    }

    .cloud-1 {
      z-index: 3;
      top: -90px;
      left: -120px;
      overflow: hidden;
    }

    .cloud-2 {
      z-index: 3;
      bottom: -90px;
      left: -120px;
      overflow: hidden;
    }

    .cloud-3 {
      z-index: 3;
      top: -90px;
      right: -120px;
      overflow: hidden;
    }

    .cloud-4 {
      z-index: 3;
      bottom: -90px;
      right: -120px;
      overflow: hidden;
    }

    .bar {
      z-index: 4;
    }

    .logo {
      width: 110%;
      height: 110%;
      max-width: 70vw;
      padding-left: 5%;

    }
  </style>
@endsection

@section('contents')
  <div class="main-content first-section position-relative yellow">
    <section class="h-100">
      <div class="mh-100">
        <img class="position-absolute overflow-hidden cloud-1" src="{{ asset('images/home/components/awan-kiri-atas.png') }}" alt="cloud-1">
        <img class="position-absolute overflow-hidden cloud-2" src="{{ asset('images/home/components/awan-kiri-bawah.png') }}" alt="cloud-2">
        <img class="position-absolute overflow-hidden cloud-3" src="{{ asset('images/home/components/awan-kanan-atas.png') }}" alt="cloud-3">
        <img class="position-absolute overflow-hidden cloud-4" src="{{ asset('images/home/components/awan-kanan-bawah.png') }}" alt="cloud-4">
      </div>
      <img class="position-absolute start-0 w-100 h-100 sun-bg" src="{{ asset('images/home/bg/sun-bg.png') }}" alt="pattern">
      <img class="position-absolute start-0 w-100 h-2 bar" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
      <img class="position-absolute bottom-0 w-100 h-2 bar" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
    </section>

    <section class="position-relative ptop-5 mw-100 mx-3">
      <div class="d-flex flex-column flex-md-row align-items-stretch fw-bold gap-5 justify-content-center">
        <img class="img-fluid align-self-center logo" src="{{ asset('/images/home/components/logo.png') }}" alt="Logo">
        <div class=" align-self-center">
          <div class="hero-title px-5 mb-4">
            <h1 class="text-white fs-4rem text-center">COMMPRESS</h1>
          </div>
          <div class="mx-3 title-content fw-bold fs-5">
            <p class="px-5 mb-3 text-black text-justify">COMMPRESS merupakan kegiatan tahunan Program Studi Jurnalistik Universitas Multimedia Nusantara (UMN). COMMPRESS merupakan istilah dari gabungan dua kata dalam bahasa Inggris: “communication” dan “press”. COMMPRESS memiliki makna “compress” yang berarti “memampatkan”. Dengan begitu, secara umum COMMPRESS hadir sebagai wadah yang memampatkan karya-karya jurnalistik mahasiswa/i.</p><br>

            <p class="px-5 mb-5 text-black text-justify">COMMPRESS pertama kali diselenggarakan pada 2012 dan telah dilaksanakan tiap tahun hingga saat ini. COMMPRESS dibentuk sebagai tempat bagi mahasiswa untuk menyalurkan minat dan bakat mereka dalam dunia jurnalistik. Oleh karena itu, fokus COMMPRESS mengacu pada bidang jurnalistik. Setiap tahun, COMMPRESS menarik pengunjung dan peserta dari berbagai kalangan jurnalistik dan nonjurnalistik.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="mh-100vh green spiral-bg position-relative d-flex justify-content-center align-items-center" style="z-index: 5;">
    <section class="h-100">
      <img class="position-absolute bottom-0 start-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
    </section>
    <section class="position-relative text-center ptop-5 mw-100">
      <div class="px-5 mb-4">
        <h1 class="fw-bold fs-4">FOTO ON PROGRESS DARI DOKUM</h1>
      </div>
    </section>
  </div>
  </div>
@endsection

@section('scripts')
  {{-- <script>
        const fetchData = async () => {
        const parsedDateRoute = "{{ route('time.diff') }}";

        const times = [
            "{{ $time }}",
        ];

        fetch(`${parsedDateRoute}?startDates=${times}`)
            .then(response => response.json())
            .then(response => {
            document.getElementById("data").textContent = response.parsedDates[0];
            });
        }

        fetchData();

        setInterval(() => {
        fetchData();
        }, 1000);
    </script> --}}
@endsection
