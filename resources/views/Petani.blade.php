@extends('layout.v_template')
@section('title', 'DAFTAR PETANI')

@section('content')
<div class="row">
   <div class="col-xs-12">
      <div class="box">
         <div class="box-header">
            <h3 class="box-title">Daftar Petani</h3>
            <div class="box-tools">
               <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                     <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.box-header -->
         <div>
            <div class="box-header">
               <div class="btn-group">
                  <a href="/addPetani">
                     <button type="button" class="btn btn-default">
                        <i class="fa fa-plus"></i>Tambah
                     </button>
                  </a>
               </div>
            </div>
         </div>
         <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>Nama Petani</th>
                     <th>Kelompok Tani</th>
                     <th>NIK</th>
                     <th>Alamat</th>
                     <th>No Telpon</th>
                     <th>Foto</th>
                     <th>Status</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($petanis as $item)
                  <tr>
                     <td>{{$item->nama}}</td>
                     <td>{{$item->kelompok_tani->nama_kelompok}}</td>
                     <td>{{$item->nik}}</td>
                     <td>{{$item->alamat}}</td>
                     <td>{{$item->telp}}</td>
                     <td><img src="{{ url ('fotoproduk/'.$item->foto) }}" width="50px" alt="">
                    </td>
                     <td>{{$item->status}}</td>
                     <td>
                     <a href="/Petani/detail/" class="btn btn-sm btn-success">Detail</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                           Delete
                        </button>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <!-- /.box-body -->
      </div>
      <!-- /.box -->
   </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection