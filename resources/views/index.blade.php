@extends('layouts.app')


@section('content')

        <div class="container-fluid">
            <div class="container">
                <h3 class="text-center"> Data Service</h3>
                    <table class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Keterangan</th>
                        <th colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    @foreach ($service as $p)
                    <tr>
                        <th scope="row"> <?= $no++; ?> </th>
                        <td>{{$p->judul}}</td>
                        <td><img src="{{$p->gambar}}"></td>
                        <td>{{$p->keterangan}}</td>
                        <td><button class="btn btn-primary"><a href="/service/ubah/{{ $p->id }}">Edit</a></button></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection