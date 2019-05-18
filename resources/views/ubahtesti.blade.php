@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Tim</h3>
                        <button class="btn btn-primary"><a href="/testi">Kembali</a></button><br><br>
                        @foreach($testi as $p)
                        
                        <form action="/service/updatetesti" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Pesan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="pesan" value="{{ $p->pesan }}">
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="{{ $p->nama }}"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection