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
      background-color: #fbd019;
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
      width: 3.5rem;
    }

    .polkadot {
      opacity: .5;
    }

    .font-bazinga {
      font-family: Bazinga;
    }

    .hero-title {
      font-size: 3.5rem;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }
  </style>
@endsection

@section('contents')
  <div class="main-content mh-85vh position-relative dark">
    <img class="position-absolute object-fit-cover w-100 h-100 polkadot" src="{{ asset('/images/road-to-yja/background/white-polkadot.png') }}" alt="White polkadot">
    {{-- Background Assets --}}
    <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="top">
    <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/road-to-yja/base/left.png') }}" alt="left outer">
    <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/road-to-yja/base/right.png') }}" alt="left inner">
    <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">


    <div class="position-relative">
      {{-- Title --}}
      <section class="text-center ptop-5">
        <div class="hero-title px-5 mb-5 font-bazinga text-white">
          <div>ROAD TO</div>
          <div>YOUNG JOURNALIST AWARD</div>
        </div>

        <div class="px-5 fw-bold mb-5 text-black">
            <div>Media promosi acara Young Journalist Award dan dokumentasi beberapa persiapan acara
                COMMPRESS 2023</div>
            <div>yang dikemas menjadi video dengan 3 episode.</div>
        </div>
      </section>

      {{-- Episodes --}}
      <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4 mb-5 pb-5">
        <div class="flex-item">
          <h3 class="text-center font-bazinga">EPISODE 1</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-1-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>

        <div class="flex-item">
          <h3 class="text-center font-bazinga">EPISODE 2</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-2-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>

        <div class="flex-item">
          <h3 class="text-center font-bazinga">EPISODE 3</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-3-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>
    </div>


    </section>
  </div>
@endsection

@section('scripts')
  <script>
    const fetchData = async () => {
      const parsedDateRoute = "{{ route('time.diff') }}";

      const times = [
        "{{ $eps1 }}",
        "{{ $eps2 }}",
        "{{ $eps3 }}",
      ];

      fetch(`${parsedDateRoute}?startDates=${times}`)
        .then(response => response.json())
        .then(response => {
          document.getElementById("episode-1-time-diff").textContent = response.parsedDates[0];
          document.getElementById("episode-2-time-diff").textContent = response.parsedDates[1];
          document.getElementById("episode-3-time-diff").textContent = response.parsedDates[2];
        });
    }

    fetchData();

    setInterval(() => {
      fetchData();
    }, 1000);
  </script>
@endsection
