@extends('layout.app')
@section('content')

<div class="col-xs-12">
  <div class="box">
    <div class="box-body">
        <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}

  <input name="_method" type="hidden" value="PUT">
          <div class="modal-header">
            <h3>Add Brand </h3>
         </div>
         <div class="modal-body">
           <div class="form-group">
                <label for="nama_brand" class="col-md-3 control-label">Nama Brand</label>
                  <div class="col-md-6">
                <input type="text" class="form-control" name="nama_brand" required> 
                 <span class="help-block with-errors"></span>
              </div>
           </div>
        </div>
           
           <div class="modal-footer">
             <center>
              <button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floppy-o"></i> Simpan </button>
              <a href="{{ url('master/brand') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Batal</a>
            </center>
           </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </form>

    
  </div>
  </div>
</div>
@endsection