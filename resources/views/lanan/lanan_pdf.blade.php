<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pesanan</title>
</head>

<body>
    <h3>Laporan Data Pesanan</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="lime" width="5%">No</td>
                <td bgcolor="lime">Nama Pembeli</td>
                <td bgcolor="lime">Nama Produk</td>
                <td bgcolor="lime">Jumlah Unit</td>
                <td bgcolor="lime">Total Produk</td>
                <td bgcolor="lime">Alamat Pengirim</td>
                <td bgcolor="lime">Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_pesanan as $row)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $row->pembeli->name }}</td>
                    <td>{{ $row->produk->name }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>Rp. {{ $row->toga }}</td>
                    <td>{{ $row->alamat }}</td>
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