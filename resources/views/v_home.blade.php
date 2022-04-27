@extends('layout.v_template')
@section('title', 'Home')

@section('content')
    <h1>Ini Halaman Home</h1>
    <h4>{{ $nama_produk}}</h4><br>
    <h4>{{ $deskripsi}}</h4>
@endsection