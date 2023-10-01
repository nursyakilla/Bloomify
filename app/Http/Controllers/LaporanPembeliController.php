<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanPembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::orderBy('created_at', 'DESC')->simplePaginate(5);
        return view('lali.index', compact('pembeli'));
    }

    //ini method untuk mencetak laporan tabel pembeli
    public function cetak_pembeli()
    {
        $R_pembeli = Pembeli::orderBy('created_at', 'DESC')->get();
        $pdf = Pdf::loadview('lali.lali_pdf', compact('R_pembeli'));
        return $pdf->stream();
    }
}
