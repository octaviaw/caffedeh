 @extends('layout.app')


 @section('content')
 <main role="main" class="container">
            <h2>Data Barang</h2>
          <div class="table-responsive">
            <div class="text-center">
                 <a href="{{route('barang.create')}}">Tambah</a>
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
                  <td><a href="{{route('barang.edit',$barang->id)}}">Edit</a>
                    <form action="{{route('barang.destroy',$barang->id)}}" method="POST" >
                      {{csrf_field()}}
                      <input type="text" name="_method" value="DELETE" hidden>
                      <input type="SUBMIT" value="DELETE">

                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
   
    </main>
    @endsection