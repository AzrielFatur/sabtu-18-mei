@extends('layouts.app')


@section('content')

        <div class="container-fluid">
            <div class="container table-responsive">
                <h3 class="text-center"> Data Perusahaan</h3>
                    <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Location</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Fax</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($datapt as $p)
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>{{$p->location}}</td>
                            <td>{{$p->telp}}</td>
                            <td>{{$p->fax}}</td>
                            <td>{{$p->mail}}</td>
                            <td><button class="btn btn-primary"><a href="/data/ubahdatapt/{{ $p->id }}">Edit</a></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
@endsection