<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{ $title }} | Compress 2023</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  @yield('styles')
  <style>
    .h-line-left {
      border-left: #000 2px solid;
    }
  </style>
</head>

<body>
  @include('sweetalert::alert')
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #BB181B; z-index: 5;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
      </a>
      <ul class="nav nav-pills nav-fill justify-content-end">
        <li class="nav-item">
          <a class="btn btn-light" aria-current="page" href="{{ route('workshop') }}">Workshop</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-light" href="{{ route('ruangindependen') }}">Ruang Indi(e)penden</a>
        </li>
        <li class="nav-item dropdown">
          <a class="btn btn-light dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Young Journalist Award
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="{{ route('rtyja') }}">Road To Young Journalist Award</a></li>
            <li><a class="dropdown-item" href="{{ route('yja') }}">Young Journalist Award</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="btn btn-light" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  @yield('contents')
  @yield('scripts')
  <div>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #BB181B">
      <!-- Grid container -->
      <div class="container-fluid p-4 pb-5">
        <!-- Section: Links -->
        <section class="d-flex flex-column flex-md-row align-items-stretch fw-bold gap-5 justify-content-center">
          <img class="img-fluid align-self-center" style="max-width: 8.5rem; max-height: 8.5rem;" src="{{ asset('/images/logos/logo.png') }}" alt="Logo">
          <div class="text-center align-self-center fs-5">
            <div>GET READY FOR BIGGER CHANGE!</div>
            <div class="mb-4">- COMMPRESS 2023 -</div>
            <div>
                <img style="width: 1.9rem;" src="{{asset('/images/components/misc/circle.png')}}" alt="">
                <img style="width: 1.9rem;" src="{{asset('/images/components/misc/circle.png')}}" alt="">
                <img style="width: 1.9rem;" src="{{asset('/images/components/misc/circle.png')}}" alt="">
                <img style="width: 1.9rem;" src="{{asset('/images/components/misc/circle.png')}}" alt="">
                <img style="width: 1.9rem;" src="{{asset('/images/components/misc/circle.png')}}" alt="">
            </div>
          </div>
          <div class="h-line-left d-none d-md-block"></div>
          <div class="d-flex align-items-center flex-column justify-content-center">
            <div>Universitas Multimedia Nusantara</div>
            <div>Jl. Scientia Boulevard, Gading Serpong,Tangerang, Banten, 15810</div>
          </div>
        </section>
      </div>
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
</body>

</html>
