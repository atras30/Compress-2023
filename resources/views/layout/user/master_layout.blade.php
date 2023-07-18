<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }} | Compress 2023</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @yield("styles")
</head>
<body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #BB181B;">
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
                    <a class="btn btn-light" href="#" >Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield("contents")
    @yield("scripts")
    <div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #BB181B"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-3">
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col">
            <p class="d-flex justify-content-center align-items-center">GET READY FOR BIGGER CHANGE!</p><br>
            <p class="d-flex justify-content-center align-items-center">- COMMPRESS 2023 -</h5>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col">
            <p class="d-flex justify-content-center align-items-center text-center">Universitas Multimedia Nusantara
            Jl. Scientia Boulevard, Gading Serpong,
            Tangerang, Banten, 15810</p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>

      <hr class="mb-4" />
      <!-- Section: CTA -->

      <!-- Section: Social media -->
      <section class="mb-4 text-center">
        <!-- Facebook -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-facebook-f"></i
          ></a>

        <!-- Twitter -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-twitter"></i
          ></a>

        <!-- Google -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-google"></i
          ></a>

        <!-- Instagram -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-instagram"></i
          ></a>

        <!-- Linkedin -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-linkedin-in"></i
          ></a>

        <!-- Github -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-github"></i
          ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
</body>
</html>
