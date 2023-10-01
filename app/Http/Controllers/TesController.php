<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    //menampilkan isi session
    public function tampilkanSession(Request $request) {
        if ($request->session()->has('nama')){
            echo $request->session()->get('nama');
            echo $request->session()->get('kelas');
            echo $request->session()->get('alamat');
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    //membuat session
    public function buatSession(Request $request) {
    $request->session()->put('nama', 'Nazwa-');
    $request->session()->put('kelas', 'XII RPL-');
    $request->session()->put('alamat', 'Cipinang Muara');
        echo "Data telah ditambahkan ke dalam session.";
        }
    
    //menghapus session
    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        echo "Data telah di hapus dari session.";
    }
}
