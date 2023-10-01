@extends('admin.kebun_master')

@section('title')
    Tabel Pembeli
@endsection

@section('admin.index')
    <section class="content">
        <div class="col">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <a target="_blank" href = "{{route('cetak_pembeli')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembeli as $row)
                            <tr>
                                <td>{{ $loop->iteration + ($pembeli->perpage() * ($pembeli->currentPage()-1))}}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pembeli->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection