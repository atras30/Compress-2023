@extends('layout.admin.master_layout')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contents')
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="container">
        <h1 class="text-center">Data Pendaftar Talkshow</h1>
        <div class="my-3 d-flex justify-content-end align-items-center gap-3">
          <a href="{{ route('home') }}" class="btn shadow-sm btn-primary">Home</a>
          <a href="{{ route('export') }}" class="btn shadow-sm btn-success">Download Excel</a>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn shadow-sm btn-danger">Logout</button>
          </form>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>Asal Universitas</th>
              <th>Nomer HP(WA) / Email</th>
              <th>Program Studi</th>
              <th>Angkatan</th>
              <th>NIM</th>
              <th>Email Student</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registeredTalkshow as $user)
              <tr>
                <td>{{ $user->namalengkap }}</td>
                <td>{{ $user->universitas }}</td>
                <td>{{ $user->medsos }}</td>
                <td>{{ $user->prodi }}</td>
                <td>{{ $user->angkatan }}</td>
                <td>{{ $user->nim }}</td>
                <td>{{ $user->email }}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
              <th>Nama Lengkap</th>
              <th>Asal Universitas</th>
              <th>Nomer HP(WA) / Email</th>
              <th>Program Studi</th>
              <th>Angkatan</th>
              <th>NIM</th>
              <th>Email Student</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <h1 class="text-center">Data Pendaftar Workshop</h1>
        <div class="my-3 d-flex justify-content-end align-items-center gap-3">
          <a href="{{ route('home') }}" class="btn shadow-sm btn-primary">Home</a>
          <a href="{{ route('export') }}" class="btn shadow-sm btn-success">Download Excel</a>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn shadow-sm btn-danger">Logout</button>
          </form>
        </div>
        <table id="example2" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>Asal Universitas</th>
              <th>Nomer HP(WA) / Email</th>
              <th>Program Studi</th>
              <th>Angkatan</th>
              <th>NIM</th>
              <th>Email Student</th>
              <th>Tau Dari Mana</th>
              <th>Alasan Ikut</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registeredWorkshop as $user)
              <tr>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->asal_universitas }}</td>
                <td>{{ $user->line_id_or_whatsapp_number }}</td>
                <td>{{ $user->major }}</td>
                <td>{{ $user->angkatan }}</td>
                <td>{{ $user->nim }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->know_commpress_from }}</td>
                <td>{{ $user->alasan }}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Nama Lengkap</th>
              <th>Asal Universitas</th>
              <th>Nomer HP(WA) / Email</th>
              <th>Program Studi</th>
              <th>Angkatan</th>
              <th>NIM</th>
              <th>Email Student</th>
              <th>Tau Dari Mana</th>
              <th>Alasan Ikut</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev btn btn-dark" style="width:8rem; "type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
    <span class="visually-hidden btn btn-dark">Previous</span>
  </button>
  <button class="carousel-control-next btn btn-dark" style="width:8rem;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
    <span class="visually-hidden btn btn-dark">Next</span>
  </button>
</div>

  <!--<div class="container">
    <h1 class="text-center">Data Pendaftar Talkshow</h1>
    <div class="my-3 d-flex justify-content-end align-items-center gap-3">
      <a href="{{ route('home') }}" class="btn shadow-sm btn-primary">Home</a>
      <a href="{{ route('export') }}" class="btn shadow-sm btn-success">Download Excel</a>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn shadow-sm btn-danger">Logout</button>
      </form>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Nama Lengkap</th>
          <th>Asal Universitas</th>
          <th>Nomer HP(WA) / Email</th>
          <th>Program Studi</th>
          <th>Angkatan</th>
          <th>NIM</th>
          <th>Email Student</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($registeredTalkshow as $user)
          <tr>
            <td>{{ $user->namalengkap }}</td>
            <td>{{ $user->universitas }}</td>
            <td>{{ $user->medsos }}</td>
            <td>{{ $user->prodi }}</td>
            <td>{{ $user->angkatan }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->email }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
      <tr>
          <th>Nama Lengkap</th>
          <th>Asal Universitas</th>
          <th>Nomer HP(WA) / Email</th>
          <th>Program Studi</th>
          <th>Angkatan</th>
          <th>NIM</th>
          <th>Email Student</th>
        </tr>
      </tfoot>
    </table>
  </div>-->
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });

    $(document).ready(function() {
      $('#example2').DataTable();
    });
  </script>
@endsection
