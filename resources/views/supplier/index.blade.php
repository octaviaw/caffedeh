 @extends('layout.app')


 @section('content')
     <section class="content-header">
      <h1>
       Manajemen Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Jumlah Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Total Supplier Tahun Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Total Supplier Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Total Supplier Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
           <div class="box">
            <div class="box-header with-border">
               <div class="text-center">
               <a href="{{route('supplier.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
             </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Nama PT</th>
                  <th>Nama Supplier</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PT ABC</td>
                  <td>Via</td>
                  <td>08587888654</td>
                  <td>Jl ABC</td>
                  <td> <a href="#"><i class="fa fa-eye"></i></a>
                    <a href="{{route('supplier.edit',1)}}"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
             
              </tbody>
              </table>
            </div>            
          </div>
          <!-- /.box -->


    </section>
    @endsection