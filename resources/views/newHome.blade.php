@extends('layout.user.master_layout')

@section('styles')
  <script src="https://cdn.tailwindcss.com"></script>
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

    .h-2rem {
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
  <div class="w-full overflow-w-hidden">
    
  </div>
  <div class="main-content first-section position-relative yellow">
    <section class="h-100">
      <div class="mh-100">
        <img class="position-absolute overflow-hidden cloud-1" src="{{ asset('images/home/components/awan-kiri-atas.png') }}" alt="cloud-1">
        <img class="position-absolute overflow-hidden cloud-2" src="{{ asset('images/home/components/awan-kiri-bawah.png') }}" alt="cloud-2">
        <img class="position-absolute overflow-hidden cloud-3" src="{{ asset('images/home/components/awan-kanan-atas.png') }}" alt="cloud-3">
        <img class="position-absolute overflow-hidden cloud-4" src="{{ asset('images/home/components/awan-kanan-bawah.png') }}" alt="cloud-4">
      </div>
      <img class="position-absolute start-0 w-100 h-100 sun-bg" src="{{ asset('images/home/bg/sun-bg.png') }}" alt="pattern">
      <img class="position-absolute start-0 w-100 h-2rem bar" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
      <img class="position-absolute bottom-0 w-100 h-2rem bar" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
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

  <div class="min-h-screen w-full relative">
    <div class="flex flex-row w-full h-full z-50 absolute justify-around items-center">
      <div class="w-1/3 h-screen">
        <img class="h-full w-full object-fill" src="{{ asset('/images/home/bg/kotakR.svg') }}" alt="bottom">
      </div>
      <div class="w-2/5 h-screen">
        <img class="h-full w-full object-fill" src="{{ asset('/images/home/bg/kotakL.svg') }}" alt="bottom">
      </div>
    </div>
    <div class="flex flex-row w-full h-full z-50 absolute justify-around items-center">
      <div class="w-1/3 px-12">
        <h1 class="text-center text-xl text-white drop-shadow-[0_4px_4px_rgba(0,0,0,1)]" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK INTERNAL</h1>
        <ul class="list-disc text-sm mt-4 font-bold" style="font-family: 'Inter', sans-serif;">
          <li>Meningkatkan awareness tentang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Mengasah kemampuan dan keterampilan mahasiswa UMN terhadap kerja Jurnalistik,</li>
          <li>Memperkenalkan kemajuan teknologi di bidang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Memperkenalkan Komik Jurnalistik dalam bentuk digital,</li>
          <li>Menambah pengetahuan dan pengalaman mahasiswa tentang kerja jurnalistik</li>
        </ul>
      </div>
      <div class="w-1/3 px-12">
        <h1 class="text-center text-xl text-white drop-shadow-[0_4px_4px_rgba(0,0,0,1)]" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK EKSTERNAL</h1>
        <ul class="list-disc text-sm mt-4 font-bold" style="font-family: 'Inter', sans-serif;">
          <li>Memperkenalkan UMN kepada pihak eksternal secara lebih luas,</li>
          <li>Memperkenalkan karya jurnalistik mahasiswa/i UMN kepada pihak eksternal,</li>
          <li>Memperkenalkan Program Studi Jurnalistik kepada pihak eksternal,</li>
          <li>Memperkenalkan COMMPRESS UMN kepada pihak eksternal, tidak hanya siswa dan mahasiswa, tetapi juga perusahaan media jurnalisme yang ikut terlibat kerja sama,</li>
          <li>Mendorong minat mahasiswa/i Indonesia dalam bidang jurnalistik melalui workshop dan lomba bertemakan jurnalistik.</li>
        </ul>
      </div>
    </div>
    <img class="h-full absolute bottom-0 z-40" src="{{ asset('/images/home/bg/bgsplit.png') }}" alt="bottom">
  </div>

  <div class="min-h-[150vh] w-full relative">
    <div class="flex flex-col w-full h-full z-50 absolute justify-center items-center gap-12">
      <h1 class="text-white text-4xl drop-shadow-[0_4px_4px_rgba(0,0,0,1)]" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">LATEST ACTIVITIES!</h1>
      <div class="flex flex-col md:flex-row justify-center items-center gap-4">
        <a href="https://www.instagram.com/p/Cu9LeiBMQwf/"><img src="{{ asset('/images/home/components/IG3.png') }}" class=""/></a>
        <a href="https://www.instagram.com/p/CrDb_qbLlUI/"><img src="{{ asset('/images/home/components/IG1.png') }}" class=""/></a>
        <a href="https://www.instagram.com/p/CssrBpZtZls/"><img src="{{ asset('/images/home/components/IG2.png') }}" class=""/></a>
        
      </div>
    </div>
    <img class="w-full absolute top-0 z-50" src="{{ asset('/images/home/components/flat-bar.png') }}" alt="top">
    <img class="h-[150vh] w-full absolute bottom-0 z-40" src="{{ asset('/images/home/bg/bgactivity.png') }}" alt="bg">
    <img class="w-full absolute bottom-0 z-50" src="{{ asset('/images/home/components/flat-bar.png') }}" alt="bottom">
  </div>
  
  <div class="w-full min-h-[150vw] bg-[#3395a9] relative flex flex-col items-center ">
    <div class="absolute w-1/2 h-full flex flex-col justify-around odd:items-end even:items-start z-20 px-auto">
      <h1 class="mx-auto text-white text-4xl drop-shadow-[0_4px_4px_rgba(0,0,0,1)] text-decoration-underline" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">TIMELINE</h1>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl1.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl2.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl3.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl4.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl5.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl6.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl7.png') }}" class="bg-white"/>
      </a>
      <a href="" class="even:mr-auto odd:ml-auto">
        <img src="{{ asset('/images/home/components/tl8.png') }}" class="bg-white"/>
      </a>
    </div>
    <img class="w-full min-h-full absolute bottom-0 z-10" src="{{ asset('/images/home/bg/Frame.png') }}"/>
    <img class="absolute top-4 left-4 z-10" src="{{ asset('/images/home/components/petirL.png') }}"/>
    <img class="absolute bottom-4 right-4 z-10" src="{{ asset('/images/home/components/petirR.png') }}"/>
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
