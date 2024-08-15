<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $data = Buku::all();
        return view('library', compact('data'));
    }

    public function tambahbuku(){
        return view('tambah');
    }

    public function insertdata(Request $request){
        Buku::create($request->all());
        return redirect()->route('buku')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Buku::find($id);
        return view('tampilkan', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Buku::find($id);
        $data->update($request->all());
        return redirect()->route('buku')->with('success', 'Data Berhasil Di Ubah');
    }

}


    //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku