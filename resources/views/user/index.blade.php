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

              <p>Total Jumlah User</p>
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

              <p>Total User Tahun Ini</p>
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

              <p>Total User Bulan Ini</p>
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

              <p>Total User Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
          <div class="table-responsive">
            <div class="text-center">
                 <a href="{{route('barang.create')}}">Tambah</a>
            </div>
            <br>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>NIK</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Octa</td>
                  <td>Via</td>
                  <td>858788</td>
                  <td>via@gmail.com</td>
                  <td>
                    <a href="#">Detail</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                  </td>
                </tr>
             
              </tbody>
            </table>
          </div>
   
    </section>
    @endsection