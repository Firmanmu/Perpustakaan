<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}
</style>
</head>
<body>

<h1>Daftar Buku Perpustakaan</h1>

<table>
  <tr>
    <th>Nomor</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Penulis</th>
  </tr>
  @php
      $no = 1;
  @endphp
  @foreach ($data as $row)
  <tr>
    <td>{{ $no++}}</td>
    <td>{{ $row->judul }}</td>
    <td>{{ $row->kategori}}</td>
    <td>{{ $row->penulis }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>





{{-- //     foto=sampul
//     datapegawai=Library
//     tambahdata=tambah
//      datapegawai-pdf = databuku-pdf
//     employecntroller=Bukucontroller
//     tambahpegawai=tambahbuku
//     pegawai=Buku  --}}