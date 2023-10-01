@extends('admin.kebun_master')

@section('title')
    Buat Produk
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buat Produk</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('produk.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama Produk</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Nama Produk"
                                        name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Jenis Produk</label>
                                <div class="col-sm-12" required="true">
                                    <select name="jenis" class="form-control">
                                        <option value="jenis">Jenis Produk</option>
                                        <option value="Tanaman Hias">Tanaman Hias</option>
                                        <option value="Bibit">Bibit Tanaman</option>
                                        <option value="Alat Kebun">Perlengkapan Berkebun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Gambar Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Pilih Gambar produk</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Stok Produk</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Stok Produk"
                                        name="stok" value="{{ old('stok') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Harga Produk</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Harga Produk"
                                        name="harga" value="{{ old('harga') }}">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('produk.index') }}" class="btn btn-danger float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection