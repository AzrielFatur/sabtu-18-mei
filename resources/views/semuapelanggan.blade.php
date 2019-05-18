@extends('layouts.app')

@section('content')
<!-- DAFTAR PELANGGAN -->
      <div class="container-fluid pelanggan">
        <div class="row">
          <div class="col-sm-12 table-responsive">
            <h4>Daftar Pelanggan</h4>  
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Daya</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach ($pesanan as $p)
                  <tr>
                    <td><?= $no++; ?></td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->daya}}</td>
                    <td><span>{{$p->email}}</span></td>
                    <td>{{$p->telp}}</td>
                    <td>{{$p->alamat}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
@endsection