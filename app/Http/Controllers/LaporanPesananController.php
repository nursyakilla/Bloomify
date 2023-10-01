<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanPesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::orderBy('created_at', 'DESC')->simplePaginate(5);
        return view('lanan.index', compact('pesanan'));
    }

    //ini method untuk mencetak laporan tabel dkarya
    public function cetak_pesanan()
    {
        $R_pesanan = Pesanan::orderBy('created_at', 'DESC')->get();
        $pdf = Pdf::loadview('lanan.lanan_pdf', compact('R_pesanan'));
        return $pdf->stream();
    }
}
