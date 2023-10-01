<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        $pesanan = Pesanan::orderBy('id', 'asc')->with('produk', 'pembeli')->simplePaginate(5);

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            Pesanan::whereHas('produk', function ($query) use ($filterKeyword) {
                $query->where('name', "%$filterKeyword");
            })->with('produk', 'pembeli')->paginate(1);
        }

        return view('pesanan.index', compact('pesanan'));
    }

    public function create()
    {
        $produks = Produk::all();
        $pembelis = Pembeli::all();

        // return $produks;
        // return $pembelis;

        return view('pesanan.create', compact('produks', 'pembelis'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'id_pembeli' => 'required',
            'id_produk' => 'required',
            'qty' => 'required|numeric',
            'toga' => 'numeric',
            'alamat'=>'required|max:200',
        ]);
        if ($validator->fails()) {
            return redirect()->route('pesanan.create')->withInput()->withErrors($validator);
        }

        $produk = Produk::find($request->id_produk);
        $input['toga'] = $produk->harga * $request->qty;

        Pesanan::create($input);
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambah');
    }

    public function show(string $id)
    {
        $pesanan = Pesanan::findOrfail($id);
        $pesanan->load('produk', 'pembeli');

        return view('pesanan.show', compact('pesanan'));
    }

    public function edit(string $id)
    {
        $pesanan = Pesanan::findOrfail($id);
        $pesanan->load('produk', 'pembeli');

        $produks = Produk::all();
        $pembelis = Pembeli::all();

        // return compact('pesanan', 'pembelis', 'users');

        return view('pesanan.edit', compact('pesanan', 'produks', 'pembelis'));
    }

    public function update(Request $request, string $id)
    {

        // ini perintah untuk update data
        $pesanan = Pesanan::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'id_pembeli' => 'required',
            'id_produk' => 'required',
            'qty' => 'required|numeric',
            'toga' => 'numeric',
            'alamat'=>'required',
        ]);

        //ini perintah untuk cek validasi
        if ($validator->fails()) {
            return redirect()->route('pesanan.edit', [$id])->withInput()->withErrors($validator);
        }

        $produk = Produk::find($request->id_produk);
        $input['toga'] = $produk->harga * $request->qty;

        $pesanan->update($input);
        // alert()->success('Edit','Data Sudah Di Edit');
        Alert::success('Berhasil', 'Data Berhasil Diperbarui');
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Pesanan::findOrfail($id);
        $data->delete();
        return redirect()->route('pesanan.index')->with('status', 'pesanan berhasil di hapus');
    }
}
