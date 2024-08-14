<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku');

Route::get('/tambahbuku', [BukuController::class, 'tambahbuku'])->name('tambahbuku');

Route::post('/insertdata', [BukuController::class, 'insertdata'])->name('insertdata');


    //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku