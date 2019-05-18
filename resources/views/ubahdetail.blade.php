@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Detail</h3>
                        <button class="btn btn-primary"><a href="/detail">Kembali</a></button><br><br>
                        @foreach($detail as $p)
                        
                        <form action="/service/updatedetail" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Daya</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="daya" value="{{ $p->daya }}">
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Biaya Pemeriksaan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="biayaperiksa" value="{{ $p->biayaperiksa }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jasa Pengurusan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="biayaurus" value="{{ $p->biayaurus }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="total" value="{{ $p->total }}"><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection