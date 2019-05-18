@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Detail</h3>
                        <button class="btn btn-primary"><a href="/sertifikaat">Kembali</a></button><br><br>
                        @foreach($sertifikaat as $p)
                        
                        <form action="/service/updatesertifikaat" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Paragraf</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="paragraf" value="{{ $p->paragraf }}">
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" value="{{ $p->judul }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alert</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="alert" value="{{ $p->alert }}"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection