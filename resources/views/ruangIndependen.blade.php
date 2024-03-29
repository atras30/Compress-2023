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
    
    @media (max-width: 1000px) {
      .hero-title{
        font-size: 3rem!important;
      }

      .hero-title2 {
        font-size: 1.5rem!important;
      } 

      .title-description {
        font-family: 'Inter', sans-serif;
        max-width: 20rem!important;
        font-size:10pt;
      }
    }

    @media(max-width: 1100px){
      .textfoto{
        width:400px;
      }
    }

    @media(max-width: 450px){
      .textfoto{
        width:300px;
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
      max-width: 70rem;
    }

</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-purple pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/ruangIndependen/background/bar-middle-transparant.svg') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/ruangIndependen/base/bar-left.svg') }}" alt="left outer">
        <img class="position-absolute h-100 bar" style="left: 1%" src="{{ asset('/images/ruangIndependen/base/bar-left-white.svg') }}" alt="left inner">
        <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/ruangIndependen/base/bar-right.svg') }}" alt="Right Outer">
        <img class="position-absolute h-100 bar" style="right: 1%" src="{{ asset('/images/ruangIndependen/base/bar-right-white.svg') }}" alt="Right Inner">
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangIndependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangIndependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
                {{-- Title --}}
                <section class="text-center ptop-5">
                <div class="hero-title2 px-5 mb-3 font-bazinga text-white">
                    PAMERAN JURNALISTIK:
                </div>
                <div class="hero-title px-5 mb-5 font-bazinga text-white">
                    RUANG INDI(E)PENDEN
                </div>

                <div class="px-5 fw-semibold mb-5 text-white title-description text-center mx-auto fs-5">
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
        <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/ruangIndependen/background/flakes.png') }}" alt="Flakes">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangIndependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="text-center fs-2 fw-bold text-black position-relative">
          <section class="d-flex justify-content-evenly align-items-center mb-5" style="margin-top:10rem;">
            <img class="img-thumbnail img-fluid p-3 position-relative" src="{{ asset('/images/ruangIndependen/fotoatas.png') }}" style="z-index: 2; border: 4px solid black"/>
            <img class="textfoto position-absolute top-0 start-0" style="z-index: 3; margin-top:2rem;" src="{{ asset('/images/ruangIndependen/textRI.png') }}" alt="bottom">

          </section>
          <section class="d-flex flex-column flex-xl-row gap-5" style="margin-bottom:5rem;">
            <img class="img-thumbnail img-fluid p-3" src="{{ asset('/images/ruangIndependen/fotokiri.png') }}" style="z-index: 2; border: 4px solid black"/>
            <img class="img-thumbnail img-fluid p-3" src="{{ asset('/images/ruangIndependen/fotokanan.png') }}" style="z-index: 2; border: 4px solid black"/>
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
            document.getElementById("time-remaining").innerHTML = "To Be Announce";
            document.getElementById("btn-daftar").href = "#";
        }
        });

    }

    fetchData();

    setInterval(() => {
      fetchData();
    }, 1000);

  </script>
@endsection
