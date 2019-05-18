@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Perusahaan</h3>
                        <button class="btn btn-primary"><a href="/data">Kembali</a></button><br><br>
                        @foreach($datapt as $p)
                        
                        <form action="/service/updatedatapt" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Location</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" value="{{ $p->location }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telp</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="telp" value="{{ $p->telp }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fax</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="fax" value="{{ $p->fax }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mail</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="mail" value="{{ $p->mail }}"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection