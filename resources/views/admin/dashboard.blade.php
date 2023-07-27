@extends('layout.admin.master_layout')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contents')
  <div class="container">
    <h1 class="text-center">Data Pendaftaran Mahasiswa</h1>
    <div class="my-3 d-flex justify-content-end align-items-center gap-3">
      <a href="{{ route('export') }}" class="btn shadow-sm btn-success">Download Excel</a>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn shadow-sm btn-danger">Logout</button>
      </form>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Asal Universitas</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Line/Whatsapp</th>
          <th>Jenis Karya</th>
          <th>Bukti Bayar</th>
          <th>Instagram</th>
          <th>Link Karya IG</th>
          <th>Hasil Karya PDF</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($registeredUsers as $user)
          <tr>
            <td>{{ $user->namalengkap }}</td>
            <td>{{ $user->universitas }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->medsos }}</td>
            <td>{{ $user->type }}</td>
            <td>{{ $user->bukti }}</td>
            <td>{{ $user->instagram }}</td>
            <td>{{ $user->linkkaryaig }}</td>
            <td>{{ $user->pathfilehasilkarya }}</td>

            <!--<td><a id="btn-view" class="btn btn-primary" data-id="{{ $user->id }}" href="dashboard/{{ $user->id }}">View More</a></td>-->
          </tr>
        @endforeach
      </tbody>
      <tfoot>
      <tr>
          <th>Name</th>
          <th>Asal Universitas</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Line/Whatsapp</th>
          <th>Jenis Karya</th>
          <th>Bukti Bayar</th>
          <th>Instagram</th>
          <th>Link Karya IG</th>
          <th>Hasil Karya PDF</th>
        </tr>
      </tfoot>
    </table>
  </div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
@endsection
