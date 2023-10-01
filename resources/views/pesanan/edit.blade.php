@extends('admin.kebun_master')
@section('title')
Edit Pesanan
@endsection

@section('admin.index')
<div class="row-container">
  <div class="col-md-12">
    <div class="box">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Edit Pesanan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('pesanan.update',[$pesanan->id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="card-body">
              <!-- edit nama Pelanggan -->
              <div class="form-group">
                <label>Nama Pembeli</label>
                <select class="form-control" name="id_pembeli">
                  @foreach ($pembelis as $pembeli)
                  <option value="{{ $pembeli->id }}">{{ $pembeli->name }}</option>
                  @endforeach
               </select>
              </div>
              <!-- edit nama produk -->
              <div class="form-group">
                <label>Nama Produk</label>
                <select class="form-control" name="id_produk">
                    @foreach ($produks as $produk)
                        <option value="{{ $produk->id }}">{{ $produk->name }}</option>
                    @endforeach
                </select>
              </div> 
              <!-- edit Jumlah Unit -->
              <div class="form-group">
                <label for="exampleInputQty1">Jumlah Unit</label>
                <input type="number" name="qty" class="form-control" value="{{ $pesanan->qty }}" id="exampleInputQty1" placeholder="Jumlah Unit">
              </div>
              <div class="form-group">
                <label for="exampleInputQty1">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $pembeli->alamat }}" id="exampleInputQty1" placeholder="Alamat">
            </div>
              <div class="card-footer">
                <div class="box-footer">
                  <button type = "submit" name="tombol" class="btn btn-info pull-right">Edit</button>
                  <a href="{{ route('pesanan.index') }}" class="btn btn-danger float-right">Cancel</a>
               </div>
             </div>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection