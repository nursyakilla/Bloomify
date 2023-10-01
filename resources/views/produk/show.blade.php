@extends('admin.kebun_master')
@section('title')
    Tampilan Data Produk
@endsection

@section('admin.index')
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <a class="btn btn-app bg-info"href="{{ route('produk.index') }}">
                        <i class="fas fa-angle-double-left"></i> Back</a>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama Produk</td>
                            <td>:</td>
                            <td>{{ $produk->name }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Produk</td>
                            <td>:</td>
                            <td>{{ $produk->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Gambar Produk</td>
                            <td>:</td>
                            <td>
                                <img class="img-thumbnail" src="{{ asset('uploads/' . $produk->gambar) }}" width="135px">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi Produk</td>
                            <td>:</td>
                            <td>{{ $produk->deskripsi }}</td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td>:</td>
                            <td>{{ $produk->stok }}</td>
                        </tr>
                        <tr>
                            <td>Harga Produk</td>
                            <td>:</td>
                            <td>Rp. {{ $produk->harga }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>
    @endsection