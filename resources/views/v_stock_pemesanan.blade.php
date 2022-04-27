@extends('layout.v_template')
@section('title', 'Stock Pemesanan')

@section('content')
   <a href="/stock_pemesanan/add" class="btn btn-primary btn-sm">Add</a> <br>

   @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('pesan') }}.
    </div>
   @endif
    <table class="table table-bordered">
        <thead></thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Foto Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($product as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$data->namaproduk}}</td>
                    <td>{{$data->deskripsi}}</td>
                    <td>{{$data->stock}}</td>
                    <td>{{$data->harga}}</td>
                    <td><img src="{{ url('fotoproduk/'.$data->fotoproduk) }}" width="100px"></td>
                    <td>
                        <a href="/stock_pemesanan/detail/{{ $data->idproduk }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/stock_pemesanan/ubah/{{ $data->idproduk }}" class="btn btn-sm btn-warning">Ubah</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{ $data->idproduk }}">
                            Hapus
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($product as $data)
    <div class="modal modal-danger fade" id="hapus{{ $data->idproduk }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->namaproduk }}</h4>
              </div>
              <div class="modal-body">
                <p>Are You Sure To Delete This Data?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Kembali</button>
                <a href="/stock_pemesanan/hapus/{{ $data->idproduk }}" class="btn btn-outline">Teruskan</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach

@endsection
