@extends('layout.app')
@section('content')
<h4>Insert Data Barang</h4>
<form action="{{route('barang.store')}}" method="POST">
	{{csrf_field()}}
	<div class="col-md-8">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" class="form-control" id="harga_jual" placeholder="" name="harga_jual" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" class="form-control" placeholder="" name="harga_beli" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="min_stok">Minimal Stok</label>
                <input type="number" class="form-control" id="min_stok" name="min_stok" placeholder="" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" placeholder="" name="brand" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" placeholder="" name="kapasitas" value="" required>
                 
              </div>
              <div class="col-md-8">
                <label for="diskon">Diskon</label>
                <input type="text" class="form-control" id="diskon" placeholder="" name="diskon" value="" required>
                 
              </div>
              
               <button class="btn btn-primary btn-lg btn-block" type="submit">Insert</button>



</form>
@endsection