@extends('layout.user.master_layout')

@section('styles')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
      font-family: 'Bazinga';
      font-style: normal;
      font-weight: 400;
      src: url('/fonts/Bazinga-Regular.ttf');
    }

    @media (min-width: 450px) {
      .carousel-inner {
        display: flex;
      }

      .carousel-item {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

    }

    @media(max-width:1000px) {
      .pembuat-artikel {
        font-size: 1.5rem !important;
      }

      .judul-artikel {
        font-size: 1.5rem !important;
      }

    }

    @media(max-width:808px) {
      .cover-artikel {
        height: 60% !important;
      }

      .pembuat-artikel {
        font-size: 1.5rem !important;
      }

      .judul-artikel {
        font-size: 1rem !important;
      }
    }

    @media(max-width:450px) {
      .artikel-interaktif {
        min-height: 10vh;
        "

      }

      .cover-artikel {
        max-height: 28rem !important;
        width: 80% !important;
        margin: auto;
      }

      .hero-title {
        font-size: 2.5rem !important;
      }

      .card-title {
        font-size: 1rem !important;
      }

      .card-text {
        font-size: 0.85rem !important;
      }
    }

    @media(max-width:1472px) {
      .sponsor-top {
        width: 30%;
        height: 40%;
      }

      .sponsor-top2 {
        width: 30%;
        height: 40%;
      }

      .sponsor-bottom {
        width: 25%;
        height: 40%;
      }
    }

    @media(max-width:1114px) {
      .sponsor-top {
        width: 30%;
        height: 40%;
      }

      .sponsor-top2 {
        width: 30%;
        height: 40%;
      }

      .sponsor-bottom {
        width: 25%;
        height: 40%;
      }
    }

    @media(max-width:600px) {
      .sponsor-top {
        width: 35%;
        height: 45%;
      }

      .sponsor-top2 {
        width: 35%;
        height: 45%;
      }

      .sponsor-bottom {
        width: 35%;
        height: 50%;
      }

      .sponsor {
        max-width: 60% !important;
      }
    }

    @media(max-width:450px) {
      .sponsor-top {
        width: 35%;
        height: 45%;
      }

      .sponsor-top2 {
        width: 35%;
        height: 45%;
      }

      .sponsor-bottom {
        width: 35%;
        height: 50%;
      }

      .sponsor {
        max-width: 70% !important;
        margin-left: 60px !important;
      }
    }

    @media(max-width:1700px) {
      .medpar {
        margin-left: 600px !important;
      }

      .medpar-top {
        width: 20% !important;
        ;
      }
    }

    @media(max-width:1352px) {
      .medpar {
        margin-left: 450px !important;
      }

      .medpar-bottom2 {
        width: 10% !important;
        ;
      }

      .medparbg {
        margin-left: 300px !important;
        ;
      }
    }

    @media(max-width:1141px) {
      .medparbg {
        margin-left: 200px !important;
        ;
      }

      .medpar {
        margin-left: 350px !important;
      }

      .medpar-top {
        width: 18% !important;
        ;
      }

      .medpar-bottom {
        width: 15% !important;
        ;
      }
    }


    @media(max-width:965px) {
      .medpar {
        margin-left: 200px !important;
      }
    }

    @media(max-width:758px) {
      .medparbg {
        margin-left: 150px !important;
        ;
      }

      .edaran {
        margin-left: 20px !important;
      }

      .ultimagz {
        margin-left: 20px !important;
      }

      .medpar {
        margin-left: 100px !important;
      }

    }

    @media(max-width:570px) {
      .medparbg {
        margin-left: 120px !important;

      }

      .medpar {
        margin-left: 50px !important;
        font-size: 1.5rem !important;
      }

      .medpar-top {
        width: 22% !important;
        ;
      }

      .medpar-bottom {
        width: 20% !important;
        ;
      }

    }

    @media(max-width:450px) {
      .medparbg {
        margin-left: 60px !important;

      }


    }

    .carousel-inner {
      padding: 1em;
    }

    .card {
      margin: 0 .5em;
      box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
      border: none;
    }

    .carousel-control-prev,
    .carousel-control-next {
      background-color: #e1e1e1;
      width: 6vh;
      height: 6vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }

    .card .img-wrapper {
      max-width: 100%;
      height: 13em;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    img {
      max-height: 100%;
    }

    #more1 {
      display: none;
    }

    #more2 {
      display: none;
    }

    #more3 {
      display: none;
    }

    #more4 {
      display: none;
    }

    #more5 {
      display: none;
    }

    #more6 {
      display: none;
    }

    #more7 {
      display: none;
    }

    #more81 {
      display: none;
    }

    #more82 {
      display: none;
    }

    #more83 {
      display: none;
    }

    #more9 {
      display: none;
    }

    #more10 {
      display: none;
    }

    #more11 {
      display: none;
    }

    #more12 {
      display: none;
    }


    .font-bazinga {
      font-family: Bazinga;
    }

    .bg-red {
      background-color: #BB181B;
    }

    .bg-yellow {
      background-color: #fbd019;
    }

    .bg-blue {
      background-color: #3395A9;
    }

    .bg-purple {
      background-color: #38448F;
    }

    .bg-purple2 {
      background-color: #745AA1;
    }


    .mh-85vh {
      min-height: 85vh;
    }

    .mxh-100vh {
      max-height: 300vh;
    }

    .mw-100 {
      max-width: 100%;
    }

    .mw-100vw {
      min-width: 100vw;
    }

    .red-stripes {
      opacity: .4;
    }

    .ptop-5 {
      padding-top: 5rem;
    }

    .h-2 {
      height: 2rem;
    }

    .sponsor-top {
      height: 150px;
      margin-top: 1rem;
    }

    .sponsor-top2 {
      height: 120px;
      margin-top: 1rem;
    }

    .cover-artikel:hover {
      transform: scale(1.1);
    }

    .cover-artikel {
      transition: 0.2s;
    }

    .carousel-item2 {
      max-width: 26rem;
      max-height: 90vh;
    }

    .artikel-interaktif {
      min-height: 130vh;
    }

    .carousel-item3 {
      max-width: 26rem;
      max-height: 90vh;
      min-height: 60vh;
    }
  </style>
