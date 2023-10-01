@extends('admin.kebun_master')
@section('title')
Tampilan Data User
@endsection

@section('admin.index')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info mt-3"href="{{ route('user.index')}}" >
                  <i class="fas fa-angle-double-left"></i>Kembali</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $user->name }}</td>
                   </tr>
                   <tr>
                       <td>Username</td>
                       <td>:</td>
                       <td>{{ $user->username }}</td>
                   </tr>
                   <tr>
                       <td>Status</td>
                       <td>:</td>
                       <td>{{ $user->status }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $user->email }}</td>
                   </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td>{{ $user->no_tlp }}</td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection