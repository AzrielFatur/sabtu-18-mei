@extends('layouts.app')

@section('content')

        <div class="container-fluid">
            <div class="container table-responsive">
                <h3 class="text-center"> Data Galllery</h3>
                    <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        @foreach ($gallery as $p)
                        <tr class="text-center">
                            <td><?= $no++; ?></td>
                            <td><img src="{{$p->gallery}}" width="200px;"></td>
                            <td><button class="btn btn-primary"><a href="/gallery/ubahgallery/{{ $p->id }}">Edit</a></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection