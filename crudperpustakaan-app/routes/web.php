<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku');

Route::get('/tambahbuku', [BukuController::class, 'tambahbuku'])->name('tambahbuku');

Route::post('/insertdata', [BukuController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [BukuController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}', [BukuController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [BukuController::class, 'delete'])->name('delete');


    //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku