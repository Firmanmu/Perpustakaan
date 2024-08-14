
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERPUSTAKAAN FIRMAN</title>
</head>
<body>
    <h3 class="text-center p-3">Daftar Buku-Buku </h3>                  
  
    {{-- table --}}
    <table class="container">
        <a href="/tambahbuku" class="btn btn-success">Tambahkan</a>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-primary" role="alert">
           {{ $message }}
          </div>
          @endif
          </div>
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
              @foreach ($data as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->judul }}</td>
                {{-- <td>{{ $row->slug }}</td> --}}
                <td>{{ $row->kategori}}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->penerbit }}</td>
                {{-- <td>{{ $row->berkas_sampul }}</td> --}}
                <td><button type="button" class="btn btn-primary">Ubah</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
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