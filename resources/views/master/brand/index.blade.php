 @extends('layout.app')


 @section('content')
     <section class="content-header">
      <h1>
       Manajemen Brand
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="row">
     
      
        <!-- ./col -->
      </div>
      <div class="box">
          <div class="box-header with-border"> 
            <div class="text-center">
                  <a href="{{route('brand.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
            </div>
            <div class="box-body">
          <div class="table-responsive">
           
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nama Brand</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>GuardALL</td>
                  <td>
                    <a href="#"><i class="fa fa-eye"></i></a>
                    <a href="{{route('brand.edit',1)}}"><i class="fa fa-pencil"></i></a>
                    <a href="{{route('brand.destroy',1)}}"><i class="fa fa-trash"></i></a>
                 

                  </td>
                </tr>
           
              </tbody>
            </table>
          </div>
          </div>
   
    </section>
    @endsection