@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container table-responsive">
                        <h3 class="text-center"> Data Detail</h3>
                        <button class="btn btn-primary"><a href="/tambahdetail">Tambah Data</a></button><br><br>
                            <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Daya</th>
                                    <th scope="col">Biaya Pemeriksaan</th>
                                    <th scope="col">Jasa Pengurusan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                                @foreach ($detail as $p)
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>{{$p->daya}}</td>
                                    <td>{{$p->biayaperiksa}}</td>
                                    <td>{{$p->biayaurus}}</td>
                                    <td>{{$p->total}}</td>
                                    <td><button class="btn btn-primary"><a href="/detail/ubahdetail/{{ $p->id }}">Edit</a></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection