@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Detail</h3>
                        <button class="btn btn-primary"><a href="/detail">Kembali</a></button><br><br>
                        
                        <form action="/service/storedetail" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id"><br>
                                <label class="col-sm-2 col-form-label" >Daya</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="daya">
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Biaya Pemeriksaan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="biayaperiksa">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jasa Pengurusan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="biayaurus">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="total"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection