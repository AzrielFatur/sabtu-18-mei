@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1>Edit Profile</h1>
    @foreach ($users as $p)
    <div class="col-sm-4 text-center">
        <div class="card mb-3 pelamar1">
        <img src="{{$p->gambar}}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><b>{{$p->name}}</b></h5>
            <p class="card-text">{{$p->email}}</p>
            <a href="" class="btn btn-outline-dark">Edit Profile</a>
        </div>
        </div>
    </div>
    @endforeach
</div>

@endsection