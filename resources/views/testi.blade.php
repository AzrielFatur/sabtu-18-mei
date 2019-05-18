@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container table-responsive">
                        <h3 class="text-center"> Data Testimonial</h3>
                        <button class="btn btn-primary"><a href="/tambahtesti">Tambah Data</a></button><br><br>
                            <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                                @foreach ($testi as $p)
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>{{$p->pesan}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td><button class="btn btn-primary"><a href="/testi/ubahtesti/{{ $p->id }}">Edit</a></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection