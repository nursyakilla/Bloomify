@extends('admin.kebun_master')

@section('title')
    Edit Data Pembeli
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Pembeli</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pembeli.update', [$pembeli->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Nama Lengkap" 
                                        name="name" value="{{ $pembeli->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Username</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Username"
                                        name="username" value="{{ $pembeli->username }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Email"
                                        name="email" value="{{ $pembeli->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" required="true" placeholder="Password"
                                        name="password" value="{{ $pembeli->password }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">No Telepon</label>
                                <div class="col-sm-12">
                                    <input type="tel" class="form-control" required="true" placeholder="No Telp"
                                        name="no_tlp" value="{{ $pembeli->no_tlp }}">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-danger float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection