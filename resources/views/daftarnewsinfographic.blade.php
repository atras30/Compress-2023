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
      background-color: #38448F;
    }

    .bg-blue2{
      background-color: #3395A9;
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

    .ptop-4 {
      padding-top: 3.4rem;
    }

    .pbot-4 {
      padding-bottom: 3.4rem;
    }

    .ptop-7 {
      padding-top: 2rem;
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
        max-width: 37.95rem;
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
        <img class="position-absolute object-fit-cover w-100 h-100 motive" src="{{ asset('/images/daftar-ruangindependen/news-infographic/dots.png') }}" alt="background motive">
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
                    News Infographic
                </div>
                <div class="hero-title3 px-5 mb-2 font-bazinga text-white">
                    TEMA:
                </div>
                <div class="hero-title4 px-5 mb-5 font-bazinga text-white">
                    LIFESTYLE 5.0
                </div>
                </section>
                <section>
                <div class="container px-5 mb-5">
                    <div class="row">
                      <div class="col">
                           <div class="row list fs-5 mb-5">
                            <u class="judul-list text-black px-4 ptop-4">Persyaratan Umum</u>
                            <ol class="px-5 fw-bold pbot-4">
                              <li>Lomba bersifat individu atau perorangan.</li>
                              <li>Peserta merupakan mahasiswa aktif seluruh Indonesia (S1).</li>
                              <li>Isi karya tidak boleh mengandung unsur SARA, provokatif, pornografi, kata kasar, penghinaan dan menjatuhkan instansi, serta lembaga serta pihak lain.</li>
                              <li>Peserta wajib mengumpulkan karya sesuai tenggat waktu yang telah ditentukan melalui website resmi commpress.umn.ac.id.</li>
                              <li>Format pengumpulan file berupa PDF.</li>
                            </ol>
                           </div>
                           <div class="row list fs-5 mb-5 ptop-1">
                            <u class="judul-list text-black px-4 ptop-4">Penilaian</u>
                              <ol class="px-5 fw-bold pbot-4">
                                <li>Kesesuaian isi karya dengan tema.</li>
                                <li>Isi dalam karya.</li>
                                <li>Kreativitas dalam pemilihan judul dan isi yang menarik.</li>
                                <li>Kesesuaian dengan format ketentuan lomba.</li>
                              </ol>
                           </div>
                      </div>
                      <div class="col">
                        <div class="row list2 fs-5">
                        <u class="judul-list text-black px-4 ptop-3">Persyaratan Khusus</u>
                            <ol class="px-5 fw-bold pbot-3">
                              <li>Lomba News Infographic bertemakan “Lifestyle 5.0”.</li>
                              <li>Isi karya harus sesuai dengan tema yang telah ditentukan.</li>
                              <li>Karya yang dilombakan bersifat orisinil dan belum pernah dipublikasikan sebelumnya.</li>
                              <li>Ukuran kertas wajib berukuran A3.</li>
                              <li>Isi karya tidak memiliki batas kata, tetapi dalam deskripsi maksimal memiliki 20 kata.</li>
                              <li>Peserta wajib mencantumkan sumber yang diambil.</li>
                              <li>Sumber sekunder juga harus dicantumkan dalam produk jurnalistiknya.</li>
                              <li>Pastikan kualitas gambar dan tulisan terlihat jelas.</li>
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
    <div class="position-relative bg-blue2 pb-5 mh-85vh">
        <img class="position-absolute object-fit-cover w-100 h-100 motive2" src="{{ asset('/images/daftar-ruangindependen/news-infographic/flakes.png') }}" alt="motive">
        <img class="position-absolute bottom-0 w-100 h-2" style="z-index: 1" src="{{ asset('/images/ruangindependen/base/bar-bottom-white.svg') }}" alt="bottom">

        <div class="position-relative">
        <section class="d-flex justify-content-center align-items-center flex-column ptop-7">
          <div class="position-relative text-center">
              <img class="mw-100" style="width:54rem; padding-bottom:3rem;"src="{{ asset('/images/daftar-ruangindependen/news-infographic/bg-judul.png')}}"></img>
              <div class="position-absolute top-50 start-50 translate-middle fs-2 fw-bold text-black text-length">
                <div class="px-5 font-bazinga text-info" style="font-size:4rem;">
                    SUBMIT KARYA:
                </div>
                <div class="px-5 mb-5 font-bazinga text-warning" style="font-size:5rem;">
                    News Infographic
                </div>
              </div>
          </div>
        </section>
        <form class="px-5" action="{{ route('validateNI') }}" method="POST" enctype="multipart/form-data">
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
              <small class="fs-6 fs-bold text-white">Format penamaan: NI_Nama (Co: NI_Novan Gustaf Firyan)<br>
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
