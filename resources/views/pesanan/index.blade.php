@extends('admin.kebun_master')

@section('title')
    Selamat Datang di Halaman Pesanan
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                {{--  fungsi add atau tambah --}}
                <div class="box-header with-border">
                    @if (Request::get('keyword'))
                        <a class="btn btn-app bg-info"href="{{ route('pesanan.index') }}">
                            <i class="fas fa-recycle"></i> Hapus</a>
                    @else
                        <a class="btn btn-app bg-success"href="{{ route('pesanan.create') }}">
                            <i class="fas fa-plus"></i> Tambah</a>
                    @endif
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                        <form method="get" action="{{route('pesanan.index')}}">
                            <label for="keyword" class="col-sm-2 control-label">Cari Pesanan</label>
                            <div class="col-md-4"> 
                                <div class="input-group">
                                 <input type="search" class="form-control form-control-lg" id="keyword" name="keyword" value="{{Request::get('name')}}">
                                 <div class="input-group-append">
                                     <button class="btn btn-lg btn-default">
                                         <i class="fa fa-search"></i>
                                     </button>
                                 </div>
                                </div>
                             </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if (Request::get('keyword'))
                    <div class="alert alert-info alert-block">
                        Hasil pencarian data pesanan dengan keyword: <b>{{ Request::get('keyword') }}</b>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Unit</th>
                            <th>Total Harga</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $row)
                            <tr>
                                <td>{{ $loop->iteration + $pesanan->perpage() * ($pesanan->currentPage() - 1) }}</td>
                                <td>{{ $row->pembeli->name }}</td>
                                <td>{{ $row->produk->name }}</td>
                                <td>{{ $row->qty }}</td>
                                <td>Rp. {{ $row->toga }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>
                                    <form method="POST" action="{{ route('pesanan.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('Apakah anda yakin akan menghapus data pesanan, {{ $row->name }}?')">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-info" href="{{ route('pesanan.edit', [$row->id]) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="btn bt-info" href="{{ route('pesanan.edit', [$row->id]) }}"></a>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a class="btn btn-warning" href="{{ route('pesanan.show', [$row->id]) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pesanan->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection