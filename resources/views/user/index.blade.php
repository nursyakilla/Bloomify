@extends('admin.kebun_master')
@section('title')
Selamat Datang di Halaman User
@endsection

@section('admin.index')
<section class="content">
    <div class="colum">
        <div class="col-md-12">
            <div class="box-header with-border">
                @if(Request::get('keyword'))
               <a class="btn btn-app bg-info mt-3"href="{{ route('user.index')}}" >
             <i class="fas fa-recycle"></i> Hapus</a>  
           @else
           <a class="btn btn-app bg-success mt-3"href="{{ route('user.create')}}" >
             <i class="fas fa-plus"></i> Tambah</a>     
           @endif
              <form method="get" action="{{route('user.index')}}">
                <label for="keyword" class="col-sm-2 control-label">Cari User</label>
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
            @if (Request::get('keyword'))
            <div class="alert alert-info alert-block">
                Hasil pencarian user dengan keyword: <b>{{Request::get('keyword')}}</b>
            </div>
            @endif
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $row)
                <tr>
                    <td>{{ $loop->iteration + ($user->perpage() * ($user->currentPage()-1)) }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                        <form method="post" action="{{route('user.destroy', [$row->id] )}}" onsubmit="return confirm('apakah anda yakin menghapus, {{$row->name }}?..')">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="{{ route('user.edit', [$row->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <a href="{{route('user.show', [$row->id] )}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                            {{--  <button type="submit" class="btn btn-warning"><i class="fa fa-eye"></i></button>  --}}
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$user->appends(Request::all())->links()}}
        </div>
    </div>
</section>
@endsection