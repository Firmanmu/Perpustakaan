{{-- 
//     datapegawai=Library
//     tambahdata=tambah
//     employe=Buku
//     tambahpegawai=tambahbuku
// --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH DATA</title>
</head>
<body>

    <h3 class="text-center p-3">Tambah Data Buku</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
            <div class="card">
                <div class="card-body">
                  <form action="{{ url('/insertdata') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" >Judul</label>
                        <input type="text" name="judul" id="judul">
                      </div>
                      <div class="mb-3">
                        <label for="kategori" >Kategori</label>
                        <input type="text" name="kategori" id="kategori"></input>
                      </div>
                      <div class="mb-3">
                        <label for="penulis" >Penulis</label>
                        <input type="text" name="penulis" id="penulis"></input>
                      </div>
                      <div class="mb-3">
                        <label for="penerbit" >Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit"></input>
                      </div>
                      <input class="btn btn-primary float-end" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>