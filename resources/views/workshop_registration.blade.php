@extends('layout.user.master_layout')

@section('styles')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
      font-family: 'Bazinga';
      font-style: normal;
      font-weight: 400;
      src: url('fonts/Bazinga-Regular.ttf');
    }

    .bg-red {
      background-color: #BB181B;
    }

    .bg-yellow {
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

    .bar {
      width: 3.5rem;
    }

    .polkadot {
      opacity: .25;
    }

    .font-bazinga {
      font-family: Bazinga;
    }

    .hero-title {
      font-size: 3.5rem;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .title-description {
      font-family: 'Inter', sans-serif;
    }

    .red-stripes {
      opacity: .4;
    }

    @media (max-width: 1200px) {
      .speaker {
        gap: 5rem;
      }
    }

    .bg-purple {
      background-color: #745aa1;
    }

    .input-form-workshop {
      margin-bottom: 1rem;
    }

    .input-form-workshop label {
      color: white;
      display: block;
      margin-left: .9rem;
      margin-bottom: .3rem;
    }

    .input-form-workshop input {
      display: block;
      width: 100%;
      border: 4px solid black;
      outline: none;
      height: 2.5rem;
    }

    .input-form-workshop select {
      display: block;
      width: 100%;
      border: 4px solid black;
      outline: none;
      height: 2.5rem;
    }
  </style>
@endsection

@section('contents')
  <div class="main-content mh-85vh position-relative bg-red">
    <img class="position-absolute object-fit-cover w-100 h-100 red-stripes" src="{{ asset('images/workshop/registration/red-stripes-1.png') }}" alt="Red Stripes">

    {{-- Background Assets --}}
    <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="top">
    <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">
    <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">
    <img class="position-absolute end-0 object-fit-contain" style="height: calc(100% - 4rem); margin-top: 2rem;" src="{{ asset('images/workshop/registration/jurno-kurator.png') }}" alt="jurno-kurator-image">

    <div class="position-absolute w-100 h-100 fw-bold">
      <div class="gap-1 d-flex flex-column justify-content-center h-100 mx-4 mx-md-5 fs-2">
        <div class="text-white">WORKSHOP:</div>
        <div class="text-warning">TBA</div>
        <button class="my-2 btn btn-light border border-dark rounded-pill fw-bold" style="width: 150px">DAFTAR</button>
      </div>
    </div>
  </div>

  {{-- SECTION 2 --}}

  <div class="position-relative bg-yellow pb-5">
    <img class="position-absolute object-fit-cover w-100 h-100 polkadot" src="{{ asset('/images/road-to-yja/background/white-polkadot.png') }}" alt="White polkadot">

    {{-- Background Assets --}}
    <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">

    <div class="w-100 h-100 fw-bold pt-5 mb-5 pb-5 position-relative">
      <div class="speaker d-flex flex-column flex-xl-row justify-content-center h-100 mx-4 mx-md-5">
        <div class="flex-item d-flex justify-content-center align-items-center flex-column">
          <h3 class="fw-bold">PEMBICARA I</h3>
          <div class="position-relative d-flex justify-content-center align-items-center">
            <img style="max-width: 80%;" src="{{ asset('/images/workshop/registration/pembicara-1.png') }}" alt="pembicara-1">
            <img class="position-absolute" style="max-width: 50%; bottom: -15%; left: -5%" src="{{ asset('/images/workshop/registration/floating-text-1.png') }}" alt="floating-text-1">
          </div>
        </div>

        <div class="flex-item d-flex justify-content-center align-items-center flex-column">
          <h3 class="fw-bold">PEMBICARA II</h3>
          <div class="position-relative d-flex justify-content-center align-items-center">
            <img style="max-width: 80%;" src="{{ asset('/images/workshop/registration/pembicara-2.png') }}" alt="pembicara-1">
            <img class="position-absolute" style="max-width: 50%; bottom: -15%; right: 5%" src="{{ asset('/images/workshop/registration/floating-text-2.png') }}" alt="floating-text-2">
          </div>
        </div>
      </div>
    </div>

    <div class="description position-relative mb-5">
      <div class="fs-2 text-center fw-bold">COMIC JOURNALISM</div>
      <div class="mx-auto px-5" style="max-width: 55rem; text-align:justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur inventore dolorum, quidem voluptatum magni aliquid vero fuga totam recusandae, neque odio. Molestiae non incidunt distinctio suscipit amet sed similique aliquam cumque hic, possimus id dolore itaque facilis illum iste quisquam delectus ipsum nobis quam vel nam commodi autem tempore? Magnam corrupti expedita laborum, voluptate ducimus molestias incidunt temporibus, aperiam id quasi odio provident, accusantium excepturi veritatis nihil. Animi nemo fugit ipsum exercitationem quia distinctio, nihil expedita neque, reprehenderit, debitis quam!</div>
    </div>
  </div>

  {{-- SECTION 3 --}}

  <div class="position-relative bg-purple pb-5">
    <img class="position-absolute object-fit-cover w-100 h-100 polkadot" src="{{ asset('/images/workshop/registration/purple-stripes.png') }}" alt="Purple Stripes">

    {{-- Background Assets --}}
    <img class="position-absolute bottom-0 w-100 h-2" src="{{ asset('/images/road-to-yja/base/top-bottom.png') }}" alt="bottom">

    <div class="w-100 h-100 fw-bold pt-5 mb-5 pb-5 position-relative">
      <div class="position-relative d-flex justify-content-center align-items-center flex-column">
        <img class="mw-100 px-4" style="width: 600px;" src="{{ asset('/images/workshop/registration/cloud-registrasi-workshop.png') }}" alt="">
        <div class="fs-2 position-absolute start-50 top-50 translate-middle">
          <div style="color: #3395a9">REGISTRASI:</div>
          <div style="color: #ffea22">WORKSHOP</div>
        </div>
      </div>

      <form id="form-registration" class="container" action="{{ route('workshop.registration') }}" method="POST">
        @csrf
        <div class="input-form-workshop">
          <label for="nama-lengkap">Nama Lengkap</label>
          <input placeholder="John Doe" class="rounded-pill px-3" type="text" name="nama-lengkap" id="nama-lengkap" value="{{ old('nama-lengkap') }}">
          @error('nama-lengkap')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop">
          <label for="asal-universitas">Asal Universitas</label>
          <input placeholder="Universitas Multimedia Nusantara" class="rounded-pill px-3" type="text" name="asal-universitas" id="asal-universitas" value="{{ old('asal-universitas') }}">
          @error('asal-universitas')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop">
          <label for="nim">NIM</label>
          <input placeholder="00000050597" class="rounded-pill px-3" type="text" name="nim" id="nim" value="{{ old('nim') }}">
          @error('nim')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop">
          <label for="program-studi">Program Studi</label>
          <input placeholder="Informatika" class="rounded-pill px-3" type="text" name="program-studi" id="program-studi" value="{{ old('program-studi') }}">
          @error('program-studi')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop">
          <label for="email">Email</label>
          <input placeholder="john.doe@student.umn.ac.id" class="rounded-pill px-3" type="email" name="email" id="email" value="{{ old('email') }}">
          @error('email')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop">
          <label for="line-whatsapp">Line / Whatsapp</label>
          <input placeholder="08xx-xxxx-xxxx" class="rounded-pill px-3" type="text" name="line-whatsapp" id="line-whatsapp" value="{{ old('line-whatsapp') }}">
          @error('line-whatsapp')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-form-workshop">
          <label for="know-commpress-from">Dari mana kamu tahu Seminar/Workshop COMMPRESS 2023?</label>
          <select onchange="onSelectChange(this)" name="know-commpress-from" id="know-commpress-from" class="form-select rounded-pill" aria-label="Default select example" value="">
            <option value="">Klik untuk melihat opsi...</option>
            <option value="Instagram COMMPRESS UMN">Instagram COMMPRESS UMN</option>
            <option value="TikTok COMMPRESS UMN">TikTok COMMPRESS UMN</option>
            <option value="Sosial Media Milik Media Partner">Sosial Media Milik Media Partner</option>
            <option value="Teman">Teman</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          @error('know-commpress-from')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
          <input style="display: none" placeholder="Jadi... Tahu Darimana ?" class="rounded-pill px-3 w-50" type="text" id="input-other" name="input-other" value="{{ old('input-other') }}" />
          @error('input-other')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-form-workshop">
          <label for="alasan">Alasan mengikuti Seminar/Workshop COMMPRESS 2023</label>
          <input placeholder="Karena sangat tertarik!" class="rounded-pill px-3" type="text" name="alasan" id="alasan" value="{{ old('alasan') }}">
          @error('alasan')
            <div style="padding: .5rem;" class="alert alert-danger rounded-pill px-3">{{ $message }}</div>
          @enderror
        </div>

        <button style="border: 2px solid black" class="btn btn-primary rounded-pill px-4">Submit!</button>

      </form>
    </div>
  </div>

  <!-- Button trigger modal -->
  <button id="notification-modal-button" type="button" class="d-none btn btn-primary" data-bs-toggle="modal" data-bs-target="#notification-modal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="notification-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-success" id="notification-modal-title"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script defer>
    window.onload = function() {
      const formError = "{{ session('isFormValidationError') }}";
      const flashMessage = "{{ session('flash_message') }}";
      if(flashMessage) showFlashMessage(flashMessage);
      if(formError) scrollIntoForm();
    }

    function showFlashMessage(message) {
        const button = document.querySelector("#notification-modal-button");
        button.click();

        const modalTitle = document.querySelector("#notification-modal-title");
        modalTitle.textContent = message;
    }

    function scrollIntoForm() {
      const form = document.querySelector("#form-registration");
      form.scrollIntoView({
        behavior: "smooth"
      });
    }

    function onSelectChange(e) {
      const value = e.value;
      const inputOther = document.querySelector("#input-other");

      if (value == "Lainnya") {
        inputOther.style.display = "inline";
        console.log(inputOther);
      } else {
        inputOther.style.display = "none";
      }
    }
  </script>
@endsection
