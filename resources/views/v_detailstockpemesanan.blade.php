@extends('layout.v_template')
@section('title', 'Detail Stock Pemesanan')
@section('content')

<table class="table">
    <tr>
        <th width="150px">Nama Produk</th>
        <th width="30px">:</th>
        <th>{{ $product->namaproduk }}</th>
    </tr>
    <tr>
        <th width="150px">Deskripsi</th>
        <th width="30px">:</th>
        <th>{{ $product->deskripsi }}</th>
    </tr>
    <tr>
        <th width="150px">Stock</th>
        <th width="30px">:</th>
        <th>{{ $product->stock }}</th>
    </tr>
    <tr>
        <th width="150px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $product->harga }}</th>
    </tr>
    <tr>
        <th width="150px">Foto Produk</th>
        <th width="30px">:</th>
        <th><img src="{{ url('fotoproduk/'.$product->fotoproduk) }}" width="300px"></th>
    </tr>
    <tr>
        <th><a href="/stock_pemesanan" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>
</table>



@endsection