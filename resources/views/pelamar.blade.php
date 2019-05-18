@extends('layouts.app')

@section('content')
                <div class="container text-center">
                    <h3 class="text-center"> Data Pelamar</h3><br><br>
                    <div class="row">
                @foreach($lowongankerja as $p)
                    <div class="col-sm-6">
                        <div class="card pelamar1 pel1" width="auto;">
                        <img src="{{$p->ava}}" class="card-img-top">
                            <div class="card-body">
                            <h2 class="card-title">{{$p->namalengkap}}</h2>
                                <h6 class="card-text">{{$p->telp}}</h6><br>
                                    <dl class="row text-left">
                                        <dt class="col-sm-5">Tempat Tanggal Lahir</dt>
                                        <dd class="col-sm-7">{{$p->ttl}}</dd>
                                        
                                        <dt class="col-sm-5">Agama</dt>
                                        <dd class="col-sm-7">{{$p->agama}}</dd>
    
                                        <dt class="col-sm-5">Jenis Kelamin</dt>
                                        <dd class="col-sm-7">{{$p->jeniskelamin}}</dd>
                                        
                                        <dt class="col-sm-5">Kota</dt>
                                        <dd class="col-sm-7">{{$p->kota}}</dd>
    
                                        <dt class="col-sm-5">Status</dt>
                                        <dd class="col-sm-7">{{$p->status}}</dd>

                                        <dt class="col-sm-5">Alamat</dt>
                                        <dd class="col-sm-7">{{$p->alamat}}</dd>
                                    </dl>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-6 text-left">
                        <div class="card" style="width: 100%;">
                            <div class="card-header">
                                <h5>Hasil Test Online</h4>
                            </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><h6>Apa Anda baru lulus?</h6>- {{$p->kelulusan}}</li>
                                    <li class="list-group-item">Apa Anda siap ditempatkan diluar kota/negeri?<br>- {{$p->ditempatkan}}</li>
                                    <li class="list-group-item">Apa Anda siap bekerja dibawah tekanan?<br>- {{$p->tekanan}}</li>
                                    <li class="list-group-item">Punya sertifikat kelistrikan?<br>- {{$p->sertifikat}}</li>
                                    <li class="list-group-item">Jika didaftarkan, apakah mau ikut sertifikasi kelistrikan?<br>- {{$p->sertifikasi}}</li>
                                </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                    </div>
                </div>
@endsection