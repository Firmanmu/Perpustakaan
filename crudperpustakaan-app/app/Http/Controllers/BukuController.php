<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

// use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Buku::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Buku::paginate(5);
        }
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

    public function exportpdf(){
        $data = Buku::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('databuku-pdf');
        return $pdf->download('databuku.pdf');
    }
}

 



    //     foto=sampul
    //     datapegawai=Library
    //     tambahdata=tambah
    //     datapegawai-pdf = databuku-pdf
    //     employecntroller=Bukucontroller
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku