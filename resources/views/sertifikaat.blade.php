@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container table-responsive">
                        <h3 class="text-center"> Data Sertifikat</h3>
                            <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">paragraf</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">alert</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sertifikaat as $p)
                                <tr>
                                    <td>{{$p->paragraf}}</td>
                                    <td>{{$p->judul}}</td>
                                    <td>{{$p->alert}}</td>
                                    <td><button class="btn btn-primary"><a href="/sertifikaat/ubahsertifikaat/{{ $p->id }}">Edit</a></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection