@extends('layout.app')
@section('content')
<h4>Edit Data Barang</h4>
<form action="{{route('barang.update', $data->id)}}" method="POST">
	{{csrf_field()}}
  <input name="_method" type="hidden" value="PUT">



	<div class="col-md-8">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" value="{{$data->kode_barang}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="{{$data->nama}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" class="form-control" id="harga_jual" placeholder="" name="harga_jual" value="{{$data->harga_jual}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" class="form-control" placeholder="" name="harga_beli" value="{{$data->harga_jual}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="" value="{{$data->satuan}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="min_stok">Minimal Stok</label>
                <input type="number" class="form-control" id="min_stok" name="min_stok" placeholder="" value="{{$data->min_stok}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" placeholder="" name="brand" value="{{$data->brand}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" placeholder="" name="kapasitas" value="{{$data->kapasitas}}" required>
                 
              </div>
              <div class="col-md-8">
                <label for="diskon">Diskon</label>
                <input type="text" class="form-control" id="diskon" placeholder="" name="diskon" value="{{$data->diskon}}" required>
                 
              </div>
              
              <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>



</form>

@endsection