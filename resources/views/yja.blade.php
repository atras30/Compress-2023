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

    .dark {
      background-color: #3395a9;
    }

    .background-purple {
      background-color: #745aa1
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
      padding-top: 5rem;
    }

    .h-2 {
      height: 2rem;
    }

    .bar {
      width: 3rem;
    }

    .flakes {
      opacity: .3;
    }

    .font-bazinga {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .hero-title {
      font-size: 3.5rem;
    }

    .title-description {
      max-width: 65rem;
    }
  </style>
@endsection

@section('contents')
  <div>
    <div class="main-content mh-85vh position-relative dark pb-5">
      <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/yja/background/flakes.png') }}" alt="Flakes">
      {{-- Background Assets --}}
      <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/yja/base/bar-left-yellow.png') }}" alt="left outer">

      <img class="position-absolute bottom-0" style="left: 2%" src="{{ asset('/images/yja/base/bottom-left-bar.png') }}" alt="Bottom Left Bar">
      <img class="position-absolute bottom-0" style="left: 2%" src="{{ asset('/images/yja/base/bottom-left-purple.png') }}" alt="Bottom Left Purple">

      <img class="position-absolute h-100 bar" style="left: 1%" src="{{ asset('/images/yja/base/bar-left-white.png') }}" alt="left inner">
      <img class="position-absolute top-0" style="right: 2%" src="{{ asset('/images/yja/base/top-right-bar.png') }}" alt="Top Right Bar">
      <img class="position-absolute top-0" style="right: 2%" src="{{ asset('/images/yja/base/top-right-purple-bar.png') }}" alt="Top Right Purple Bar">
      <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/yja/base/bar-right-red.png') }}" alt="Right Outer">
      <img class="position-absolute h-100 bar" style="right: 1%" src="{{ asset('/images/yja/base/bar-right-white.png') }}" alt="Right Inner">
      <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="top">
      <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">


      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white">
            YOUNG JOURNALIST AWARD
          </div>

          <div class="px-5 fw-semibold mb-5 text-white title-description text-center mx-auto">
            Young Journalist Award (YJA) hadir sebagai puncak sekaligus penutup rangkaian acara COMMPRESS.
            Acara terakhir ini dihadirkan sebagai bentuk apresiasi atas kontribusi peserta COMMPRESS 2023 dan
            Ruang Indi(e)penden 2023. Pada acara puncak ini, COMMPRESS 2023 akan memberikan apresiasi peserta
            dengan memberikan hadiah kepada para pemenang lomba dan karya terbaik. Tidak lupa, COMMPRESS 2023 menyajikan
            penampilan guest star sebagai penutup rangkaian acara Young Journalist Award COMMPRESS 2023
          </div>
        </section>

        {{-- Episodes --}}
        <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4 mb-5 pb-5">
          <div class="flex-item position-relative" style="max-width: 70%">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container-2.png') }}" alt="Button Container">
            <p id="time-remaining" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-2"></p>
          </div>
      </div>


      </section>
    </div>

    <div class="position-relative background-purple pb-5 mh-85vh d-flex justify-content-center align-items-center">
      <img class="position-absolute object-fit-cover w-100 h-100" src="{{ asset('/images/yja/background/motive-1.png') }}" alt="Flakes">
      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">

      <div class="position-relative text-center fs-2 fw-bold text-black">
        FOTO ON PROGRESS DARI DOKUM
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    const fetchData = async () => {
      const parsedDateRoute = "{{ route('time.diff') }}";

      const times = [
        "{{ $time }}",
      ];

      fetch(`${parsedDateRoute}?startDates=${times}`)
        .then(response => response.json())
        .then(response => {
          document.getElementById("time-remaining").textContent = response.parsedDates[0];
        });
    }

    fetchData();

    setInterval(() => {
      fetchData();
    }, 1000);
  </script>
@endsection
