@extends("layout.user.master_layout")

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
        font-family: 'Bazinga';
        font-style: normal;
        font-weight: 400;
        src: url('fonts/Bazinga-Regular.ttf');
    }

    .font-bazinga {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .font-bazinga-daftar {
      font-family: Bazinga;
    }

    .bg-purple {
      background-color: #38448F;
    }

    .bg-red {
      background-color: #BB181B;
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

    .hero-title {
      font-size: 5rem;
    }

    .hero-title2 {
      font-size: 3rem;
    }

    .title-description {
      font-family: 'Inter', sans-serif;
      max-width: 60rem;
    }

</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-purple pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/ruangindependen/background/bar-middle-transparant.svg') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/ruangindependen/base/bar-left.svg') }}" alt="left outer">
        <img class="position-absolute h-100 bar" style="left: 1%" src="{{ asset('/images/ruangindependen/base/bar-left-white.svg') }}" alt="left inner">
        <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/ruangindependen/base/bar-right.svg') }}" alt="Right Outer">
        <img class="position-absolute h-100 bar" style="right: 1%" src="{{ asset('/images/ruangindependen/base/bar-right-white.svg') }}" alt="Right Inner">
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
                {{-- Title --}}
                <section class="text-center ptop-5">
                <div class="hero-title2 px-5 mb-3 font-bazinga text-white">
                    PAMERAN JURNALISTIK:
                </div>
                <div class="hero-title px-5 mb-5 font-bazinga text-white">
                    RUANG INDI(E)PENDEN
                </div>

                <div class="px-5 fw-semibold mb-5 text-white title-description text-center mx-auto">
                        Pameran Jurnalistik Ruang Indi(e)penden adalah wadah yang dihadirkan COMMPRESS untuk jurnalis muda memamerkan karya terbaik mereka.
                        Lebih dari 500+ karya akan dikurasi dan hasilnya akan dipamerkan.<br><br>
                        Tahun ini, pameran Ruang Indi(e)penden mengangkat tema sekaligus tagline “Dari Jurnalis Muda” yang artinya
                        keseluruhan karya yang akan dipamerkan merupakan hasil karya anak muda setingkat mahasiswa.
                </div>
                </section>

                {{-- Episodes --}}
                <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4 mb-5 pb-5">
                <div class="flex-item position-relative" style="max-width: 70%">
                    <a id="btn-daftar" href="#"><img class="mw-100" src="{{ asset('/images/components/buttons/button-container-2.png') }}" alt="Button Container">
                    <p id="time-remaining" class="position-absolute start-50 top-50 font-bazinga-daftar translate-middle px-4 w-100 text-center fw-bold fs-2 text-black text-decoration-none"></p></a>
                </div>
                </section>
        </div>
    </div>
    <div class="position-relative bg-red pb-5 mh-85vh d-flex justify-content-center align-items-center">
        <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/ruangindependen/background/flakes.png') }}" alt="Flakes">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative text-center fs-2 fw-bold text-black">
          <section class="d-flex justify-content-evenly align-items-center mb-5" style="margin-top:5rem;">
            <img class="img-thumbnail img-fluid p-3" src="{{ asset('/images/ruangindependen/fotoatas.png') }}" style="z-index: 10; border: 4px solid black"/>
          </section>
          <section class="d-flex flex-column flex-lg-row gap-5" style="margin-bottom:5rem;">
            <img class="img-thumbnail img-fluid p-3" src="{{ asset('/images/ruangindependen/fotokiri.png') }}" style="z-index: 10; border: 4px solid black"/>
            <img class="img-thumbnail img-fluid p-3" src="{{ asset('/images/ruangindependen/fotokanan.png') }}" style="z-index: 10; border: 4px solid black"/>
          </section>
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
          if(document.getElementById("time-remaining").textContent.match("00 Days, 00:00:00")){
            document.getElementById("time-remaining").innerHTML = "DAFTAR";
            document.getElementById("btn-daftar").href = "{{route('daftarruangindependen')}}";
        }
        });

    }

    fetchData();

    setInterval(() => {
      fetchData();
    }, 1000);

  </script>
@endsection
