@extends('admin.kebun_master')
@section('title')
Tampilan Data Pesanan
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('pesanan.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                    <td>Nama User</td>
                    <td>:</td>
                    <td>{{ $pesanan->user->name}}</td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td>{{ $pesanan->produk->name}}</td>
                </tr>
                <tr>
                    <td>Jumlah Unit</td>
                    <td>:</td>
                    <td>{{ $pesanan->qty }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>Rp. {{ $pesanan->toga }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $pesanan->alamat }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection