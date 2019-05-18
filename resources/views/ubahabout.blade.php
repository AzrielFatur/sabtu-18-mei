@extends('layouts.app')


@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data About</h3>
                        <button class="btn btn-primary"><a href="/about">Kembali</a></button><br><br>
                        @foreach($about as $p)
                        <form action="/service/updateabout" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Text</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="text"  placeholder="Masukan Text">{{ $p->text }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10 text-justify">
                                <select name="pilihgambar" class="custom-select">
                                    <option selected value="https://3.bp.blogspot.com/-4_6i0J664oM/XNb_Jt-n_YI/AAAAAAAAAZc/NpF7rtsFMv4GeRg-dyI1jleAjV-hTtuHgCLcBGAs/s1600/img-about.png">Image About</option>
                                </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Visi</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="visi"  placeholder="Masukan Visi">{{ $p->visi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Misi</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="misi"  placeholder="Masukan Misi">{{ $p->misi }}</textarea><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection