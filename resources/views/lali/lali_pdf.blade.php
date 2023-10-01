<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pembeli</title>
</head>

<body>
    <h3>Laporan Data Pembeli</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="lime" width="5%">No</td>
                <td bgcolor="lime">Nama</td>
                <td bgcolor="lime">Username</td>
                <td bgcolor="lime">Email</td>
                <td bgcolor="lime">No Telepon</td>
                <td bgcolor="lime">Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($R_pembeli as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->no_tlp}}</td>
                    <td>{{$row->created_at}}</td>
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