@endsection

@section('contents')
  <div>
    <div class="main-content mh-85vh mxh-100vh position-relative bg-red">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('images/workshop/registration/red-stripes-1.png') }}" alt="Red Stripes">
      <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
      <img class="position-absolute bottom-0 w-100 h-2" style="z-index:2;"src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            PAMERAN AUDIO DOKUMENTER
          </div>
        </section>

            {{-- Episodes --}}
            <div id="carouselExampleControls" class="carousel" >
                <div class="carousel-inner carousel-inner1 mb-5">
                    @foreach($audio_dokumenter as $audio)
                        <div class="carousel-item carousel-item1 active">
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="{{ $audio->image_path }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$audio->title}}</h5>
                                    <p class="card-text">{!! $audio->deskripsi !!}</p>
                                    <button onclick="myFunction1()" class="btn btn-link"id="myBtn1">Read more</button>
                                    <a href="{{$audio->link}}" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    
                    
                    
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #1 - Cerita Anak Kampung (Kota) Tangerang Raya</h5>
                  <p class="card-text">Tangerang Raya telah bertransformasi menjadi kawasan tinggal yang modern dan elit. Komplek perumahan menjamur, tetapi masih banyak juga kawasan kampung kota.<span id="dots1">...</span><span id="more1"> Sementara anak-anak komplek dapat menikmati fasilitas bermain seperti taman bermain dan kolam renang di dalam perumahan atau clubhouse, anak-anak yang tinggal di luar perumahan tidak bisa mengakses fasilitas yang sama secara leluasa. Di episode "Bahagianya Anak yang Tinggal di Kampung", kami ikut bermain bersama anak-anak yang tinggal di kampung kota. Yuk ikuti keseruan kami bermain dengan mereka!</span></p>
                  <button onclick="myFunction1()" class="btn btn-link"id="myBtn1">Read more</button>
                  <a href="https://open.spotify.com/episode/2uRkpGD23svgSZF0yt78GY?si=mgMgvOCSSxycEqSs_1gfPA" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>


            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #2 - Sepanjang Jalan Tangerang</h5>
                  <p class="card-text">Kawasan Tangerang Raya berkembang pesat sebagai kawasan penyangga Jakarta. Di banyak area tertentu, kita bisa menemukan banyak jalanan lebar yang dilengkapi trotoar. Kerapihan yang tak merata<span id="dots2">...</span><span id="more2"> ini cukup memberi kesan modern seperti kota-kota di negara maju. Sayangnya, perkembangan transportasi publik tidak sama pesatnya.
                      <br><br>
                      Di episode 'Sepanjang Jalan Tangerang' ini, kami mencari jawaban dari pertanyaan kenapa sih tidak semua kawasan di Tangerang Raya terhubung oleh angkutan umum? Kira-kira transportasi umum mana yang cenderung lebih nyaman, cepat, dan harganya yang ramah di kantong? Untuk mengetahui jawabannya, yuk ikuti perjalanan reporter kami berjalan-jalan dengan angkutan umum lalu membandingkannya dengan taksi daring.</span></p>
                  <button onclick="myFunction2()" class="btn btn-link"id="myBtn2">Read more</button>
                  <a href="https://open.spotify.com/episode/4idfSxBjkqH7EsxXkn0PFz?si=2ykiWQeCScqkVVlCH7Azvw" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #3 - SKKM: Sirkel dan Kasta Kehidupan Mahasiswa</h5>
                  <p class="card-text">Ada mahasiswa yang memiliki kehidupan mewah dan serba ada. Ada mahasiswa yang harus berhemat untuk memenuhi kebutuhan ngekos dan kuliah.<span id="dots3">...</span><span id="more3"> Kok bisa beda banget ya kehidupan mahasiswa dan mahasiswi ini? Nah, episode kali ini akan membahas mengenai gaya hidup mahasiswa dan mahasiswi di perguruan tinggi swasta daerah Tangerang Raya.
                      <br><br>
                      Apakah benar gaya hidup yang berbeda tersebut menciptakan strata pergaulan di antara mereka? Yuk, dengerin episode “SKKM: Sirkel dan Kasta Kehidupan Mahasiswa” untuk mencari tahu ceritanya!<span></p>
                  <button onclick="myFunction3()" class="btn btn-link"id="myBtn3">Read more</button>
                  <a href="https://open.spotify.com/episode/5UgJTFsTzdbTLWuV07M44Q?si=e98beef5ee5f44fb" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1 ">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #4 - Sebulan Hidup di Tangerang Raya, Berapa Sih Pengeluarannya?</h5>
                  <p class="card-text">Episode kali ini berbicara tentang seberapa besar perbedaan biaya hidup bulanan warga klaster dengan warga kampung, dan apa saja<span id="dots4">...</span><span id="more4"> yang mempengaruhinya. Kami mewawancarai berbagai narasumber untuk membandingkan berapa pengeluaran dan pemasukan mereka serta apakah sebanding dengan UMR wilayah Tangerang.</span></p>
                  <button onclick="myFunction4()" class="btn btn-link"id="myBtn4">Read more</button>
                  <a href="https://open.spotify.com/episode/2Eq4d9pfRDai4lMi5Xihkx?si=cc6z5PdhTQiHTIPS2THVrQ" targer="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #5 - Dompet Terkuras, Timbangkan Kualitas</h5>
                  <p class="card-text">Perguruan Tinggi Swasta atau PTS bergengsi yang ada di sekitaran Tangerang raya, dengan “harga” yang ditawarkan, apakah imbang dengan<span id="dots5">...</span><span id="more5"> “kualitas yang diberikan? Episode kali ini menghadirkan perspektif mahasiswa dari PTS yang bersangkutan dan juga Pengamat pendidikan untuk meninjau lebih lanjut.</span></p>
                  <button onclick="myFunction5()" class="btn btn-link"id="myBtn5">Read more</button>
                  <a href="https://open.spotify.com/episode/3XxftCjpZfySvOJvtHayIQ?si=40dfe31292c64010" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #6 - AADC: Ada Apa di Cluster?</h5>
                  <p class="card-text">Komplek perumahan identik dengan pemagaran dan akses yang terbatas. Kenyamanan dan keamanan yang ditawarkan komplek perumahan menarik minat warga dengan ekonomi<span id="dots6">...</span><span id="more6"> menengah atas untuk tinggal di sana.
                      <br><br>
                      Lalu, bagaimana perkembangan gated housing yang sangat pesat ini memengaruhi gaya hidup penduduk urban? Di episode “AADC: Ada Apa di Cluster?”, kami mengulas gaya hidup di gated housing yang semakin menjamur di Tangerang Raya. Apa sih yang membuat tinggal di komplek itu berbeda?</span></p>
                  <button onclick="myFunction6()" class="btn btn-link"id="myBtn6">Read more</button>
                  <a href="https://open.spotify.com/episode/7319ldH9aCHEANcMZ09NSV?si=KZJg28LyRoGq0CLv00qusg" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1 ">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #7 - Kita yang Tak Setara</h5>
                  <p class="card-text">Masih adakah di antara kita yang menganggap kalau kualitas sekolah dasar negeri ketinggalan dari sekolah dasar swasta? Di kawasan Tangerang Raya - yang mencakup Kota Tangerang Selatan<span id="dots7">...</span><span id="more7">, Kota Tangerang, Kabupaten Tangerang — pertumbuhan sekolah dasar swasta terlihat pesat. Gedungnya mentereng, reputasinya bagus, dan tentunya: mahal-mahal. Lalu, bagaimana nasib sekolah dasar negeri di kawasan ini? Temukan dan dengarkan, “Kita yang Tak Setara”, dokumenter audio tentang sekolah dasar negeri di Tangerang Raya.</span></p>
                  <button onclick="myFunction7()" class="btn btn-link"id="myBtn7">Read more</button>
                  <a href="https://open.spotify.com/episode/3OuJmJYG9sr1Qs6rrfVzwU?si=0611dd2195d54a92" target="_blank" class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 1): Semarak Hajatan</h5>
                  <p class="card-text">Mari sejenak kita melihat ke realita kehidupan yang berbeda dari biasanya. Dalam part pertama dari episode “Kehidupan Kampung-Kota Tangerang”,<span id="dots81">...</span><span id="more81"> kita akan mengenal budaya gotong royong dan keramahan dari masyarakat desa Curug Sangereng yang berada di jantung dari Gading Serpong lewat nikahan dari Teh Dewi. Seru? Pasti! Dramatis? Yuk, dengarkan sendiri rasanya mengikuti hajatan ini.</span></p>
                  <button onclick="myFunction81()" class="btn btn-link"id="myBtn81">Read more</button>
                  <a href="https://open.spotify.com/episode/6ugYdT6IWa1sBjlqiakpQu?si=cb2d9bcbb4e84c31" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 2): Tong Tong Tong</h5>
                  <p class="card-text">Pada part kedua dari episode “Kehidupan Kampung-Kota Tangerang”, kita akan melihat kehidupan masyarakat di Gading Serpong. Bukan, bukan kehidupan<span id="dots82">...</span><span id="more82"> yang terjadi di balik gerbang-gerbang cluster perumahan mewah. Ini cerita tentang mereka yang hidup dan mencari penghidupan di desa Curug Sangereng, di tengah gemerlapnya Gading Serpong yang tampak sangat modern.</span></p>
                  <button onclick="myFunction82()" class="btn btn-link"id="myBtn82">Read more</button>
                  <a href="https://open.spotify.com/episode/7LSXRwvx0Ry8V4C6gHnn9H?si=8bdda6f4d4c84e49" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1 ">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 3): Tanah Semen</h5>
                  <p class="card-text">Enak ya rasanya tinggal di BSD dan area dari Gading Serpong ini. Namun, hal berbeda terjadi dengan kampung-kampung<span id="dots83">...</span><span id="more83"> yang ada di sekelilingnya. Part ketiga dari episode Kehidupan Kampung Kota Tangerang kali ini akan mengulik terkait hal tersebut. Selengkapnya dapat teman-teman dengarkan dalam episode ini.</span></p>
                  <button onclick="myFunction83()" class="btn btn-link"id="myBtn83">Read more</button>
                  <a href="https://open.spotify.com/episode/5JHftxh1YnXFSMe7DJF46U?si=6074a59327b441dc" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #9 - The Astonishing Intermoda Terminal</h5>
                  <p class="card-text">Terminal termodern yang terintegrasi dengan berbagai transportasi umum ini bernama terminal Intermoda. Dalam episode ini, tim Jelajah<span id="dots9">...</span><span id="more9"> berhasil mengelilingi Stasiun Cisauk, Intermoda. Suasana stasiun masih terasa sepi karena mayoritas masyarakat di Tangerang Selatan memiliki kebiasaan car-oriented. Padahal, stasiun ini dinobatkan sebagai stasiun paling maju yang menyediakan berbagai fasilitas apik. Mengejutkannya, hanya di Cisauk, terminal bus dan stasiun KRL berada dalam lokasi yang sama. Namun, mengapa banyak orang lebih memilih menggunakan transportasi pribadi? Stasiun ini sebenarnya hadir untuk memudahkan masyarakat Gading Serpong dan BSD bepergian jarak jauh menggunakan transportasi umum dengan harga yang terjangkau.</span></p>
                  <button onclick="myFunction9()" class="btn btn-link"id="myBtn9">Read more</button>
                  <a href="https://open.spotify.com/episode/0FgKPzXRNvJAftysVqR5la?si=a8fd48ce857b4115" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #10 - The Truth Behind: Property Invesment Owner</h5>
                  <p class="card-text">Ingin terjun ke investasi properti tapi belum tahu caranya gimana? Udah lama mau main investasi properti tapi gatau peluang kedepannya seperti apa? Bisa jadi<span id="dots10">...</span><span id="more10"> sekarang adalah waktunya mimpi kamu terwujud nih, karena investasi properti sekarang lagi naik daun dan banyak yang menekuni bidang tersebut!
                      <br><br>
                      Audio Dokumenter "The Truth Behind: Property Investment Owner" akan menjawab semua pertanyaan kalian. Kali ini Jovita, ditemani dengan dua pakar properti yaitu Virlando dan Dion selaku pemilik properti awam akan membahas tentang investasi properti yang cocok untuk pemula, khususnya properti di bidang kos-kosan dan apartemen di daerah Jakarta dan Tangerang, serta tips-tips menarik untuk pemula, lengkap dengan risikonya. Mau tau lebih lanjut? Langsung dengerin aja The Truth Behind episode spesial ini.</span></p>
                  <button onclick="myFunction10()" class="btn btn-link"id="myBtn10">Read more</button>
                  <a href="https://open.spotify.com/episode/6cYDazJEHSwpJE8W0oambP?si=f0a4c5633ba2454f" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #11 - Sengitnya Memiliki Rumah di Atas Sempitnya Tanah</h5>
                  <p class="card-text">Pada 2014 Menteri Perumahan Rakyat, Djan Faridz, melaporkan 60 perusahaan pengembang properti besar, seperti Grup Ciputra, Alam Sutera, dan Sinarmas<span id="dots11">...</span><span id="more11"> Land yang melanggar pasal-pasal dalam Undang-Undang Nomor 1 Tahun 2011 tentang Pembangunan Hunian Berimbang bagi Masyarakat Berpenghasilan Rendah. Namun, sampai 2022 ini perusahaan-perusahaan tersebut tetap membangun properti mahal sehingga terkesan tidak mematuhi undang-undang. Akibatnya, semakin banyak masyarakat, khususnya kaum milenial, yang kesulitan mencari rumah terjangkau dan layak huni sehingga dikhawatirkan pada masa depan, akan tumbuh banyak kawasan kumuh.
                      <br><br>
                      "Mereka berumah tangga, mereka can not afford untuk mendapatkan rumah karena mereka butuh, tapi can not afford purchasing power mereka dibandingkan harga rumahnya lebih tinggi sehingga mereka end up either tinggal di rumah mertua atau dia nyewa,” pernyataan Sri Mulyani pada pertemuan G20 ini mendukung kekhawatiran generasi milenial akan melambungnya harga rumah yang naik setiap tahun. Episode perdana ini diharapkan menjadi cahaya yang dapat menjawab keresahan masyarakat, meredakan asumsi, memotivasi tiap insan, dan berdampak baik bagi khalayak ramai.</span></p>
                  <button onclick="myFunction11()" class="btn btn-link"id="myBtn11">Read more</button>
                  <a href="https://open.spotify.com/episode/3vCXl94uqZx1SNGCKoUKfv?si=sLtLh_iqRluRmagJ0WaULg" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
            <div class="carousel-item carousel-item1">
              <div class="card">
                <div class="img-wrapper">
                  <img src="{{ asset('/images/ruangIndependen/pameran/coveraudio.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">CETAR #12 - Aksi Kucing-kucingan PKL dan Satpol PP</h5>
                  <p class="card-text">
                    Sesuai dengan undang undang Lalu Lintas dan Angkutan Jalan UU LAJ : Pasal 28 ayat (2) jo. Pasal 25 ayat (1), ”Setiap orang dilarang melakukan perbuatan<span id="dots12">...</span><span id="more12"> yang mengakibatkan gangguan pada fungsi perlengkapan Jalan. Dalam konteks ini yang dimaksud adalah trotoar sebagai fasilitas untuk pejalan kaki yang terganggu fungsinya menjadi tempat berdagang,” bunyinya. Undang-undang tentang lalu lintas dan angkutan jalan ini menjelaskan tentang trotoar sebagai fasilitas pejalan kaki terganggu fungsinya, maka sesuai tugasnya satpol pp melakukan aksinya. Namun, kenyataan dari aksi kejar - kejaran ini tak sekejam seperti yang diceritakan televisi.Adanya perjanjian kedua belah pihak ikut menjadi sumber utama kejar - kejaran ini sudah tak terlihat.
                      <br><br>
                      Seperti yang terjadi di Tangerang yang melibatkan aparat keamanan Gading Serpong dan PKL. undang-undang mengenai lalu lintas dan angkutan jalan ini tidak diikuti oleh kedua belah pihak, baik aparat keamanan Gading Serpong maupun pedagang kaki lima (PKL). Penertiban PKL sampai saat ini masih terjadi. Perbedaannya ialah seperti yang kita tahu, dahulu kejar-kejaran tersebut tidak dapat dihindari dikarenakan PKL yang takut dagangan yang ia jual di ambil oleh pihak yang melakukan penertiban dan tidak jarang juga kejadian pemaksaan dalam melakukan penertiban. Akan tetapi, situasi saat ini berbeda. Kedua pihak tersebut tidak lagi melakukan aksi kejar-kejaran karena saat ini mereka saling membantu satu sama lain dengan membayar iuran. Para pedagang mengatakan bahwa aparat keamanan hanya mengikuti apa kata atasannya.
                    </span></p>
                  <button onclick="myFunction12()" class="btn btn-link"id="myBtn12">Read more</button>
                  <a href="https://open.spotify.com/episode/4YIK97wdoxDOuD4QojRyen?si=95127591290242e4" target="_blank"class="btn btn-success">Dengar di Spotify</a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev carousel-control-prev1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!--AUDIO DOKUMENTER -->
      </div>
    </div>
    <div class="main-content mh-85vh position-relative bg-yellow">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('/images/ruangIndependen/background/bar-middle-transparant.svg') }}" alt="background motive">

      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            PAMERAN E-MAGAZINE
          </div>
        </section>

        {{-- Episodes --}}
        <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4">
          <div class="flex-item position-relative" style="max-width: 70%">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container-2.png') }}" alt="Button Container">
          </div>

        </section>
      </div>

    </div>

    <div class="main-content mh-85vh position-relative bg-blue">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('/images/home/bg/Frame.png') }}">

      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            INDEPTH ARTIKEL
          </div>
        </section>

        {{-- Episodes --}}
        <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4">
          <div class="flex-item position-relative" style="max-width: 70%">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container-2.png') }}" alt="Button Container">
          </div>

        </section>
      </div>

    </div>

    <div class="main-content position-relative bg-purple" style="min-height:115vh;">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('/images/yja/background/flakes.png') }}" alt="Flakes">

      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            PAMERAN VIDEO DOKUMENTER
          </div>
        </section>

        {{-- Episodes --}}
        <div id="carouselExample2" class="carousel">
          <div class="carousel-inner carousel-inner3 gap-5">
            @foreach ($video_dokumenter as $video)
              <form action="{{ route('karya.like') }}?id={{ $video->id }}" method="post">
                @csrf
                <div class="carousel-item carousel-item3 active">
                  <h2 class="font-bazinga text-white fs-2 text-center mb-5 pembuat-artikel">{{ $video->nama_pembuat }}</h2>
                  <a href="{{ $video->link }}" target="_blank"><img src="{{ $video->image_path }}" class="d-block w-100 cover-artikel rounded" style="height:60%;" alt="..."></a>
                  <div class="d-flex justify-content-between align-items-center px-2 py-1 bg-light rounded-bottom">
                    <button class="btn">Like</button>
                    <div>Total Likes: 4000</div>
                  </div>
                  <h3 class="font-bazinga text-white fs-2 text-center mt-5 judul-artikel">"{{ $video->title }}"</h3>

                </div>
              </form>
            @endforeach


          </div>
          <button class="carousel-control-prev carousel-control-prev3" style="top:40%!important;" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next3" style="top:40%!important;" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="fs-2 text-center font-bazinga text-white">Tekan Poster Untuk Melihat Video</div>
      </div>
    </div>

    <div class="main-content position-relative bg-red artikel-interaktif">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('/images/ruangIndependen/background/flakes.png') }}" alt="Flakes">

      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            ARTIKEL INTERAKTIF
          </div>
        </section>

        {{-- Episodes --}}
        <div id="carouselExample" class="carousel">
          <div class="carousel-inner carousel-inner2 gap-5">
            @foreach ($artikel_interaktif as $karya)
              <div class="carousel-item carousel-item2 active">
                <h2 class="font-bazinga text-white fs-2 text-center mb-5 pembuat-artikel">{{ $karya->nama_pembuat }}</h2>
                <a href="{{ $karya->link }}" target="_blank"><img src="{{ $karya->image_path }}" class="d-block w-100 cover-artikel" style="height:60%;" alt="..."></a>
                <h3 class="font-bazinga text-white fs-2 text-center mt-5 judul-artikel">"{{ $karya->title }}"</h3>
              </div>
            @endforeach


          </div>
          <button class="carousel-control-prev carousel-control-prev2" style="top:40%!important;" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next2" style="top:40%!important;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="fs-2 text-center font-bazinga text-black">Tekan HP untuk melihat artikel</div>
      </div>
    </div>
    <div class="main-content mh-85vh position-relative bg-yellow">
      <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('/images/ruangIndependen/pameran/yellow-stripes.png') }}" alt="Flakes">

      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="text-center ptop-5">
          <div class="hero-title px-5 mb-5 font-bazinga text-white" style="font-size:4rem;">
            PAMERAN PHOTOSTORY
          </div>
        </section>

        {{-- Episodes --}}
        <section class="d-flex justify-content-evenly align-items-center flex-column flex-lg-row gap-4">
          <div class="flex-item position-relative" style="max-width: 70%">
            <img class="mw-100" src="{{ asset('/images/components/buttons/button-container-2.png') }}" alt="Button Container">
          </div>
        </section>
      </div>
    </div>
    <div class="main-content position-relative bg-purple2" style="min-height:110vh;">
      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="ptop-5">
          <div class="px-5 mb-5 img-thumbnail sponsor" style="border: 4px solid black; max-width:50%; margin-left:100px;">
            <h1 class="font-bazinga text-black fw-bold mt-3">Sponsor</h1>
            <div class=" position-relative gap-4 d-flex justify-content-center align-items-center">
              <img class="sponsor-top"src="{{ asset('/images/ruangIndependen/pameran/Susu Tango Uk 1.png') }}"></img>
              <img class="sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Teh Gelas Uk 1.png') }}"></img>
              <img class="sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Crystalin Uk 1.png') }}"></img>
            </div>
            <div class=" position-relative gap-5 d-flex justify-content-center align-items-center mt-5">
              <img class="sponsor-bottom mb-3"src="{{ asset('/images/ruangIndependen/pameran/Hop Hop Uk 1.png') }}"></img>
              <img class="sponsor-bottom mb-3"src="{{ asset('/images/ruangIndependen/pameran/Pandaboo Uk 1.png') }}"></img>
            </div>
          </div>

          <section class="ptop-5">
            <div class="px-5  img-thumbnail medparbg" style="border: 4px solid black; max-width:70%; margin-left:400px;">
              <h1 class="font-bazinga text-black fw-bold mt-3 medpar"style="margin-left:800px;">Media Partner</h1>
              <div class=" position-relative d-flex justify-content-center align-items-center mt-3">
                <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Mading Event 1.png') }}"></img>
                <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Medio By KG Media [horizontal]-black copy 1.png') }}"></img>
                <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Logo radio untar 2.png') }}"></img>
                <img class="medpar-top ms-5 edaran"src="{{ asset('/images/ruangIndependen/pameran/Edaran event 1.png') }}"></img>
                <img class="medpar-top ms-5 ultimagz"src="{{ asset('/images/ruangIndependen/pameran/ULTIMAGZ copy 1.png') }}"></img>
              </div>
              <div class=" position-relative gap-3 d-flex justify-content-center align-items-center mt-5">
                <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/Sigma TV 2.png') }}"></img>
                <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/BFAST MEDIA 1.png') }}"></img>
                <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/ALIVE 1.png') }}"></img>
                <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/Logo_1-100-removebg-preview 1.png') }}"></img>
                <img class="medpar-bottom2"src="{{ asset('/images/ruangIndependen/pameran/Radio Mercu Buana_ 2.png') }}"></img>
              </div>
            </div>
          </section>
          <!--<img class="position-absolute"style="width:60%;height:700px;z-index:1;"src="{{ asset('/images/ruangIndependen/pameran/Group 66.png') }}"></img>
                      <img class="position-relative"style="margin-top:60px;margin-left:130px;width:15%; height:30%; z-index:2;"src="{{ asset('/images/ruangIndependen/pameran/Susu Tango Uk 1.png') }}"></img>
                      <img class=" position-relative"style="margin-top:60px;margin-left:30px;z-index:2;width:7%; height:20%;"src="{{ asset('/images/ruangIndependen/pameran/Teh Gelas Uk 1.png') }}"></img>
                      <img class=" position-relative"style="margin-top:60px;margin-left:30px;width:15%; height:30%;z-index:2;"src="{{ asset('/images/ruangIndependen/pameran/Crystalin Uk 1.png') }}"></img>-->


          <!--<h1 class="text-center">SPONSOR</h1>
                  <div class="px-5 mb-5 position-absolute" style="left:20%; margin-left:-25px">
                      <img class="w-100"src="{{ asset('/images/ruangIndependen/pameran/Group 66.png') }}"></img>
                  </div>
                  <div class=" position-relative gap-5 d-flex justify-content-center align-items-center">
                      <img class=" sponsor-top"src="{{ asset('/images/ruangIndependen/pameran/Susu Tango Uk 1.png') }}"></img>
                      <img class=" sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Teh Gelas Uk 1.png') }}"></img>
                      <img class=" sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Crystalin Uk 1.png') }}"></img>
                  </div>
                  <div class=" position-relative gap-5 d-flex justify-content-center align-items-center mt-5">
                      <img class=""src="{{ asset('/images/ruangIndependen/pameran/Hop Hop Uk 1.png') }}"></img>
                      <img class=""src="{{ asset('/images/ruangIndependen/pameran/Pandaboo Uk 1.png') }}"></img>
                  </div> -->




      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    //CAROUSEL AUDIO
    var carouselWidth = $(".carousel-inner1")[0].scrollWidth;
    var cardWidth = $(".carousel-item1").width();
    var scrollPosition = 0;
    $(".carousel-control-next1").on("click", function() {
      if (scrollPosition < (carouselWidth - cardWidth * 4)) { //check if you can go any further
        scrollPosition += cardWidth * 3; //update scroll position
        $(".carousel-inner1").animate({
          scrollLeft: scrollPosition
        }, 400); //scroll left
      }
    });
    $(".carousel-control-prev1").on("click", function() {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth * 3;
        $(".carousel-inner1").animate({
            scrollLeft: scrollPosition
          },
          400
        );
      }
    });
    var multipleCardCarousel = document.querySelector(
      "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      //rest of the code
      var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false
      });
    } else {
      $(multipleCardCarousel).addClass("slide");
    }
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false,
      wrap: false,
    });

    //CAROUSEL Artikel
    var carouselWidth2 = $(".carousel-inner2")[0].scrollWidth;
    var cardWidth2 = $(".carousel-item2").width();
    var scrollPosition2 = 0;
    $(".carousel-control-next2").on("click", function() {
      if (scrollPosition2 < (carouselWidth2 - cardWidth2 * 4)) { //check if you can go any further
        scrollPosition2 += cardWidth2; //update scroll position
        $(".carousel-inner2").animate({
          scrollLeft: scrollPosition2
        }, 400); //scroll left
      }
    });
    $(".carousel-control-prev2").on("click", function() {
      if (scrollPosition2 > 0) {
        scrollPosition2 -= cardWidth2;
        $(".carousel-inner2").animate({
            scrollLeft: scrollPosition2
          },
          400
        );
      }
    });
    var multipleCardCarousel2 = document.querySelector(
      "#carouselExample"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      //rest of the code
      var carousel2 = new bootstrap.Carousel(multipleCardCarousel2, {
        interval2: false
      });
    } else {
      $(multipleCardCarousel2).addClass("slide");
    }
    var carousel2 = new bootstrap.Carousel(multipleCardCarousel2, {
      interval2: false,
      wrap2: false,
    });


    //CAROUSEL VIDEO
    var carouselWidth3 = $(".carousel-inner3")[0].scrollWidth;
    var cardWidth3 = $(".carousel-item3").width();
    var scrollPosition3 = 0;
    $(".carousel-control-next3").on("click", function() {
      if (scrollPosition3 < (carouselWidth3 - cardWidth3 * 4)) { //check if you can go any further
        scrollPosition3 += cardWidth3; //update scroll position
        $(".carousel-inner3").animate({
          scrollLeft: scrollPosition3
        }, 400); //scroll left
      }
    });
    $(".carousel-control-prev3").on("click", function() {
      if (scrollPosition3 > 0) {
        scrollPosition3 -= cardWidth3;
        $(".carousel-inner3").animate({
            scrollLeft: scrollPosition3
          },
          400
        );
      }
    });
    var multipleCardCarousel3 = document.querySelector(
      "#carouselExample"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      //rest of the code
      var carousel3 = new bootstrap.Carousel(multipleCardCarousel3, {
        interval3: false
      });
    } else {
      $(multipleCardCarousel3).addClass("slide");
    }
    var carousel3 = new bootstrap.Carousel(multipleCardCarousel3, {
      interval3: false,
      wrap3: false,
    });

    function myFunction1() {
      var dots = document.getElementById("dots1");
      var moreText = document.getElementById("more1");
      var btnText = document.getElementById("myBtn1");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction2() {
      var dots = document.getElementById("dots2");
      var moreText = document.getElementById("more2");
      var btnText = document.getElementById("myBtn2");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction3() {
      var dots = document.getElementById("dots3");
      var moreText = document.getElementById("more3");
      var btnText = document.getElementById("myBtn3");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction4() {
      var dots = document.getElementById("dots4");
      var moreText = document.getElementById("more4");
      var btnText = document.getElementById("myBtn4");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction5() {
      var dots = document.getElementById("dots5");
      var moreText = document.getElementById("more5");
      var btnText = document.getElementById("myBtn5");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction6() {
      var dots = document.getElementById("dots6");
      var moreText = document.getElementById("more6");
      var btnText = document.getElementById("myBtn6");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction7() {
      var dots = document.getElementById("dots7");
      var moreText = document.getElementById("more7");
      var btnText = document.getElementById("myBtn7");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction81() {
      var dots = document.getElementById("dots81");
      var moreText = document.getElementById("more81");
      var btnText = document.getElementById("myBtn81");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction82() {
      var dots = document.getElementById("dots82");
      var moreText = document.getElementById("more82");
      var btnText = document.getElementById("myBtn82");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction83() {
      var dots = document.getElementById("dots83");
      var moreText = document.getElementById("more83");
      var btnText = document.getElementById("myBtn83");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction9() {
      var dots = document.getElementById("dots9");
      var moreText = document.getElementById("more9");
      var btnText = document.getElementById("myBtn9");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction10() {
      var dots = document.getElementById("dots10");
      var moreText = document.getElementById("more10");
      var btnText = document.getElementById("myBtn10");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction11() {
      var dots = document.getElementById("dots11");
      var moreText = document.getElementById("more11");
      var btnText = document.getElementById("myBtn11");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }

    function myFunction12() {
      var dots = document.getElementById("dots12");
      var moreText = document.getElementById("more12");
      var btnText = document.getElementById("myBtn12");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
    //{{ route('daftarTalkshow') }}
  </script>
@endsection
