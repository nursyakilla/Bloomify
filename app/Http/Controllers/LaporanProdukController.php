<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'DESC')->simplePaginate(5);
        return view('laprok.index', compact('produk'));
    }

    //ini method untuk mencetak laporan tabel produk
    public function cetak_produk()
    {
        $R_produk = Produk::orderBy('created_at', 'DESC')->get();
        $pdf = Pdf::loadview('laprok.laprok_pdf', compact('R_produk'));
        return $pdf->stream();
    }
}