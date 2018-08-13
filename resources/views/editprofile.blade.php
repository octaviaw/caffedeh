  @extends('layout.app')


 @section('content')
 <div class="row">
   <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
         <div class="col-lg-3 col-xs-12">
                            <br>
                            <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" alt="" class="img-responsive">
                            <form enctype="multipart/form-data" method="POST" action="#">
                             {{csrf_field()}}
                           <input id="foto" type="file" class="form-control" name="foto" autofocus>
                            <input class="btn btn-primary btn-block" type="submit" value="Change photo">
                              </form>
                           
                          </div>

 <div class="col-lg-9 col-xs-12">
                            <br>
               <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}

          
         <div class="modal-body">
           <div class="form-group">
              <label for="name" class="col-md-3 control-label">Nama Depan</label>
              <div class="col-md-6">
                 <input id="name" type="text" class="form-control" name="nama_depan" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="name" class="col-md-3 control-label">Nama Belakang</label>
              <div class="col-md-6">
                 <input id="name" type="text" class="form-control" name="nama_belakang" autofocus required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>
           <div class="form-group">
              <label for="email" class="col-md-3 control-label">Email</label>
              <div class="col-md-6">
                 <input id="email" type="email" class="form-control" name="email" required>
                 <span class="help-block with-errors"></span>
              </div>
           </div>

           <div class="form-group">
              <label for="password" class="col-md-3 control-label">Password</label>
              <div class="col-md-6">
                 <input id="password" type="password" class="form-control" name="password">
                 <span class="help-block with-errors"></span>
              </div>
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
</div>
@endsection