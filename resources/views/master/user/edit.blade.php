@extends('layout.app')
@section('content')

    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">

        <form action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}

          <div class="modal-header">
            <h3>Edit Supplier </h3>
         </div>
         <div class="modal-body">
           <div class="form-group">
              <label for="nama_supplier" class="col-md-3 control-label">Nama Supplier</label>
              <div class="col-md-6">
                 <input type="text" class="form-control" name="nama_supplier" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>

           <div class="form-group">
              <label for="nama_pt" class="col-md-3 control-label">Nama PT</label>
              <div class="col-md-6">
                  <input type="text" class="form-control" name="nama_pt" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>

            <div class="form-group">
              <label for="alamat" class="col-md-3 control-label">Alamat</label>
              <div class="col-md-6">
                  <input type="text" class="form-control" name="alamat" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="modal-footer">
             <center>
              <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
              <a href="{{ url('user/') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
            </center>
           </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

        </div>
      </div>
    </div>
  </div>
  @endsection