<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERPUSTAKAAN FIRMAN</title>
</head>
<body>
  {{-- notifikasi --}}
  @if ($message = Session::get('success'))
  <div class="alert alert-primary" role="alert">
   {{ $message }}
  </div>
  @endif
{{-- endNotif --}}

    {{-- navbar --}}
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Daftar Buku-Buku</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  {{-- EndNavbar --}}

    {{-- table --}}
    <div class="container">
        <a href="/tambahbuku" class="btn btn-success">Tambahkan</a>
        <div>
          
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="row">Nomor</th>
                <th scope="row">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach ($data as $row)
              <tr>
                <td>{{ $no++}}</td>
                <td>{{ $row->judul }}</td>
                {{-- <td>{{ $row->slug }}</td> --}}
                <td>{{ $row->kategori}}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->penerbit }}</td>
                {{-- <td>{{ $row->berkas_sampul }}</td> --}}
                <td>
                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Ubah</a>
                    <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </div>
        </table>
    </div>
    {{-- table --}}
   
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


    {{-- //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku --}}