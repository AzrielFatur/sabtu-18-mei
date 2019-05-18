@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <h1 class="mt-4">Overview</h1>

        <!-- FAST INFO -->
        <div class="container-fluid fastinfo">
          <div class="row justify-content-center">
         
            <div class="col-sm-4 mb-4">
              <div class="notif-lamar">
                <img src="image/lamar.png" class="float-left">
                <h5><?= $count = count($lowongankerja);?><br>Pelamar Kerja</h5>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="notif-pesan">
                <img src="image/pesan.png" class="float-left">
                <h5><?= $count = count($pesanan);?><br>Daftar Pelanggan</h5>
              </div>
            </div>
            
            <div class="col-sm-4 mb-4">
              <div class="notif-akun">
                <img src="image/akun.png" class="float-left">
                <h5><?= $count = count($users);?><br>Total Akun</h5>
              </div>
            </div>
          </div>
        </div>

        <!-- PELAMAR -->
        <div class="container-fluid pelamar">
          <h4 style="color: black;">Daftar Pelamar</h4>
          <div class="row text-center">
          <?php $no = 1; ?>
          @foreach ($lowongankerjaa as $p)
            <div class="col-sm-3 mb-4">
              <div class="card pelamar<?= $no++; ?>" width="auto;">
                <img src="{{$p->ava}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{$p->namalengkap}}</h5>
                  <p class="card-text">{{$p->keahlian}}</p>
                  <a href="/lowongankerja/pelamar/{{ $p->id }}" class="btn btn-primary">View CV</a>
                </div>
              </div>
            </div>
          @endforeach
          <p class="ml-auto"><a href="/semuapelamar"><span>View All</span></a></p>
          </div>
        </div>

      <!-- DAFTAR PELANGGAN -->
      <div class="container-fluid pelanggan">
        <div class="row">
          <div class="col-sm-12 table-responsive">
            <h4>Daftar Pelanggan</h4>  
              <table class="table">
                <caption class="text-right"><a href="/semuapelanggan">View All</a></caption>
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
                @foreach ($pesanann as $p)
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
    </div>
  </div>

@endsection
