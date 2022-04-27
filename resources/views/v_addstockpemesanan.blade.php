@extends('layout.v_template')
@section('title', 'Tambah Stock Pemesanan')

@section('content')

<form action="/stock_pemesanan/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-grup">
                    <label>Nama Produk</label>
                    <input name="namaproduk" class="form-control" value="{{ old('namaproduk') }}">
                    <div class="text-danger">
                        @error('namaproduk')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Deskripsi</label>
                    <input name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                    <div class="text-danger">
                        @error('deskripsi')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Stock</label>
                    <input name="stock" class="form-control" value="{{ old('stock') }}">
                    <div class="text-danger">
                        @error('stock')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ old('harga') }}">
                    <div class="text-danger">
                        @error('harga')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Foto Produk</label>
                    <input type="file" name="fotoproduk" class="form-control" value="{{ old('fotoproduk') }}">
                    <div class="text-danger">
                        @error('fotoproduk')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <button class="btn btn-primary btn-sm">Save</button>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection