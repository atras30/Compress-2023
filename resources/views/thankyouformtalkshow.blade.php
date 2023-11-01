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

    .font-bazinga {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .font-bazinga-daftar {
      font-family: Bazinga;
    }

    .bg-purple {
      background-color: #745AA1;
    }

    .bg-yellow {
      background-color: #FBD019;
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
      max-width: 60rem;
    }


</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-purple pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100" src="{{ asset('/images/daftar-ruangindependen/bar-middle-transparant.png') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/daftar-ruangindependen/kurator.png') }}" alt="Right Outer">
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangIndependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangIndependen/base/bar-bottom-white.svg') }}" alt="bottom">


        <div class="position-relative">
                {{-- Title --}}
                <section class="ptop-5">
                <div class="hero-title px-5 mb-3 font-bazinga text-white">
                    TALKSHOW
                </div>
                <div class="hero-title2 px-5 mb-5 font-bazinga text-warning">
                    TERIMA KASIH ATAS PARTISIPASINYA!
                </div>
                <div class="hero-title2 text-white px-5 mb-5 fs-4">
                    Tunggu informasi selanjutnya melalui Instagram COMMPRESS UMN, yaa...
                </div>               
                </section>
        </div>
    </div>       
</div>

@endsection

@section('scripts')
    
@endsection
