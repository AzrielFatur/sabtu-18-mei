@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Testimonial</h3>
                        <button class="btn btn-primary"><a href="/testi">Kembali</a></button><br><br>
                        
                        <form action="/service/storetesti" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id"><br>
                                <label class="col-sm-2 col-form-label" >Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="pesan"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection