@extends('layouts.app')

@section('content')
    <div class="container-fluid pelamar">
        <h4 style="color: black;">Daftar Pelamar</h4>
            <div class="row text-center">
                <?php $no = 1; ?>
        @foreach ($lowongankerja as $p)
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

@endsection