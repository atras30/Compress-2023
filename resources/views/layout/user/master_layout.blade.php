<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{ $title }} | Commpress 2023</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="icon" href="{{ asset('images/home/components/logo.png') }}">
  @yield('styles')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
      font-family: 'Bazinga';
      font-style: normal;
      font-weight: 400;
      src: url('fonts/Bazinga-Regular.ttf');
    }

    .h-line-left {
      border-left: #000 2px solid;
    }

    .nav-item {
      font-family: Bazinga;
      margin: 1vh 1vw;
    }

    .pleft-3 {
      margin-left: 3rem;
    }
  </style>

  @vite('resources/js/app.js')
</head>

<body>
  @include('sweetalert::alert')
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #BB181B; z-index: 5; width:100%;">
    <div class="container-fluid d-flex justify-content-between">
      <a class="d-flex navbar-brand" href="{{ route('home') }}">
        <img class="pleft-3" src="/images/home/components/logo.png" alt="Logo" width="64" height="64">
      </a>
      <button class="navbar-toggler border border-dark" style="background-color: #d75a5c;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-light border border-dark rounded-pill px-4 fs-5" aria-current="page" href="{{ route('talkshow') }}">Talkshow</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light border border-dark rounded-pill px-4 fs-5" href="{{ route('ruangindependen') }}">Ruang Indi(e)penden</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light border border-dark rounded-pill px-4 fs-5" href="{{ route('workshop') }}">Workshop</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light border border-dark rounded-pill px-4 fs-5" href="#footer">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('contents')
  <div>
    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start text-white" style="background-color: #BB181B">
      <!-- Grid container -->
      <div class="container-fluid p-4 pb-5">
        <!-- Section: Links -->
        <section class="d-flex flex-column flex-md-row align-items-stretch fw-bold gap-5 justify-content-center">
          <img class="img-fluid align-self-center" style="max-width: 8.5rem; max-height: 8.5rem;" src="{{ asset('/images/logos/logo.png') }}" alt="Logo">
          <div class="text-center align-self-center fs-5">
            <div>GET READY FOR BIGGER CHANGE!</div>
            <div class="mb-4">- COMMPRESS 2023 -</div>
            <div class="d-inline-flex">
              <a href="https://www.instagram.com/commpressumn/"><img style="width: 4rem;" src="{{ asset('/images/logos/instagram.svg') }}" alt=""></a>
              <a href="https://www.instagram.com/ruang.indiependen/"><img style="width: 4rem;" src="{{ asset('/images/logos/instagram.svg') }}" alt=""></a>
              <a href="https://www.tiktok.com/@commpressumn"><img style="width: 3rem;" src="{{ asset('/images/logos/tiktok.png') }}" alt=""></a>
              <a href="https://www.linkedin.com/company/commpress-umn/mycompany/"><img style="width: 3rem;" src="{{ asset('/images/logos/linkedin.png') }}" alt=""></a>
            </div>
          </div>
          <div class="h-line-left d-none d-md-block"></div>
          <div class="d-flex align-items-center flex-column justify-content-center">
            <div class="d-inline-flex mb-1 pb-1">
              <img class="img-fluid align-self-center" style="max-width: 8.5rem; max-height: 8.5rem;" src="{{ asset('/images/logos/logoUMN2.png') }}" alt="Logo">
              <img class="img-fluid align-self-center" style="max-width: 8.5rem; max-height: 8.5rem;" src="{{ asset('/images/logos/LogoUMN.png') }}" alt="Logo">
            </div>
            <div>Universitas Multimedia Nusantara</div>
            <div>Jl. Scientia Boulevard, Gading Serpong,Tangerang, Banten, 15810</div>
          </div>
        </section>
      </div>
    </footer>
    <!-- Footer -->
  </div>

  @yield('scripts')
</body>

</html>
