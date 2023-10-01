@extends('admin.kebun_master')
@section('title')
Tampilan Pembeli
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info mt-3"href="{{ route('pembeli.index')}}" >
                  <i class="fas fa-angle-double-left"></i>Kembali</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $pembeli->name }}</td>
                   </tr>
                   <tr>
                       <td>Username</td>
                       <td>:</td>
                       <td>{{ $pembeli->username }}</td>
                   </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{ $pembeli->status }}</td>
                    </tr>
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $pembeli->email }}</td>
                   </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td>{{ $pembeli->no_tlp }}</td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection