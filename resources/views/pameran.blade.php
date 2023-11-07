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
      .carousel-inner-audio {
        display: flex;
      }

      .carousel-item-audio {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

      .carousel-inner-magazine {
        display: flex;
      }

      .carousel-item-magazine {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

      .carousel-inner-indepth {
        display: flex;
      }

      .carousel-item-indepth {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

      .carousel-inner-video {
        display: flex;
      }

      .carousel-item-video {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

      .carousel-inner-artikel {
        display: flex;
      }

      .carousel-item-artikel {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

    }

    .photo-hero img{
        width: 50%;
    }

    @media(max-width:1000px) {
      .pembuat-artikel {
        font-size: 1.5rem !important;
      }

      .judul-artikel {
        font-size: 1.5rem !important;
      }
      
      .photo-hero img{
        width: 50%;
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

      .photo-hero img{
        width: 80%;
      }
    }

    @media(max-width:450px) {
      .judul-artikel {
        font-size: 1.3rem !important;
      }
      .artikel-interaktif {
        min-height: 10vh;
        "

      }

      .cover-artikel {
        max-height: 28rem !important;
        width: 80% !important;
        margin: auto;
      }

      .like-artikel{
        width: 80% !important;
        margin: auto;
        font-size: 0.8rem !important;
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

      .photo-hero img{
        width: 90%;
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
        width: 25%;
      }

      .sponsor {
        max-width: 70% !important;
        margin-left: 60px !important;
      }

      .feed{
        width:200px;
        height:200px;
      }
      .deskripsi-feed{
        font-size:1rem;
      }
      .deskripsi-foto{
        font-size: 1rem !important;
        max-width: 80%!important;
      }
    }

    @media(max-width:2000px) {
      .medpar {
        margin-left: 600px !important;
      }

      .medpar-top {
        width: 20% !important;
        ;
      }

      .item{
        width: 450px !important; 
        height: 450px !important; 
        overflow: hidden;
      }

      .item h4{
        width: 350px;
        font-size: 1rem !important;
      }

      .item img{
        width: 350px !important;
        height: 350px !important;
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

      .item{
        width: 450px !important; 
        height: 450px !important; 
        overflow: hidden;
      }

      .item h4{
        width: 250px;
        font-size: 1rem !important;
      }

      .item img{
        width: 250px !important;
        height: 250px !important;
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

      .item{
        width: 250px !important; 
        height: 350px !important; 
        overflow: hidden;
        margin: auto;
      }

      .item h4{
        width: 180px;
        font-size: 1rem !important;
      }

      .item img{
        width: 180px !important;
        height: 180px !important;
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
      }

      .medpar-bottom {
        width: 20% !important;
      }
    }

    @media(max-width:450px) {
      .medparbg {
        margin-left: 60px !important;

      }

      .medpar-top {
        width: 30% !important;
      }

      .medpar-bottom {
        width: 30% !important;
      }

      .item{
        width: 250px !important; 
        height: 350px !important; 
        overflow: hidden;
        margin: auto;
      }

      .item h4{
        width: 250px;
        font-size: 1rem !important;
      }

      .item img{
        width: 250px !important;
        height: 250px !important;
      }
    }

    .carousel-inner-audio {
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

    .card-title {
        display:flex;
        justify-items: center;
        justify-content: center;
        justify-self: center;
        flex-direction: column;
        font-size: 1.5vw !important;
        font-weight: bold;
        height: 8vh !important;
      }

      .card-text {
        font-size: 1rem !important;
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
      width: 30%;
      margin-top: 1rem;
    }

    .sponsor-top2 {
      width: 30%;
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

    .carousel-item4 {
      max-width: 26rem;
      max-height: 90vh;
      min-height: 60vh;
    }

    .carousel-item5 {
      max-width: 26rem;
      max-height: 90vh;
      min-height: 60vh;
    }

    .margin-mp {
      margin-left: 800px;
    }

    .text-sponsor {
      text-align: left;
    }

    .text-truncate-container p {
      -webkit-line-clamp: 3;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    @media(max-width:450px) {
      .text-sponsor {
        text-align: center;
      }

      .margin-mp {
        margin-left: 0px !important;
      }
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
        <div id="carouselExampleControls" class="carousel">
          <div class="carousel-inner carousel-inner1 carousel-inner-audio">
            @foreach ($audio_dokumenter as $audio)
              <div class="carousel-item carousel-item1 carousel-item-audio @if($loop->first) active @endif mb-5 p-3">
                <div class="card">
                  <div class="img-wrapper">
                    <img src="{{ $audio->image_path }}" class="d-block w-100 h-full" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $audio->title }}</h5>
                    <div class="text-truncate-container mb-4">
                      <p class="card-text" style="text-align: justify;">{{ $audio->deskripsi }}</p>
                    </div>
                    <button onclick="showFullDescription(this)" class="btn btn-link"id="myBtn1">Read more</button>
                    <a href="{{ $audio->link }}" target="_blank" class="btn btn-success">
                      <i class="fab fa-spotify mr-2"></i>
                       Dengar di Spotify
                    </a>
                    <div class="d-flex justify-content-between align-items-center px-2 py-1 bg-light rounded-bottom">
                      <button onclick="likePost('{{ $audio->id }}')" class="btn audio-like-button" data-likes="{!! str_replace('"', '\'', $audio->likes()->pluck('ip')) !!}">
                        <i class="bi bi-heart"></i>
                        Like
                      </button>
                      <div id="audio_dokumenter_{{ $audio->id }}">Total Likes: {{ $audio->likes_count }}</div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
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
      </div>
    </div>

    <div class="main-content mh-85vh position-relative bg-yellow" style="min-height:115vh;">
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
        <div id="carouselExample3" class="carousel">
          <div class="carousel-inner carousel-inner4 carousel-inner-magazine gap-5">
            @foreach ($e_magazine as $magazine)
              <div class="carousel-item carousel-item4 carousel-item-magazine @if($loop->first) active @endif ps-4">
              <h2 class="font-bazinga text-black fs-2 text-center mb-5 pembuat-artikel">{{ $magazine->title }}</h2>
                <a href="{{ $magazine->link }}" target="_blank"><img src="{{ $magazine->image_path }}" class="d-block w-100 cover-artikel rounded-top" style="height:60%;" alt="..."></a>
                <div class="d-flex like-artikel justify-content-between align-items-center px-2 py-1 bg-light rounded-bottom">
                  <button onclick="likePost('{{ $magazine->id }}')" class="btn magazine-like-button" data-likes="{!! str_replace('"', '\'', $magazine->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div id="magazine_dokumenter_{{ $magazine->id }}">Total Likes: {{ $magazine->likes_count }}</div>
                </div>
                <h3 class="font-bazinga text-black fs-2 text-center mt-5 judul-artikel">"{{ $magazine->deskripsi }}"</h3>
              </div>
            @endforeach
          </div>
          <button class="carousel-control-prev carousel-control-prev4" style="top:40%!important;" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next4" style="top:40%!important;" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="fs-2 text-center font-bazinga text-black p-5">Tekan Poster untuk Melihat Majalah</div>
        </div>
      </div>
    </div>

    <div class="main-content position-relative bg-blue" style="min-height:105vh;">
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
        <div id="carouselExample4" class="carousel">
          <div class="carousel-inner carousel-inner5 carousel-inner-indepth gap-5">
            @foreach ($indepth_artikel as $indepth)
              <div class="carousel-item carousel-item5 carousel-item-indepth @if($loop->first) active @endif ps-4">
                  <a href="{{ $indepth->link }}" target="_blank"><img src="{{ $indepth->image_path }}" class="d-block w-100 cover-artikel rounded-top" style="height:60%;" alt="..."></a>
                  <div class="d-flex like-artikel justify-content-between align-items-center px-2 py-1 bg-light rounded-bottom">
                    <button onclick="likePost('{{ $indepth->id }}')" class="btn indepth-like-button" data-likes="{!! str_replace('"', '\'', $indepth->likes()->pluck('ip')) !!}">
                      <i class="bi bi-heart"></i>
                      Like
                    </button>
                  <div id="indepth_dokumenter_{{ $indepth->id }}">Total Likes: {{ $indepth->likes_count }}</div>
                </div>
                <h2 class="font-bazinga text-white fs-3 text-center mt-5 pembuat-artikel">{{ $indepth->title }}</h2>
              </div>
            @endforeach
          </div>
          <button class="carousel-control-prev carousel-control-prev5" style="top:40%!important;" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next5" style="top:40%!important;" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="fs-2 text-center font-bazinga text-white p-5 mt-5">Tekan Poster Untuk Melihat Video</div>
        </div>
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
          <div class="carousel-inner carousel-inner3 carousel-inner-video gap-5">
            @foreach ($video_dokumenter as $video)
              <div class="carousel-item carousel-item3 carousel-item-video @if($loop->first) active ps-4 @endif">
                <h2 class="font-bazinga text-white fs-2 text-center mb-5 pembuat-artikel">{{ $video->nama_pembuat }}</h2>
                <a href="{{ $video->link }}" target="_blank"><img src="{{ $video->image_path }}" class="d-block w-100 cover-artikel rounded-top" style="height:60%;" alt="..."></a>
                <div class="d-flex like-artikel justify-content-between align-items-center px-2 py-1 bg-light rounded-bottom">
                  <button onclick="likePost('{{ $video->id }}')" class="btn video-like-button" data-likes="{!! str_replace('"', '\'', $video->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div id="video_dokumenter_{{ $video->id }}">Total Likes: {{ $video->likes_count }}</div>
                </div>
                <h3 class="font-bazinga text-white fs-2 text-center mt-5 judul-artikel pb-2">"{{ $video->title }}"</h3>
              </div>
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
        <div class="fs-2 text-center font-bazinga text-white p-5 mt-5">Tekan Poster Untuk Melihat Video</div>
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
          <div class="carousel-inner carousel-inner2 carousel-inner-artikel gap-5">
            @foreach ($artikel_interaktif as $karya)
              <div class="carousel-item carousel-item2 carousel-item-artikel @if($loop->first) active @endif">
                <h2 class="font-bazinga text-white fs-2 text-center mb-5 pembuat-artikel">{{ $karya->nama_pembuat }}</h2>
                <a href="{{ $karya->link }}" target="_blank"><img src="{{ $karya->image_path }}" class="d-block w-100 cover-artikel" style="height:60%;" alt="..."></a>
                <div class="d-flex mt-2 like-artikel justify-content-center align-items-center">
                  <div class="d-flex justify-content-center align-items-center px-3 py-1 rounded bg-light">
                    <button onclick="likePost('{{ $karya->id }}')" class="btn px-2 artikelinteraktif-like-button" data-likes="{!! str_replace('"', '\'', $karya->likes()->pluck('ip')) !!}">
                      <i class="bi bi-heart"></i>
                      Like
                    </button>
                    <div class="px-2" id="artikelinteraktif_dokumenter_{{ $karya->id }}">Total Likes: {{ $karya->likes_count }}</div>
                  </div>
                </div>
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
        <div class="fs-2 text-center font-bazinga text-white mt-5 p-5">Tekan HP untuk melihat artikel</div>
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
        <div id="carouselExample5" class="carousel slide">
          <div class="carousel-inner">
          @foreach ($photostory as $photo)
            <div class="carousel-item @if($loop->first) active @endif pb-5">
              <h2 class="font-bazinga text-black fs-2 text-center mx-5 mb-5">{{ $photo->title }}</h2>
            @if($photo->title == "Hidup Membiara Bukanlah Hal yang Mudah")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
              @foreach($photostory_feed_biara as $biara)
                <div class="item">
                    <img class="feed" src="{{ $biara->image_path }}">
                    <h4 class="font-bazinga text-center text-black deskripsi-feed fs-5">{{$biara->deskripsi}}<h4>
                </div>
              @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
                </div>
            </div>
            @elseif($photo->title == "BARTENDER ALSO AN ARTIST")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_bartender as $bartender)
                  <div class="item">
                    <img class="feed"src="{{ $bartender->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$bartender->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style=" margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>
            @elseif($photo->title == "BURUH DIFABEL: DIBAYAR MURAH, SAYA TAK MASALAH")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_difabel as $difabel)
                  <div class="item">
                    <img class="feed"src="{{ $difabel->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$difabel->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>
            @elseif($photo->title == "UNTAIAN KARSA DI UJUNG JEMARI")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_yayasan as $yayasan)
                  <div class="item">
                    <img class="feed"src="{{ $yayasan->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$yayasan->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>
            
            @elseif($photo->title == "WAYANG GOLEK PENOPANG HIDUP")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_wayanggolek as $wayanggolek)
                  <div class="item">
                    <img class="feed"src="{{ $wayanggolek->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$wayanggolek->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>

            @elseif($photo->title == "BELAJAR JADI JURNALIS DARI CILIK")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_cilik as $cilik)
                  <div class="item">
                    <img class="feed"src="{{ $cilik->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$cilik->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>

            @elseif($photo->title == "THE CAT CABIN: FOOD KULINER")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_catcafe as $catcafe)
                  <div class="item">
                    <img class="feed rounded"src="{{ $catcafe->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$catcafe->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>

            @elseif($photo->title == "PRODUKSI PVC COMPOUND: BAHAN DASAR KABEL")
              <div class="owl-carousel owl-theme mb-5" style="max-width:70%; margin: 0 auto;">
                @foreach($photostory_feed_pvc as $pvc)
                  <div class="item">
                    <img class="feed rounded"src="{{ $pvc->image_path }}" style="width:350px; height:350px;">
                    <h4 class="font-bazinga text-black text-center deskripsi-feed fs-5" style="max-width:20rem;">{{$pvc->deskripsi}}<h4>
                  </div>
                @endforeach
              </div>
              <div class="photo-hero">
                <img src="{{ $photo->image_path }}" class="d-block" style="margin:0 auto;" alt="...">
              </div>
              <h2 class="font-bazinga text-black fs-4 text-center mb-5 mt-5 deskripsi-foto" style="max-width:70%;margin:0 auto;">{!! $photo->deskripsi !!}</h2>
              <div class="d-flex text-center like-artikel justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center px-3 py-1" style="border-radius: 12px; background-color: rgba(255, 255, 255, 0.75);">
                  <button onclick="likePost('{{ $photo->id }}')" class="btn photostory-like-button px-2" data-likes="{!! str_replace('"', '\'', $photo->likes()->pluck('ip')) !!}">
                    <i class="bi bi-heart"></i>
                    Like
                  </button>
                  <div class="px-2" id="photostory_dokumenter_{{ $photo->id }}">Total Likes: {{ $photo->likes_count }}</div>
                </div>
              </div>
            </div>
            @endif
            
          @endforeach
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
    </div>

    <div class="main-content position-relative bg-purple2" style="min-height:110vh;">
      <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">

      <div class="position-relative">
        {{-- Title --}}
        <section class="ptop-5">
          <div class="px-5 mb-5 img-thumbnail sponsor" style="border: 4px solid black; max-width:50%; margin-left:100px;">
            <h1 class="font-bazinga text-black fw-bold mt-3 text-sponsor">Sponsor</h1>
            <div class=" position-relative gap-4 d-flex justify-content-center align-items-center">
              <img class="sponsor-top"src="{{ asset('/images/ruangIndependen/pameran/Susu Tango Uk 1.png') }}"/>
              <img class="sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Teh Gelas Uk 1.png') }}"/>
              <img class="sponsor-top2"src="{{ asset('/images/ruangIndependen/pameran/Crystalin Uk 1.png') }}"/>
            </div>
            <div class=" position-relative gap-5 d-flex justify-content-center align-items-center mt-5">
              <img class="sponsor-bottom mb-3"src="{{ asset('/images/ruangIndependen/pameran/Hop Hop Uk 1.png') }}"/>
              <img class="sponsor-bottom mb-3"src="{{ asset('/images/ruangIndependen/pameran/Pandaboo Uk 1.png') }}"/>
            </div>
          </div>
        </section>

        <section class="pb-5">
          <div class="px-5  img-thumbnail medparbg" style="border: 4px solid black; max-width:70%; margin-left:400px;">
            <h1 class="font-bazinga text-black fw-bold mt-3 medpar text-center margin-mp">Media Partner</h1>
            <div class=" position-relative d-flex justify-content-center align-items-center mt-3">
              <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Mading Event 1.png') }}"/>
              <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Medio By KG Media [horizontal]-black copy 1.png') }}"/>
              <img class="medpar-top"src="{{ asset('/images/ruangIndependen/pameran/Logo radio untar 2.png') }}"/>
              <img class="medpar-top ms-5 edaran"src="{{ asset('/images/ruangIndependen/pameran/Edaran event 1.png') }}"/>
            </div>
            <div class=" position-relative gap-3 d-flex justify-content-center align-items-center mt-5">
              <img class="medpar-top ms-5 ultimagz"src="{{ asset('/images/ruangIndependen/pameran/ULTIMAGZ copy 1.png') }}"/>
              <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/Sigma TV 2.png') }}"/>
              <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/BFAST MEDIA 1.png') }}"/>
            </div>
            <div class=" position-relative gap-3 d-flex justify-content-center align-items-center mt-3">
              <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/ALIVE 1.png') }}"/>
              <img class="medpar-bottom"src="{{ asset('/images/ruangIndependen/pameran/Logo_1-100-removebg-preview 1.png') }}"/>
              <img class="medpar-bottom2"src="{{ asset('/images/ruangIndependen/pameran/Radio Mercu Buana_ 2.png') }}"/>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  @endsection

  @section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      let visitorId = null;

      //on document ready
      document.addEventListener('DOMContentLoaded', function() {
        getVisitorId();
      }, false);

      async function getVisitorId() {
        const fpJs = await window.fp.load();
        const response = await fpJs.get();
        visitorId = response.visitorId;

        //Pameran Dokumenter
        const documenterElements = document.querySelectorAll(".video-like-button");
        defineLikeUnlikeButtons(documenterElements, visitorId);

        const documenterElements2 = document.querySelectorAll(".audio-like-button");
        defineLikeUnlikeButtons(documenterElements2, visitorId);

        const documenterElements3 = document.querySelectorAll(".artikelinteraktif-like-button");
        defineLikeUnlikeButtons(documenterElements3, visitorId);

        const documenterElements4 = document.querySelectorAll(".magazine-like-button");
        defineLikeUnlikeButtons(documenterElements4, visitorId);

        const documenterElements5 = document.querySelectorAll(".indepth-like-button");
        defineLikeUnlikeButtons(documenterElements5, visitorId);

        const documenterElements6 = document.querySelectorAll(".photostory-like-button");
        defineLikeUnlikeButtons(documenterElements6, visitorId);

      }

      function defineLikeUnlikeButtons(elements, ip) {
        const likeElementString = `
        <i class="bi bi-heart"></i> <a class='fw-bold' href="javascript:void(0)">Like</a>
      `;

        const unlikeElementString = `
        <i class="bi bi-heart-fill"></i> <a class='fw-bold' href="javascript:void(0)">Unlike</a>
      `;

        [...elements].forEach(element => {
          let likes = `${element.dataset.likes}`;
          const cleanedString = likes.replace(/[\[\]']+/g, '');
          likes = cleanedString.split(',');

          if (likes.includes(ip)) element.innerHTML = unlikeElementString;
          else element.innerHTML = likeElementString;
        });
      }

      async function likePost(artId) {
        if (visitorId == null) return;
        let response = null;

        try {
          const response = await window.axios.post(`{{ route('karya.like') }}`, {
            artId,
            visitorId
          });

          //refresh
          window.location.reload();
        } catch (e) {
          console.log("Error in like post API: ", e);
          return;
        }
      }

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
        "#carouselExample2"
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


      //CAROUSEL magazine
      var carouselWidth4 = $(".carousel-inner4")[0].scrollWidth;
      var cardWidth4 = $(".carousel-item4").width();
      var scrollPosition4 = 0;
      $(".carousel-control-next4").on("click", function() {
        if (scrollPosition4 < (carouselWidth4 - cardWidth4 * 4)) { //check if you can go any further
          scrollPosition4 += cardWidth4; //update scroll position
          $(".carousel-inner4").animate({
            scrollLeft: scrollPosition4
          }, 400); //scroll left
        }
      });
      $(".carousel-control-prev4").on("click", function() {
        if (scrollPosition4 > 0) {
          scrollPosition4 -= cardWidth4;
          $(".carousel-inner4").animate({
              scrollLeft: scrollPosition4
            },
            400
          );
        }
      });
      var multipleCardCarousel4 = document.querySelector(
        "#carouselExample3"
      );
      if (window.matchMedia("(min-width: 768px)").matches) {
        //rest of the code
        var carousel4 = new bootstrap.Carousel(multipleCardCarousel4, {
          interval4: false
        });
      } else {
        $(multipleCardCarousel4).addClass("slide");
      }
      var carousel4 = new bootstrap.Carousel(multipleCardCarousel4, {
        interval4: false,
        wrap4: false,
      });


      //CAROUSEL indepth
      var carouselWidth5 = $(".carousel-inner5")[0].scrollWidth;
      var cardWidth5 = $(".carousel-item5").width();
      var scrollPosition5 = 0;
      $(".carousel-control-next5").on("click", function() {
        if (scrollPosition5 < (carouselWidth5 - cardWidth5 * 4)) { //check if you can go any further
          scrollPosition5 += cardWidth5; //update scroll position
          $(".carousel-inner5").animate({
            scrollLeft: scrollPosition5
          }, 400); //scroll left
        }
      });
      $(".carousel-control-prev5").on("click", function() {
        if (scrollPosition5 > 0) {
          scrollPosition5 -= cardWidth5;
          $(".carousel-inner5").animate({
              scrollLeft: scrollPosition5
            },
            400
          );
        }
      });
      var multipleCardCarousel5 = document.querySelector(
        "#carouselExample4"
      );
      if (window.matchMedia("(min-width: 768px)").matches) {
        //rest of the code
        var carousel5 = new bootstrap.Carousel(multipleCardCarousel5, {
          interval5: false
        });
      } else {
        $(multipleCardCarousel5).addClass("slide");
      }
      var carousel5 = new bootstrap.Carousel(multipleCardCarousel5, {
        interval5: false,
        wrap5: false,
      });

      function showFullDescription(e) {
        const parent = e.parentElement;
        const cardDescriptionElement = parent.querySelector(".card-text");
        const descriptionContainer = cardDescriptionElement.parentElement;

        if (parent.querySelector("#myBtn1").textContent === "Read more") {
            descriptionContainer.classList.remove("text-truncate-container");
            parent.querySelector("#myBtn1").textContent = "Read Less";
        } else {
            descriptionContainer.classList.add("text-truncate-container");
            parent.querySelector("#myBtn1").textContent = "Read more";
        }
      }

      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout: 2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
        }
    })


    </script>
      <script src="https://kit.fontawesome.com/61f2e03fd8.js" crossorigin="anonymous"></script>
  @endsection
