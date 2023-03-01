@extends("layout.user.master_layout")

@section('styles')
<style>
  .error-text{
    font-size: 12px;
    color:red;
  }
</style>
@endsection

@section("contents")
<div class="container">
  <h1>PENDAFTARAN PANITIA COMMPRESS 2023</h1>
  <p>Data ini hanya akan digunakan untuk tim COMMPRESS 2022 menghubungi kalian. Diisi dengan teliti, ya! Tidak perlu khawatir, COMMPRESS 2023 akan menjaga kerahasiaan data kamu!</p>
  <form action="{{ route('recruitment.validate') }}" method="POST">
    @csrf
    <div class="mb-2 ">
      <label for="fullname">Nama Lengkap</label>
      <input type="text" name="fullname" class="form-control" value={{ @old('fullname') }}>
      @error('fullname')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="nickname">Nama Panggilan</label>
      <input type="text" name="nickname" class="form-control" value={{ @old('nickname') }}>
      @error('nickname')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="angkatan">Angkatan</label>
      <select class="form-select" name="angkatan" placeholder="Angkatan">
        <option @if(old('angkatan') === "2020") selected @endif value="2020">2020</option>
        <option @if(old('angkatan') === "2021") selected @endif value="2021">2021</option>
        <option @if(old('angkatan') === "2022") selected @endif value="2022">2022</option>
      </select>
      @error('angkatan')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="nim">NIM</label>
      <input type="text" name="nim" class="form-control" value={{ @old('nim') }}>
      @error('nim')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="prodi">Program Studi</label>
      <select class="form-select" name="prodi" placeholder="Jurusan">
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
      @error('prodi')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="tanggallahir">Tanggal lahir</label>
      <input type="date" name="tanggallahir" class="form-control" value={{ @old('tanggallahir') }}>
      @error('tanggallahir')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="email">Email Student</label>
      <input type="email" name="email" class="form-control" value={{ @old('email') }}>
      @error('email')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="noHp">Nomor HP Aktif</label>
      <input type="text" name="noHp" class="form-control" value={{ @old('noHp') }}>
      @error('noHp')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="idLine">ID Line</label><br>
      <small>(Pastikan bahwa ejaannya benar dan telah menonaktifkan fitur 'FILTER MESSAGE')</small>
      <input type="text" name="idLine" class="form-control" value={{ @old('idLine') }}>
      @error('idLine')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="instagram">Instagram</label>
      <input type="text" name="instagram" class="form-control" value={{ @old('instagram') }}>
      @error('instagram')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="divisi1">TIM (pilihan 1)</label>
      <select class="form-select" name="divisi1">
        <option @if(old('divisi1') === 'Acara') selected @endif value="Acara">Acara</option>
        <option @if(old('divisi1') === "Lomba") selected @endif value="Lomba">Lomba</option>
        <option @if(old('divisi1') === "Fresh Money") selected @endif value="Fresh Money">Fresh Money</option>
        <option @if(old('divisi1') === "Sponsor") selected @endif value="Sponsor">Sponsor</option>
        <option @if(old('divisi1') === "Publikasi") selected @endif value="Publikasi">Publikasi</option>
        <option @if(old('divisi1') === "Visual") selected @endif value="Visual">Visual</option>
        <option @if(old('divisi1') === "Perlengkapan") selected @endif value="Perlengkapan">Perlengkapan</option>
        <option @if(old('divisi1') === "Media Relation") selected @endif value="Media Relation">Media Relation</option>
        <option @if(old('divisi1') === "Dokumentasi Foto") selected @endif value="Dokumentasi Foto">Dokumentasi Foto</option>
        <option @if(old('divisi1') === "Dokumentasi Video") selected @endif value="Dokumentasi Video">Dokumentasi Video</option>
        <option @if(old('divisi1') === "Editor Foto") selected @endif value="Editor Foto">Editor Foto</option>
        <option @if(old('divisi1') === "Editor Video") selected @endif value="Editor Video">Editor Video</option>
      </select>
      @error('divisi1')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="alasandiv1">Alasan memilih TIM pertama</label>
      <textarea type="text" name="alasandiv1" class="form-control" rows="3">{{ old('alasandiv1') }}</textarea>
      @error('alasandiv1')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="divisi2">TIM (pilihan 2)</label>
      <select class="form-select" name="divisi2">
        <option @if(old('divisi2') === 'Acara') selected @endif value="Acara">Acara</option>
        <option @if(old('divisi2') === "Lomba") selected @endif value="Lomba">Lomba</option>
        <option @if(old('divisi2') === "Fresh Money") selected @endif value="Fresh Money">Fresh Money</option>
        <option @if(old('divisi2') === "Sponsor") selected @endif value="Sponsor">Sponsor</option>
        <option @if(old('divisi2') === "Publikasi") selected @endif value="Publikasi">Publikasi</option>
        <option @if(old('divisi2') === "Visual") selected @endif value="Visual">Visual</option>
        <option @if(old('divisi2') === "Perlengkapan") selected @endif value="Perlengkapan">Perlengkapan</option>
        <option @if(old('divisi2') === "Media Relation") selected @endif value="Media Relation">Media Relation</option>
        <option @if(old('divisi2') === "Dokumentasi Foto") selected @endif value="Dokumentasi Foto">Dokumentasi Foto</option>
        <option @if(old('divisi2') === "Dokumentasi Video") selected @endif value="Dokumentasi Video">Dokumentasi Video</option>
        <option @if(old('divisi2') === "Editor Foto") selected @endif value="Editor Foto">Editor Foto</option>
        <option @if(old('divisi2') === "Editor Video") selected @endif value="Editor Video">Editor Video</option>
      </select>
      @error('divisi2')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="alasandiv2">Alasan memilih TIM kedua</label>
      <textarea type="text" name="alasandiv2" class="form-control" rows="3">{{ old('alasandiv2') }}</textarea>
      @error('alasandiv2')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="pengalaman">Apa saja pengalaman organisasi kamu?</label>
      <textarea type="text" name="pengalaman" class="form-control" rows="3">{{ old('pengalaman') }}</textarea>
      @error('pengalaman')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="kesibukan">Apa saja kesibukan kamu?</label><br>
      <small>(rentang April hingga September 2023 ini)</small>
      <textarea type="text" name="kesibukan" class="form-control" rows="3">{{ old('kesibukan') }}</textarea>
      @error('kesibukan')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="alasan-masuk-commpress">Mengapa kamu mendaftar di COMMPRESS 2023?</label>
      <textarea type="text" name="alasan-masuk-commpress" class="form-control" rows="3">{{ old('alasan-masuk-commpress') }}</textarea>
      @error('alasan-masuk-commpress')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2 ">
      <label for="portofolio">Bagi kamu yang memilih Tim Visual & Dokumentasi (Foto, Video, dan Editor), silakan mengirimkan tautan portofolio kamu yaa!</label><br>
      <small>Bagi kamu yang mendaftar di luar kedua divisi di atas, harap mengisi dengan "-".</small>
      <div class="border border-primary p-3 rounded">
        <p>KETENTUAN PORTOFOLIO</p>
        <p>1. TIM VISUAL: </p>
        <ul>
          <li>3 desain bertemakan "pop art" atau "komik</li>
          <li>nilai tambah untuk kamu yang bisa membuat doodle art</li>
        </ul>
        <p>2. TIM DOKUMENTASI:</p>
        <ul>
          <li>FOTO: foto yang mengandung unsur EDFAT (Entire, Detail, Framing, Angle, Time), masing-masing unsur sebanyak 1 foto sehingga total portofolio yang harus dikumpulkan berjumlah 5 foto.</li>
          <li>VIDEO: video berdurasi maksimal 2 menit dengan mengandung unsur visual teks, permainan warna, dan gaya pengambilan video (peserta dapat memilih 2 unsur)</li>
          <li>EDITOR: edited video dengan durasi maksimal 5 menit.</li>
        </ul>
      </div>
      <input type="text" name="portofolio" class="form-control" rows="3" value={{ @old('portofolio') }}>
      @error('portofolio')
        <div class="error-text">
          {{ $message }}
        </div>
      @enderror
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</div>
@endsection