@extends('admin.kebun_master')

@section('title')
    Tabel Produk
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <a target="_blank" href = "{{route('cetak_produk')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Gambar Produk</th>
                            <th>Stok Produk</th>
                            <th>Harga Produk</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $row)
                            <tr>
                                <td>{{ $loop->iteration + ($produk ->perpage() * ($produk->currentPage()-1))}}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->jenis }}</td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $row->gambar }}</p>
                                </td>
                                <td>{{ $row->stok }}</td>
                                <td>Rp. {{ $row->harga }}</td>
                                <td>{{ $row->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produk->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection