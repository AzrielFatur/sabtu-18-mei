@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Tim</h3>
                        <button class="btn btn-primary"><a href="/tim">Kembali</a></button><br><br>
                        @foreach($tim as $p)
                        
                        <form action="/service/updatetim" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="{{ $p->nama }}">
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="gambar" value="{{ $p->gambar }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan" value="{{ $p->jabatan }}"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection