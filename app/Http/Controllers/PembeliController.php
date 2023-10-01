<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PembeliController extends Controller
{
    public function index(Request $request)
    {
        $pembeli = Pembeli::orderBy('name','asc')->simplePaginate(5);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $pembeli = Pembeli::where('name','LIKE',"%$filterKeyword")->paginate('1');
        }
        return view('pembeli.index',compact('pembeli'));
    }

    public function create()
    {
        return view('pembeli.create');
    }

    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'name' => 'required|max:200',
            'username' => 'required|max:200|unique:users',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:7',
            'no_tlp' => 'required|max:15',
       ]);

       if($validasi->fails())
       {
            return redirect()->route('pembeli.create')->withInput()->withErrors($validasi);
       }

       $simpan['password'] = bcrypt($simpan['password']);
       Pembeli::create($simpan);

       Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
       return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil di tambah');
    }

    public function show(string $id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.show',compact('pembeli'));
    }

    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.edit',compact('pembeli'));
    }

    public function update(Request $request, string $id)
    {
        $pembeli = Pembeli::findOrfail($id);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:200',
            'username'=>'required|max:200|unique:users,username,'.$id,
            'email'=>'required|email|max:150|unique:users,email,'.$id,
            'password'=>'required|min:7',
            'no_tlp'=>'required|max:15',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('pembeli.create')->withInput()->withErrors($validasi);
        }

        if($request->input('password'))
        {
            $data['password'] = bcrypt($data['password']);
        } else 
        {
            $data = Arr::except($data,['password']);
        }
        $pembeli->update($data);
        Alert::success('Berhasil', 'Data Berhasil Diperbarui');
        return redirect()->route('pembeli.index')->with('success', 'Data pembeli berhasil di perbarui');
    }

    public function destroy(string $id)
    {
        $data = Pembeli::findOrfail($id);
        $data->delete();
        return redirect()->route('pembeli.index')->with('Status', 'Data berhasil di hapus');
    }
}