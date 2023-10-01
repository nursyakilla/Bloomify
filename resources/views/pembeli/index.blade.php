@extends('admin.kebun_master')
@section('title')
Selamat Datang di Halaman Pembeli
@endsection

@section('admin.index')
<section class="content">
    <div class="colum">
        <div class="col-md-12">
            <div class="box-header with-border">
                @if(Request::get('keyword'))
               <a class="btn btn-app bg-info mt-3"href="{{ route('pembeli.index')}}" >
             <i class="fas fa-recycle"></i> Hapus</a>  
           @else
           <a class="btn btn-app bg-success mt-3"href="{{ route('pembeli.create')}}" >
             <i class="fas fa-plus"></i> Tambah</a>     
           @endif
              <form method="get" action="{{route('pembeli.index')}}">
                <label for="keyword" class="col-sm-2 control-label">Cari Pembeli</label>
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
                Hasil pencarian pembeli dengan keyword: <b>{{Request::get('keyword')}}</b>
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pembeli as $row)
                <tr>
                    <td>{{ $loop->iteration + ($pembeli->perpage() * ($pembeli->currentPage()-1)) }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>
                        <form method="post" action="{{route('pembeli.destroy', [$row->id] )}}" onsubmit="return confirm('apakah anda yakin menghapus, {{$row->name }}?..')">
                            @csrf
                            {{method_field('DELETE')}}
                            <a href="{{ route('pembeli.edit', [$row->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <a href="{{route('pembeli.show', [$row->id] )}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                            {{--  <button type="submit" class="btn btn-warning"><i class="fa fa-eye"></i></button>  --}}
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$pembeli->appends(Request::all())->links()}}
        </div>
    </div>
</section>
@endsection