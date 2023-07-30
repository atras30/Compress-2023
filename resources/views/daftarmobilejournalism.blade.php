@extends("/layout.user.master_layout")

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
        font-family: 'Bazinga';
        font-style: normal;
        font-weight: 400;
        src: url('/fonts/Bazinga-Regular.ttf');
    }

    @media (max-width: 769px) {
      .title5{
        font-size:2.5rem!important;
      }

      .title6{
        font-size:4rem!important;
      }

      .hero-title {
        font-size: 4.5rem!important;
      }

      .hero-title2 {
        font-size: 2.5rem!important;
      }

      .hero-title3 {
        font-size: 2rem!important;
      }

      .hero-title4 {
        font-size: 1.5rem!important;
      }

      .list{
        font-size:1rem!important;
      }

      .list2{
        font-size:1rem!important;
      }
    }

    @media (max-width: 414px) {
      .title5{
        font-size:2rem!important;
      }

      .title6{
        font-size:2.5rem!important;
      }
    }

    .font-bazinga {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
    }

    .judul-list {
      font-family: Bazinga;
      font-size: 1.8rem;
    }

    .bg-yellow {
      background-color: #FFEA22;
    }

    .bg-purple {
      background-color: #745AA1;
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

    .ptop-1 {
      padding-top: 0.8rem;
    }

    .ptop-3 {
      padding-top: 2.5rem;
    }

    .pbot-3 {
      padding-bottom: 2.5rem;
    }

    .ptop-7 {
      padding-top: 7rem;
    }

    .hero-title {
      font-size: 6rem;
    }

    .hero-title2 {
      font-size: 4rem;
    }

    .hero-title3 {
      font-size: 3rem;
    }

    .hero-title4 {
      font-size: 2rem;
    }

    .motive{
        opacity:0.05
    }

    .list{
        max-width: 35rem;
        border-style: solid;
        border-width: thick;
        background-color: white;
    }

    .list2{
        max-width: 34.95rem;
        border-style: solid;
        border-width: thick;
        background-color: white;
    }

    .text-length{
      width: 70rem;
    }

    .star{
      margin-top:20rem;
      width:40rem;
      height:20rem;
    }
</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-yellow pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100 motive" src="{{ asset('/images/daftar-ruangindependen/mobile-journalism/motive.png') }}" alt="background motive">
        {{-- Background Assets --}}
        <img class="position-absolute start-0 w-100 h-2" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="top">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
                {{-- Title --}}
                <section class="text-center ptop-5">
                <div class="hero-title2 px-5 mb-2 font-bazinga text-white">
                    RUANG INDI(E)PENDEN #DARIJURNALISMUDA
                </div>
                <div class="hero-title px-5 mb-5 font-bazinga text-white">
                    MOBILE JOURNALISM
                </div>
                <div class="hero-title3 px-5 mb-2 font-bazinga text-white">
                    TEMA:
                </div>
                <div class="hero-title4 px-5 mb-5 font-bazinga text-white">
                    KEJAHATAN MEDIA SOSIAL
                </div>
                </section>
                <section>
                <div class="container px-5 mb-5">
                    <div class="row">
                      <div class="col">
                           <div class="row list fs-5 mb-5">
                            <u class="judul-list text-black px-4 ptop-3">Persyaratan Umum</u>
                            <ol class="px-5 fw-bold pbot-3">
                              <li>Lomba bersifat individu atau perorangan.</li>
                              <li>Peserta merupakan mahasiswa aktif seluruh Indonesia (S1).</li>
                              <li>Isi karya tidak boleh mengandung unsur SARA, provokatif, pornografi, kata kasar, penghinaan dan menjatuhkan instansi, serta lembaga serta pihak lain.</li>
                              <li>Peserta wajib mengunggah karya ke Instagram masing-masing (akun tidak boleh di-private) dengan menandai akun Instagram @commpressumn dan @ruang.independen serta menyertakan hastag #COMMPRESS2023 dan #MobileJournalism_COMMPRESS2023.</li>
                              <li>Peserta mengumpulkan tautan karya sesuai tenggat waktu yang telah ditentukan melalui website resmi commpress.umn.ac.id.</li>
                            </ol>
                           </div>
                           <div class="row list fs-5 mb-5 ptop-1">
                            <u class="judul-list text-black px-4 ptop-3">Penilaian</u>
                              <ol class="px-5 fw-bold pbot-3">
                                <li>Kesesuaian isi karya dengan tema.</li>
                                <li>Kreativitas.</li>
                                <li>Kualitas video.</li>
                                <li>Caption dalam video.</li>
                                <li>Kesesuain dengan format ketentuan lomba.</li>
                              </ol>
                           </div>
                      </div>
                      <div class="col">
                        <div class="row list2 fs-5">
                        <u class="judul-list text-black px-4 ptop-3">Persyaratan Khusus</u>
                            <ol class="px-5 fw-bold pbot-3">
                              <li>Lomba News Infographic bertemakan “Kejahatan di Dunia Maya”.</li>
                              <li>Isi karya harus sesuai dengan tema yang telah ditentukan.</li>
                              <li>Karya yang dilombakan bersifat orisinil dan belum pernah dipublikasikan sebelumnya.</li>
                              <li>Karya yang dilombakan berdurasi 2-3 menit.</li>
                              <li>Peserta wajib mencantumkan minimal satu narasumber yang kredibel.</li>
                              <li>Video diproduksi dengan menggunakan gawai sebagai media untuk merekam dan menyunting.</li>
                              <li>Pastikan kualitas gambar tidak blur dan suara audio dapat terdengar jelas.</li>
                              <li>Apabila menyertakan data pendukung, data harus dapat dipertanggung jawabkan.</li>
                              <li>Apabila terdapat gugatan hak cipta, Pihak Panitia tidak bertanggung jawab terhadap hal tersebut.</li>
                              <li>Hak cipta tetap pada peserta lomba, tetapi panitia berhak untuk menggunakan karya tersebut untuk kepentingan acara.</li>
                              <li>Gaya bahasa dan diksi yang digunakan dalam karya harus disesuaikan dengan kaidah jurnalistik, KBBI, dan PUEBI.</li>
                              <li>Panitia berhak mendiskualifikasi peserta apabila karya yang dilombakan tidak sesuai dengan tema dan persyaratan yang telah ditentukan.</li>
                            </ol>
                        </div>
                      </div>
                  </div>
                </div>
                </section>
        </div>
    </div>
    <div class="position-relative bg-purple pb-5 mh-85vh">
        <img class="position-absolute object-fit-cover w-100 h-100 motive2" src="{{ asset('/images/daftar-ruangindependen/mobile-journalism/Frame.png') }}" alt="motive">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
        <section class="d-flex justify-content-center align-items-center flex-column ptop-7">
          <div class="position-relative text-center">
              <img class="mw-100" style="width:50rem; padding-bottom:3rem;"src="{{ asset('/images/daftar-ruangindependen/mobile-journalism/bg-judul.png')}}"></img>
              <div class="position-absolute top-50 start-50 translate-middle fs-2 fw-bold text-black text-length">
                <div class="px-5 font-bazinga text-info title5" style="font-size:4rem;">
                    SUBMIT KARYA:
                </div>
                <div class="px-5 mb-5 font-bazinga text-warning title6" style="font-size:5rem;">
                    MOBILE JOURNALISM
                </div>
              </div>
          </div>
        </section>
        <form class="px-5 ptop-5" action="{{ route('validateMOJO') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-4">
            <label class="judul-list text-white"for="namalengkap">Nama Lengkap</label>
            <input type="text" name="namalengkap" class="form-control" value={{ @old('namalengkap') }}>
            @error('namalengkap')
              <div class="error-text">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="universitas">Asal Universitas</label>
              <input type="text" name="universitas" class="form-control" value={{ @old('universitas') }}>
              @error('universitas')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="nim">NIM</label><br>
              <input type="text" name="nim" placeholder="contoh: 00000012345" class="form-control" value={{ @old('nim') }}>
              <small class="fs-6 fs-bold text-white">Khusus Mahasiswa Universitas Multimedia Nusantara.<br>
              Isi '-' Jika Bukan Mahasiswa Universitas Multimedia Nusantara</small>
              @error('nim')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="judul-list text-white"for="email">Email</label>
              <input type="text" name="email" class="form-control" value={{ @old('email') }}>
              @error('email')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="col">
              <label class="judul-list text-white"for="medsos">Line atau Whatsapp</label>
              <input type="text" name="medsos" class="form-control" value={{ @old('medsos') }}>
              @error('medsos')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="bukti">Bukti Pembayaran</label>
              <input type="file" name="bukti" class="form-control" value={{ @old('bukti') }}>
              @error('butki')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="instagram">Instagram</label>
              <input type="input" name="instagram" class="form-control" value={{ @old('instagram') }}>
              <small class="fs-6 fs-bold text-white">Akun Instagram yang digunakan untuk tempat meng-upload karya</small>
              @error('instagram')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="linkkaryaig">Link Hasil Karya</label>
              <input type="input" name="linkkaryaig" class="form-control" value={{ @old('linkkaryaig') }}>
              <small class="fs-6 fs-bold text-white">Link karya yang sudah di-upload di Instagram</small>
              @error('linkkaryaig')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <button class="btn btn-light judul-list text-black d-grid gap-2 col-3 mx-auto mb-5" type="submit">Kirim</button>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
