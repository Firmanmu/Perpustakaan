<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'judul' => 'Panduan Sakip',
            'slug' => 'panduan-sakip',
            'kategori' => 'Edukasi',
            'penulis' => 'Firman',
            'penerbit' => 'Grasindo',
            'berkas_sampul' =>'sampul panduan',
        ]);
    }
}


    //     datapegawai=Library
    //     tambahdata=tambah
    //     employe=Buku
    //     tambahpegawai=tambahbuku
    //     pegawai=Buku