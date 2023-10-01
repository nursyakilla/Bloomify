<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanUserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at','DESC')->simplePaginate(5);
        return view('laser.index',compact('user'));
    }

    public function cetak_user()
    {
       $R_user = User::orderBy('created_at','DESC')->get();
       $pdf = Pdf::loadview('laser.laser_pdf',compact('R_user'));
       return $pdf->stream();
    }
}
