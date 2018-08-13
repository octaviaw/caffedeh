@extends('layout.app')
@section('content')

    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">

        <form action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}

          <div class="modal-header">
            <h3>Tambah User </h3>
         </div>
         <div class="form-group">
      <label for="foto" class="col-md-3 control-label">Foto</label>
      <div class="col-md-6">
         <input type="file" class="form-control" name="avatar" autofocus>
         <span class="help-block with-errors"></span>
      </div>
   </div>
         <div class="modal-body">
           <div class="form-group">
              <label for="nama_depan" class="col-md-3 control-label">Nama Depan</label>
              <div class="col-md-6">
                 <input type="text" class="form-control" name="nama_depan" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="nama_belakang" class="col-md-3 control-label">Nama Belakang</label>
              <div class="col-md-6">
                 <input type="text" class="form-control" name="nama_belakang" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="email" class="col-md-3 control-label">Email</label>
              <div class="col-md-6">
                 <input type="email" class="form-control" name="email" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="password" class="col-md-3 control-label">Password</label>
              <div class="col-md-6">
                 <input type="password" class="form-control" name="password" autofocus required>
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