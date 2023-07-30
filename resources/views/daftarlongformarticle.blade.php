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

    @media (max-width: 700px) {
      .title5{
        font-size:2.5rem!important;
      }

      .title6{
        font-size:3rem!important;
      }
    }

    @media (max-width: 500px) {
      .title5{
        font-size:2rem!important;
        margin-top:1.5rem!important;
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

    .bg-blue {
      background-color: #318090;
    }

    .bg-red {
      background-color: #BB181B;
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
      padding-top: 3rem;
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

    .list{
        max-width: 35rem;
        border-style: solid;
        border-width: thick;
        background-color: white;
    }

    .list2{
        max-width: 38rem;
        border-style: solid;
        border-width: thick;
        background-color: white;
    }

    .text-length{
      width: 70rem;
    }

</style>
@endsection

@section("contents")
<div>
    <div class="main-content mh-85vh position-relative bg-blue pb-5">
        <img class="position-absolute object-fit-cover w-100 h-100 motive" src="{{ asset('/images/daftar-ruangindependen/long-form-article/motive.png') }}" alt="background motive">
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
                    Long-Form Article
                </div>
                <div class="hero-title3 px-5 mb-2 font-bazinga text-white">
                    TEMA:
                </div>
                <div class="hero-title4 px-5 mb-5 font-bazinga text-white">
                    1. MEDIA VS KECERDASAN BUATAN <br>
                    2. KEANEKARAGAMAN BUDAYA NUSANTARA
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
                              <li>Peserta wajib mengumpulkan karya sesuai tenggat waktu yang telah ditentukan melalui website resmi commpress.umn.ac.id.</li>
                              <li>Format pengumpulan file berupa PDF.</li>
                            </ol>
                           </div>
                           <div class="row list fs-5 mb-5 ptop-1">
                            <u class="judul-list text-black px-4 ptop-3">Penilaian</u>
                              <ol class="px-5 fw-bold pbot-3">
                                <li>Kesesuaian isi karya dengan tema.</li>
                                <li>Pemilihan angle, judul, dan gaya bahasa yang menarik.</li>
                                <li>Kesesuaian karya dengan format yang telah ditentukan.</li>
                                <li>Alur penulisan.</li>
                                <li>Penggunaan diksi yang sesuai dengan kaidah jurnalistik, KBBI, dan PUEBI.</li>
                              </ol>
                           </div>
                      </div>
                      <div class="col">
                        <div class="row list2 fs-5">
                        <u class="judul-list text-black px-4 ptop-3">Persyaratan Khusus</u>
                            <ol class="px-5 fw-bold pbot-3">
                              <li>Lomba Long-form Article bertemakan “Media VS Kecerdasan Buatan” dan “Keanekaragaman Budaya Nusantara”.</li>
                              <li>Isi karya harus sesuai dengan tema yang telah ditentukan.</li>
                              <li>Karya yang dilombakan bersifat orisinil dan belum pernah dipublikasikan sebelumnya.</li>
                              <li>Karya terdiri dari minimal 1.000 kata.</li>
                              <li>Peserta wajib mencantumkan minimal satu narasumber yang kredibel.</li>
                              <li>Peserta mengumpulkan karya sesuai ketentuan yang berlaku, yaitu menggunakan font Times New Roman 12.</li>
                              <li>Peserta diperbolehkan menyematkan bukti atau foto pendukung tanpa melanggar hak cipta (opsional).</li>
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
    <div class="position-relative bg-red pb-5 mh-85vh">
        <img class="position-absolute object-fit-cover w-100 h-100 motive2" src="{{ asset('/images/daftar-ruangindependen/long-form-article/motive2.png') }}" alt="motive">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
        <section class="d-flex justify-content-center align-items-center flex-column ptop-7">
          <div class="position-relative text-center">
              <img class="mw-100" style="width:55rem; height=1rem; margin-top:3rem;" src="{{ asset('/images/daftar-ruangindependen/long-form-article/bg-judul.png')}}"></img>
              <div class="position-absolute top-50 start-50 translate-middle fs-2 fw-bold text-black text-length">
                <div class="px-5 font-bazinga text-info title5" style="font-size:4rem;">
                    SUBMIT KARYA:
                </div>
                <div class="px-5 mb-5 font-bazinga text-warning title6" style="font-size:5rem;">
                    LONG-FORM ARTICLE
                </div>
              </div>
          </div>
        </section>
        <form class="px-5 ptop-5" action="{{ route('validateLFA') }}" method="POST" enctype="multipart/form-data">
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
              @error('bukti')
                <div class="error-text">
                  {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-4">
              <label class="judul-list text-white"for="pathfilehasilkarya">Hasil karya</label>
              <input type="file" name="pathfilehasilkarya" class="form-control" value={{ @old('pathfilehasilkarya') }}>
              <small class="fs-6 fs-bold text-white">Format penamaan: LFA_Nama (Co: LFA_Novan Gustaf Firyan)<br>
                Format file: PDF</small>
              @error('pathfilehasilkarya')
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
