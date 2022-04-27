@extends('layout.v_template')
@section('title', 'Ubah Stock Pemesanan')

@section('content')

<form action="/stock_pemesanan/update/{{ $product->idproduk }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-grup">
                    <label>Nama Produk</label>
                    <input name="namaproduk" class="form-control" value="{{ $product->namaproduk }}">
                    <div class="text-danger">
                        @error('namaproduk')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Deskripsi</label>
                    <input name="deskripsi" class="form-control" value="{{ $product->deskripsi }}">
                    <div class="text-danger">
                        @error('deskripsi')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Stock</label>
                    <input name="stock" class="form-control" value="{{ $product->stock }}">
                    <div class="text-danger">
                        @error('stock')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-grup">
                    <label>Harga</label>
                    <input name="harga" class="form-control" value="{{ $product->harga }}">
                    <div class="text-danger">
                        @error('harga')
                                {{ $message }}
                        @enderror
                    </div>
                </div>

                    <div class="col-sm-12">
                    <div class="col-sm-4">
                    <img src="{{ url('fotoproduk/'.$product->fotoproduk) }}" width="150px">
                    </div>
                    <div class="col-sm-8">
                    <div class="form-grup">
                    <label>Ubah Foto Produk</label>
                    <input type="file" name="fotoproduk" class="form-control">
                    <div class="text-danger">
                        @error('fotoproduk')
                                {{ $message }}
                        @enderror
                    </div>
                </div>
                    </div>
                </div>
                <br>

                <div class="col-sm-12">
                <div class="form-grup">
                    <button class="btn btn-primary btn-sm">Save</button>
                </div>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection