@extends('layouts.app')


@section('content')

        <div class="container-fluid">
            <div class="container">
                <h3 class="text-center">Data About</h3>
                <br>
                    <table class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Text</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $p)
                        <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p->text}}</td>
                        <td><img src="{{$p->gambar}}" width="100px;"></td>
                        <td>{{$p->visi}}</td>
                        <td>{{$p->misi}}</td>
                        <td><button class="btn btn-primary"><a href="/about/ubahabout/{{ $p->id }}">Edit</a></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection


