@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container table-responsive">
                        <h3 class="text-center"> Data Tim</h3>
                            <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                                @foreach ($tim as $p)
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>{{$p->nama}}</td>
                                    <td><img src="{{$p->gambar}}" width="50px"></td>
                                    <td>{{$p->jabatan}}</td>
                                    <td><button class="btn btn-primary"><a href="/tim/ubahtim/{{ $p->id }}">Edit</a></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection