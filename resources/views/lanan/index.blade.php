@extends('admin.kebun_master')

@section('title')
    Tabel Pesanan
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <a target="_blank" href = "{{route('cetak_pesanan')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Unit</th>
                            <th>Total Harga</th>
                            <th>Alamat Pengirim</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $row)
                            <tr>
                                <td>{{ $loop->iteration + ($pesanan->perpage() * ($pesanan->currentPage()-1))}}</td>
                                <td>{{ $row->pembeli->name }}</td>
                                <td>{{ $row->produk->name }}</td>
                                <td>{{ $row->qty }}</td>
                                <td>Rp. {{ $row->toga }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pesanan->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection