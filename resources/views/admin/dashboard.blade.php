@extends('layout.admin.master_layout')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contents')
  <div class="container">
    <h1 class="text-center">Data Pendaftaran Mahasiswa</h1>
    <div class="my-3">
      <button class="btn btn-success">Download Excel</button>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Nim</th>
          <th>Divisi 1</th>
          <th>Divisi 2</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($registeredUsers as $user)
          <tr>
            <td>{{ $user->fullname }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->divisi1 }}</td>
            <td>{{ $user->divisi2 }}</td>
            <td><button class="btn btn-primary">View More</button></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Nim</th>
          <th>Divisi 1</th>
          <th>Divisi 2</th>
          <th>Action</th>
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
