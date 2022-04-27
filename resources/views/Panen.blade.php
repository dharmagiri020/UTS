@extends('layout.v_template')
@section('title', 'DAFTAR PANEN')

@section('content')
          <div class="box">
            <div class="box-header">
                <div class="btn-group">
                <a href="/addpanen">
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-plus"></i>Tambah
                    </button>
                </a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Tanggal panen</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Satuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($panens as $item)
    <tr> 
      <td>{{$item->produkName}}</td>      
      <td>{{$item->PanenDate}}</td>
      <td>{{$item->PanenJumlah}}</td>
      <td>{{$item->satuan}}</td>
      <td>
      <a href="/detail/" class="btn btn-sm btn-success">Detail</a>
        <a href="" class="btn btn-sm btn-warning">Edit</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
          Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection