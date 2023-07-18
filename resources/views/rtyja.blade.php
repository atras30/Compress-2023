@extends('layout.user.master_layout')

@section('styles')
  <style>
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

    .w-max-3 {
      width: 3rem;
    }
  </style>
@endsection

@section('contents')
  <div class="main-content mh-85vh position-relative dark">
    <section class="h-100">
      {{-- Background Assets --}}
      <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="top">
      <img class="position-absolute start-0 h-100 w-max-3" src="{{ asset('/images/road-to-yja/base/left.png') }}" alt="left outer">
      <img class="position-absolute start-0 h-100 w-max-3" src="{{ asset('/images/road-to-yja/base/right.png') }}" alt="left inner">
      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">

      {{-- Title --}}
      <section class="text-center ptop-5">
        <div class="hero-title px-5 mb-4">
          <h1>ROAD TO</h1>
          <h1>YOUNG JOURNALIST AWARD</h1>
        </div>
        <p class="px-5 mb-5 fw-bold">
          Media promosi acara Young Journalist Award dan dokumentasi beberapa persiapan acara
          COMMPRESS 2023 yang dikemas menjadi video dengan 3 episode.
        </p>
      </section>

      {{-- Episodes --}}
      <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4 mb-5 pb-5">
        <div class="flex-item">
          <h3 class="text-center">EPISODE 1</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-1-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>

        <div class="flex-item">
          <h3 class="text-center">EPISODE 2</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-2-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>

        <div class="flex-item">
          <h3 class="text-center">EPISODE 3</h3>
          <div class="position-relative">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container.png') }}" alt="Button Container">
            <p id="episode-3-time-diff" class="position-absolute start-50 top-50 translate-middle px-4 w-100 text-center fw-bold fs-4"></p>
          </div>
        </div>

      </section>
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
