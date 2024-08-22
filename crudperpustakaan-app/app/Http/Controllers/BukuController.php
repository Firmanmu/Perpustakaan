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
        $data = Buku::create($request->all());
        if($request->hasFile('sampul')){
            $request->file('sampul')->move('sampulbuku/', $request->file('sampul')->getClientOriginalName());
            $data->sampul = $request->file('sampul')->getClientOriginalName();
            $data->save();
        }
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

    public function delete($id){
        $data = Buku::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data Berhasil Dihapus!');
    }

}

    //     foto=sampul
    //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku