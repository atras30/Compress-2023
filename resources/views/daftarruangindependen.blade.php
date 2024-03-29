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
    <div class="main-content mh-85vh position-relative bg-purple pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100" src="{{ asset('/images/daftar-ruangindependen/bar-middle-transparant.png') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/daftar-ruangindependen/kurator.png') }}" alt="Right Outer">
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
                {{-- Title --}}
                <section class="ptop-5">
                <div class="hero-title px-5 mb-3 font-bazinga text-white">
                    RUANG INDI(E)PENDEN 2023 #DARIJURNALISMUDA
                </div>
                <div class="hero-title2 px-5 mb-5 font-bazinga text-warning">
                    SUBMIT KARYA KAMU SEKARANG!
                </div>
                </section>
                <section class="d-flex flex-column flex-lg-row pleft-2 gap-4 mb-5 pb-5">
                    <div class="flex-item position-relative" style="max-width: 70%">
                        <a id="btn-daftar" href="{{ route('mobile_journalism') }}"><img class="mw-100" src="{{ asset('/images/components/buttons/button-rounded.png') }}" alt="Button Rounded">
                        <p class="position-absolute start-50 top-50 font-bazinga-daftar btn-bar translate-middle fs-4 fw-bold text-black text-decoration-none" style="white-space: nowrap;">Mobile Journalism</p></a>
                    </div>
                    <div class="flex-item position-relative" style="max-width: 70%">
                        <a id="btn-daftar" href="{{ route('long_form_article') }}"><img class="mw-100" src="{{ asset('/images/components/buttons/button-rounded.png') }}" alt="Button Rounded">
                        <p class="position-absolute start-50 top-50 font-bazinga-daftar btn-bar translate-middle fs-4 fw-bold text-black text-decoration-none" style="white-space: nowrap;">Long Form Article</p></a>
                    </div>
                    <div class="flex-item position-relative" style="max-width: 70%">
                        <a id="btn-daftar" href="{{ route('news_infographic') }}"><img class="mw-100" src="{{ asset('/images/components/buttons/button-rounded.png') }}" alt="Button Rounded">
                        <p class="position-absolute start-50 top-50 font-bazinga-daftar btn-bar translate-middle fs-4 fw-bold text-black text-decoration-none" style="white-space: nowrap;">News Infographic</p></a>
                    </div>
                </section>
        </div>
    </div>
    <div>
        <div class="main-content mh-85vh position-relative bg-yellow pb-5">
            <img class="position-absolute object-fit-cover w-100 h-100 flakes" src="{{ asset('/images/daftar-ruangindependen/background/dots.png') }}" alt="background">

            <img class="position-absolute top-0" style="left: 4.5%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-left-red.png') }}" alt="top Left red">
            <img class="position-absolute top-0" style="left: 4.5%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-left-top.png') }}" alt="top Left Bar">

            <img class="position-absolute start-0 h-100 bar" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-left-blue.png') }}" alt="left outer">
            <img class="position-absolute h-100 bar" style="left: 1%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-left-white.png') }}" alt="left inner">

            <img class="position-absolute bottom-0"  style="right: 3.5%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-right-red.png') }}" alt="bottom Right red">
            <img class="position-absolute bottom-0" style="right: 3.5%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-right-bottom.png') }}" alt="bottom Right Bar">

            
            <img class="position-absolute end-0 h-100 bar" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-right-blue.png') }}" alt="Right Outer">
            <img class="position-absolute h-100 bar" style="right: 1%" src="{{ asset('/images/daftar-ruangindependen/base-div2/bar-right-white.png') }}" alt="Right Inner">

            <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

            <div class="position-relative">
              <section class="ptop-5">
                  <div class="hero-title3 px-5 mb-3 font-bazinga text-center text-white">
                      TERMS AND CONDITION
                  </div>
                  <div class="hero-title4 px-5 mb-5 font-bazinga text-center text-white">
                      <u>REGISTRASI & PENGUMPULAN KARYA</u>
                  </div>
              </section>
              <section class="d-flex justify-content-center align-items-center flex-lg-row mb-5 pb-5">
                  <div class="list font-bazinga-daftar fs-3 px-5 py-5">
                          <ol>
                              <li>Pendaftaran dan pengumpulan karya dibuka dari Selasa, 1 Agustus dan ditutup Kamis, 31 Agustus 2023.</li>
                              <li>Peserta wajib mengikuti akun instagram @commpressumn & @ruang.indiependen.</li>
                              <li>Peserta melakukan registrasi melalui website commpress.umn.ac.id.</li>
                              <li>Peserta diperbolehkan untuk mengikuti lebih dari satu jenis lomba.</li>
                              <li>Peserta diperbolehkan untuk mengirimkan maksimal 2 karya di setiap lomba yang diikuti dengan syarat membayar registrasi sesuai dengan jumlah karya yang dikumpulkan.</li>
                              <li>Peserta lomba wajib membayar biaya pendaftaran sebesar Rp15.000,00 dengan melakukan transfer melalui Rekening BCA 6695296723 a.n Novan Gustaf Fuyan.</li>
                              <li>Biaya pendaftaran akan hangus apabila peserta tidak mengumpulkan karya sesuai dengan batas waktu yang ditentukan.</li>
                              <li>Setiap peserta yang mengikuti lomba akan mendapatkan 1 SKKM dan pemenang akan mendapatkan 2 SKKM (untuk mahasiswa Universitas Multimedia Nusantara).</li>
                              <li>Peserta Lomba wajib untuk mengikuti dan memahami seluruh persyaratan dan ketentuan yang sudah ditetapkan oleh panitia COMMPRESS 2023.</li>
                          </ol>
                  </div>
                </section>
        </div>
        </div>
    </div>
    
        
    </div>
    
</div>

@endsection

@section('scripts')
    
@endsection
