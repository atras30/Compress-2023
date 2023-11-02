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
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000
    }

    .font-bazinga-daftar {
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

    .judul-list {
      font-family: Bazinga;
      font-size: 1.8rem;
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
      <div class="gap-1 d-flex flex-column justify-content-center h-100 mx-4 mx-md-5">
        <div class="text-white font-bazinga" style="font-size:3.5rem;">WORKSHOP:</div>
        <div class="text-warning font-bazinga" style="font-size:6.5rem">TBA</div>
        <section class="d-flex flex-column flex-lg-row pleft-2 gap-4 mb-5 pb-5">
            <div class="flex-item position-relative" style="max-width: 70%">
                <a id="btn-daftar" href="#formdaftar"><img class="mw-100" src="{{ asset('/images/components/buttons/button-rounded.png') }}" alt="Button Rounded">
                <p class="position-absolute start-50 top-50 font-bazinga-daftar btn-bar translate-middle fs-4 fw-bold text-black text-decoration-none" style="white-space: nowrap;">Daftar</p></a>
            </div>
        </section>
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

    <div class="w-100 h-100 fw-bold pt-5 mb-5 pb-5 position-relative" id="formdaftar">
      <div class="position-relative d-flex justify-content-center align-items-center flex-column">
        <img class="mw-100 px-4" style="width: 600px;" src="{{ asset('/images/workshop/registration/cloud-registrasi-workshop.png') }}" alt="">
        <div class="position-absolute start-50 top-50 translate-middle">
          <div class = "font-bazinga text-info" style="font-size:3rem;">REGISTRASI:</div>
          <div class = "font-bazinga text-warning" style="font-size:4rem;">WORKSHOP</div>
        </div>
      </div>

      <form id="form-registration"  class="px-5" action="{{ route('workshop.registration') }}" method="POST">
        @csrf
        <div class="input-form-workshop mb-4">
          <label for="nama-lengkap" class="judul-list text-white">Nama Lengkap</label>
          <input placeholder="John Doe" class="form-control px-3" type="text" name="nama-lengkap" id="nama-lengkap" value="{{ old('nama-lengkap') }}">
          @error('nama-lengkap')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop mb-4">
          <label for="line-whatsapp" class="judul-list text-white">Nomer HP (WhatsApp) / Email</label>
          <input placeholder="08xx-xxxx-xxxx | john.doe@gmail.com" class="form-control px-3" type="text" name="line-whatsapp" id="line-whatsapp" value="{{ old('line-whatsapp') }}">
          @error('line-whatsapp')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-form-workshop mb-4">
          <label for="asal-universitas" class="judul-list text-white">Asal Universitas</label>
          <select onchange="onSelectChange(this)" name="asal-universitas" id="asal-universitas" class="form-control px-3" value="{{ @old('asal-universitas') }}">
              <option value="" disabled selected>Select an option</option>
              <option @if(old('prodi') === 'Universitas Multimedia Nusantara') selected @endif value="Universitas Multimedia Nusantara">Universitas Multimedia Nusantara</option>
              <option @if(old('prodi') === "Eksternal") selected @endif value="Eksternal">Eksternal</option>
          </select>
          @error('asal-universitas')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
          <div class="input-form-workshop mb-4">
            <label style="display: none" id="prodilabel" for="program-studi" class="judul-list text-white">Program Studi</label>
            <select style="display: none" name="program-studi" id="program-studi" class="form-control px-3" value="{{ @old('program-studi') }}">
                <option value="" disabled selected>Select an option</option>
                <option @if(old('prodi') === 'Informatika') selected @endif value="Informatika">Informatika</option>
                <option @if(old('prodi') === "Teknik Komputer") selected @endif value="Teknik Komputer">Teknik Komputer</option>
                <option @if(old('prodi') === "Teknik Elektro") selected @endif value="Teknik Elektro">Teknik Elektro</option>
                <option @if(old('prodi') === "Teknik Fisika") selected @endif value="Teknik Fisika">Teknik Fisika</option>
                <option @if(old('prodi') === "Sistem Informasi") selected @endif value="Sistem Informasi">Sistem Informasi</option>
                <option @if(old('prodi') === "Akuntansi") selected @endif value="Akuntansi">Akuntansi</option>
                <option @if(old('prodi') === "Manajemen") selected @endif value="Manajemen">Manajemen</option>
                <option @if(old('prodi') === "Perhotelan") selected @endif value="Perhotelan">Perhotelan</option>
                <option @if(old('prodi') === "Komunikasi Strategis") selected @endif value="Komunikasi Strategis">Komunikasi Strategis</option>
                <option @if(old('prodi') === "Jurnalistik") selected @endif value="Jurnalistik">Jurnalistik</option>
                <option @if(old('prodi') === "Desain Komunikasi Visual") selected @endif value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option @if(old('prodi') === "Arsitektur") selected @endif value="Arsitektur">Arsitektur</option>
                <option @if(old('prodi') === "Film & Animasi") selected @endif value="Film & Animasi">Film & Animasi</option>
            </select>
            @error('program-studi')
              <div style="padding: .5rem;" class="alert alert-danger form-control px-3">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="input-form-workshop mb-4">
            <label style="display: none" id="nimlabel" for="nim" class="judul-list text-white">NIM</label>
            <input style="display: none" placeholder="00000050597" class="form-control px-3" type="text" name="nim" id="nim" value="{{ old('nim') }}">
            @error('nim')
              <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-form-workshop mb-4">
            <label style="display: none" id="angkatanlabel" for="angkatan" class="judul-list text-white">Angkatan</label>
            <select style="display: none" name="angkatan" id="angkatan" class="form-control px-3" value="{{ @old('angkatan') }}">
                <option value="" disabled selected>Select an option</option>
                <option @if(old('prodi') === '2023') selected @endif value="2023">2023</option>
                <option @if(old('prodi') === "2022") selected @endif value="2022">2022</option>
                <option @if(old('prodi') === "2021") selected @endif value="2021">2021</option>
                <option @if(old('prodi') === "2020") selected @endif value="2020">2020</option>
                <option @if(old('prodi') === "2019") selected @endif value="2019">2019</option>
                <option @if(old('prodi') === "Other") selected @endif value="Other">Other</option>
            </select>
            @error('angkatan')
              <div style="padding: .5rem;" class="alert alert-danger form-control px-3">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="input-form-workshop mb-4">
            <label style="display: none" id="emaillabel" for="email" class="judul-list text-white">Email Student</label>
            <input style="display: none" placeholder="john.doe@student.umn.ac.id" class="form-control px-3" type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
              <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="input-form-workshop mb-4">
          <label for="know-commpress-from" class="judul-list text-white">Dari mana kamu tahu Seminar/Workshop COMMPRESS 2023?</label>
          <select onchange="onSelectChange2(this)" name="know-commpress-from" id="know-commpress-from" class="form-select form-control" aria-label="Default select example" value="">
            <option value="">Klik untuk melihat opsi...</option>
            <option value="Instagram COMMPRESS UMN">Instagram COMMPRESS UMN</option>
            <option value="TikTok COMMPRESS UMN">TikTok COMMPRESS UMN</option>
            <option value="Sosial Media Milik Media Partner">Sosial Media Milik Media Partner</option>
            <option value="Teman">Teman</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          @error('know-commpress-from')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
          <input style="display: none" placeholder="Jadi... Tahu Darimana ?" class="form-control px-3 w-50" type="text" id="input-other" name="input-other" value="{{ old('input-other') }}" />
          @error('input-other')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-form-workshop mb-4">
          <label for="alasan" class="judul-list text-white">Alasan mengikuti Seminar/Workshop COMMPRESS 2023</label>
          <input placeholder="Karena sangat tertarik!" class="form-control px-3" type="text" name="alasan" id="alasan" value="{{ old('alasan') }}">
          @error('alasan')
            <div style="padding: .5rem;" class="alert alert-danger form-control px-3">{{ $message }}</div>
          @enderror
        </div>

        <button style="border: 2px solid black" class="btn btn-light judul-list rounded text-black d-grid gap-2 col-3 mx-auto mb-5">KIRIM</button>
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
      const flashMessage = `{!! session('flash_message') !!}`;
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


      const prodilabel = document.querySelector("#prodilabel");
      const prodiinput = document.querySelector("#program-studi");
      const angkatanlabel = document.querySelector("#angkatanlabel");
      const angkataninput = document.querySelector("#angkatan");
      const nimlabel = document.querySelector("#nimlabel");
      const niminput = document.querySelector("#nim");
      const emaillabel = document.querySelector("#emaillabel");
      const emailinput = document.querySelector("#email");


      if (value == "Universitas Multimedia Nusantara") {
        prodilabel.style.display = "inline";
        prodiinput.style.display = "inline";
        angkatanlabel.style.display = "inline";
        angkataninput.style.display = "inline";
        nimlabel.style.display = "inline";
        niminput.style.display = "inline";
        emaillabel.style.display = "inline";
        emailinput.style.display = "inline";


      } else {
        prodiinput.style.display = "none";
        prodilabel.style.display = "none";
        prodiinput.style.display = "none";
        angkatanlabel.style.display = "none";
        angkataninput.style.display = "none";
        nimlabel.style.display = "none";
        niminput.style.display = "none";
        emaillabel.style.display = "none";
        emailinput.style.display = "none";

      }


      if (value == "Lainnya") {
        inputOther.style.display = "inline";

      } else {
        inputOther.style.display = "none";
      }
    }

    function onSelectChange2(e) {
      const value = e.value;
      const inputOther = document.querySelector("#input-other");

      if (value == "Lainnya") {
        inputOther.style.display = "inline";

      } else {
        inputOther.style.display = "none";
      }
    }
  </script>
@endsection
