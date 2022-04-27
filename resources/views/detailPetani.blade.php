@extends('layout.v_template')
@section('title','Detail Petani')
@section('content')

<table class="table">
    <tr>
        <th width="50px">Nama</th>
        <th width="30px">:</th>
        <th>{{$Petani->nama}}</th>
    </tr>
    <tr>
        <th width="50px">nama_kelompok</th>
        <th width="30px">:</th>
        <th>{{$Petani->nama_kelompok}}</th>
    </tr>
    <tr>
        <th width="50px">nik</th>
        <th width="30px">:</th>
        <th>{{$Petani->nik}}</th>
    </tr>
    <tr>
        <th width="50px">Alamat</th>
        <th width="30px">:</th>
        <th>{{$Petani->alamat}}</th>
    </tr>
    <tr>
        <th width="50px">foto</th>
        <th width="30px">:</th>
       <th> <img src="{{ url ('fotoproduk/'.$item->foto)}}"width="100px"></th>  
    </tr>
    <tr>
            <a href="/Petani" class="btn btn-success tbn-sm">Kembali</a>
    </tr>

</table>
@endsection