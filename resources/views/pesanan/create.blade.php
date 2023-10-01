@extends('admin.kebun_master')

@section('title')
Buat Pesanan
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buat Pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pesanan.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Pembeli</label>
                                <select class="form-control" name="id_pembeli">
                                    @foreach ($pembelis as $pembeli)
                                    <option value="{{ $pembeli->id }}">{{ $pembeli->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Nama Produk</label>
                                <select class="form-control" name="id_produk">
                                    @foreach ($produks as $produk)
                                        <option value="{{ $produk->id }}">{{ $produk->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 label-control">Jumlah Unit</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Jumlah Unit"
                                        name="qty" value="{{ old('qty') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Alamat Pemesan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Alamat"
                                        name="alamat" value="{{ old('alamat') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div> --}}
                <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('pesanan.index') }}" class="btn btn-danger float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection