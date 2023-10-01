@extends('admin.kebun_master')

@section('title')
    Edit Data User
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('user.update', [$user->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Nama Lengkap" 
                                        name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Username</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Username"
                                        name="username" value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Status</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Status"
                                        name="status" value="{{ $user->status}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Email"
                                        name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" required="true" placeholder="Password"
                                        name="password" value="{{ $user->password }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">No Telepon</label>
                                <div class="col-sm-12">
                                    <input type="tel" class="form-control" required="true" placeholder="No Telp"
                                        name="no_tlp" value="{{ $user->no_tlp }}">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="submit" class="btn btn-danger float-right">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection