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

              <p>Barang Masuk</p>
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

              <p>Barang Keluar</p>
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

              <p>Stok Bulan Ini</p>
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

              <p>Stok Tahun Ini</p>
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
                  <a href="{{route('barang.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
            <br>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama</th>
                  <th>Brand</th>
                  <th>Satuan</th>
                  <th>Min stok</th>
                  <th>Harga Jual</th>
                  <th>Harga Beli</th>
                  <th>Kapasitas</th>
                  <th>Diskon(%)</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $barang)
                <tr>
                  <td>{{$barang->kode_barang}}</td>
                  <td>{{$barang->nama}}</td>
                  <td>{{$barang->brand}}</td>
                  <td>{{$barang->satuan}}</td>
                  <td>{{$barang->min_stok}}</td>
                  <td>{{$barang->harga_jual}}</td>
                  <td>{{$barang->harga_beli}}</td>
                  <td>{{$barang->kapasitas}}</td>
                  <td>{{$barang->diskon}}</td>
                  <td><a href="{{route('barang.edit',$barang->id)}}"><i class="fa fa-pencil"></i></a>
                    <form action="{{route('barang.destroy',$barang->id)}}" method="POST" >
                      {{csrf_field()}}
                      <input type="text" name="_method" value="DELETE" hidden>
                      <button type="submit" class="btn btn-default">
                    <i class="fa fa-trash"></i>
                </button>

                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
   
    </section>
    @endsection