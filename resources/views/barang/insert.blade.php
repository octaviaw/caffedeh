@extends('layout.app')
@section('content')

<div class="col-xs-12">
  <div class="box">
    <div class="box-body">
        <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}

          <div class="modal-header">
            <h3>Tambah Barang </h3>
         </div>
         <div class="modal-body">
           <div class="form-group">
                <label for="kode_barang" class="col-md-3 control-label">Kode Barang</label>
                  <div class="col-md-6">
                <input type="text" class="form-control" name="kode_barang" value="" required> 
                 <span class="help-block with-errors"></span>
              </div>
           </div>

           <div class="form-group">
              <label for="nama" class="col-md-3 control-label">Nama Barang</label>
                 <div class="col-md-6">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>

            <div class="form-group">
              <label for="harga_jual" class="col-md-3 control-label">Harga Jual</label>
              <div class="col-md-6">
                <input type="number" class="form-control" id="harga_jual" placeholder="" name="harga_jual" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
            </div>

              <div class="form-group">
             <label for="harga_beli" class="col-md-3 control-label">Harga Beli</label>
                <div class="col-md-6">
                <input type="number" class="form-control" placeholder="" name="harga_beli" value="" required>
                  
                 <span class="help-block with-errors"></span>
              </div>
               </div>


              <div class="form-group">
               <label for="satuan" class="col-md-3 control-label">Satuan</label>
 <div class="col-md-6">
                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
               </div>


              <div class="form-group">
              <label for="min_stok" class="col-md-3 control-label">Minimal Stok</label>
 <div class="col-md-6">
                <input type="number" class="form-control" id="min_stok" name="min_stok" placeholder="" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
               </div>

              <div class="form-group">
               <label for="brand" class="col-md-3 control-label">Brand</label>
 <div class="col-md-6">
                <input type="text" class="form-control" id="brand" placeholder="" name="brand" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
                <label for="kapasitas" class="col-md-3 control-label">Kapasitas</label>
                   <div class="col-md-6">
                <input type="text" class="form-control" id="kapasitas" placeholder="" name="kapasitas" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="diskon" class="col-md-3 control-label">Diskon</label>
                 <div class="col-md-6">
                <input type="text" class="form-control" id="diskon" placeholder="" name="diskon" value="" required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="modal-footer">
             <center>
              <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
              <a href="{{ url('supplier/') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
            </center>
           </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

    
  </div>
  </div>
</div>
</div>
@endsection