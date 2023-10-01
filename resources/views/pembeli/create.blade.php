@extends('admin.kebun_master')

@section('title')
Buat Pembeli
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Buat Pembeli</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pembeli.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Nama"
                                        name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Username</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Username"
                                        name="username" value="{{ old('username') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" required="true" placeholder="Email"
                                        name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" required="true" placeholder="Password"
                                        name="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 label-control">No Telepon</label>
                                <div class="col-sm-12">
                                    <input type="tel" class="form-control" required="true" placeholder="No Telp"
                                        name="no_tlp" value="{{ old('no_tlp') }}">
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
                            <a href="{{ route('pembeli.index') }}" class="btn btn-danger float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection