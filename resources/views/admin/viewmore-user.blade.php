@extends('layout.admin.master_layout')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contents')
  <div class="container">
    <h1 class="text-center">Informasi Lengkap Mahasiswa</h1>
    <table class="table table-bordered table-hover" style="width:100%">
          <thead>
            <tr>
            <th>Nama Lengkap</th>
            <td>{{$User->fullname}}</td>
            </tr>
            <tr>
            <th>NIM</th>
            <td>{{$User->nim}}</td>
            </tr>
            <tr>
            <th>Angkatan</th>
            <td>{{$User->angkatan}}</td>
            </tr>
            <tr>
            <th>Prodi</th>
            <td>{{$User->prodi}}</td>
            </tr>
            <tr>
            <th>Email</th>
            <td>{{$User->email}}</td>
            </tr>
            <tr>
            <th>Nomer Hp</th>
            <td>{{$User->noHp}}</td>
            </tr>
            <tr>
            <th>ID Line</th>
            <td>{{$User->idLine}}</td>
            </tr>
            <tr>
            <th>Instagram</th>
            <td>{{$User->instagram}}</td>
            </tr>
            <tr>
            <th>Pilihan Divisi 1</th>
            <td>{{$User->divisi1}}</td>
            </tr>
            <tr>
            <th>Pilihan Divisi 2</th>
            <td>{{$User->divisi2}}</td>
            </tr>
            <tr>
            <th>Alasan Divisi 1</th>
            <td>{{$User->alasandiv1}}</td>
            </tr>
            <tr>
            <th>Alasan Divisi 2</th>
            <td>{{$User->alasandiv2}}</td>
            </tr>
            <tr>
            <th>Pengalaman</th>
            <td>{{$User->pengalaman}}</td>
            </tr>
            <tr>
            <th>Kesibukan</th>
            <td>{{$User->kesibukan}}</td>
            </tr>
            
            <tr>
            <th>Portofolio</th>
            <td>{{$User->portofolio}}</td>
            </tr>
          </thead>
        </table>
  </div>
@endsection


@section('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
@endsection

