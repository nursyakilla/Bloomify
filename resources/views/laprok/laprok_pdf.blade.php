<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Produk</title>
</head>

<body>
    <h3>Laporan Data Produk</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="lime" width="5%">No</td>
                <td bgcolor="lime">Nama Produk</td>
                <td bgcolor="lime">Jenis Produk</td>
                <td bgcolor="lime">Gambar Produk</td>
                <td bgcolor="lime">Stok Produk</td>
                <td bgcolor="lime">Harga Produk</td>
                <td bgcolor="lime">Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_produk as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->jenis }}</td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $row->gambar }}</p>
                    </td>
                    <td>{{ $row->stok }}</td>
                    <td>Rp. {{ $row->harga }}</td>
                    <td>{{ $row->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right">
        Date : {{$row->created_at}} </br>
        </br>
        Orang yang Bertanggung Jawab</br>
        </br>
        @if(Auth::check())
        <span class="hidden-xs" fontsize= 15 >{{ Auth::user()->status}}</span></br></br>
        @endif
        </br>
        </br>
        </br>
        @if(Auth::check())
        <span class="hidden-xs">({{ Auth::user()->name}})</span></br>
        @endif
    </p>
</body>
</html