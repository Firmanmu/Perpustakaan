<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERPUSTAKAAN FIRMAN</title>
</head>
<body>
  {{-- pesan notifikasi --}}
  @if ($message = Session::get('success'))
  <div class="alert alert-primary" role="alert">
   {{ $message }}
  </div>
  @endif
{{-- endNotif --}}

    {{-- navbar --}}
    <div class="container">
      <h1 class="text-center p-4">Daftar Buku-Buku</h1>
    </div>
  {{-- EndNavbar --}}

    {{-- table --}}
    
    <div class="container">
    
        <a href="/tambahbuku" class="btn btn-success">Tambahkan</a> 
        <div class="col-4 float-end mb-3">
          <input class="form-control" type="text" placeholder="mencari buku" aria-label="default input example">
        </div>
        <div>
          

          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="row">Nomor</th>
                <th scope="row">Judul</th>
                <th scope="row">Sampul</th>
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
              @foreach ($data as $index => $row)
              <tr>
                <td>{{ $index + $data->firstItem() }}</td>
                <td>{{ $row->judul }}</td>
                <td>
                  <img src="{{ asset('sampulbuku/'.$row->sampul) }}" style="width:40px;">
                </td>
                <td>{{ $row->kategori}}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>
                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Ubah</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-judul="{{ $row->judul }}">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </div>
        </table>
        {{ $data->links() }}
    </div>
    {{-- End table --}}
   
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

{{-- konfirmasi delete --}}
<script>
    $('.delete').click(function(){
      var bukuid = $(this).attr('data-id');
      var judul = $(this).attr('data-judul');
      swal({
          title: "Yakin ?",
          text: "Anda Akan Menghapus Buku "+judul+"",
          icon: "warning",
          buttons: true,
          dangerMode: true,
            })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/delete/"+bukuid+""
         swal("Buku Berhasil Di Hapus!", {
              icon: "success",
            });
          } else {
            swal("Buku Tidak Jadi Dihapus!");
          }
      });
    });
</script>
{{-- end konfir delete --}}

</html>

{{-- 
//     datapegawai=Library
//     tambahdata=tambah
//     employe=Buku
//     tambahpegawai=tambahbuku
//     pegawai=Buku
//     foto=sampul
//     pegawaiid=Bukuid --}}