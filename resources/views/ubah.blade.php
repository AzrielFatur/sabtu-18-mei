@extends('layouts.app')


@section('content')

                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Service</h3>
                        <button class="btn btn-primary"><a href="/service">Kembali</a></button><br><br>
                        @foreach($service as $p)
                        <form action="/service/update" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Judul</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" value="{{ $p->judul }}"  placeholder="Masukan Judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan">{{ $p->keterangan }}</textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                <select required name="pilihgambar" class="custom-select">
                                    <option value="">--Pilih Gambar--</option>
                                    <option value="https://4.bp.blogspot.com/-dLzWqN_fJXc/XNbQNE-r6SI/AAAAAAAAAY4/MBFBk40jE8QAhxXakSkfdMI8LTrB9ZwxACLcBGAs/s1600/installasi-listrik.png">Installasi Listrik</option>
                                    <option value="https://1.bp.blogspot.com/-Mx8RBPv6baI/XNbQNLmuLsI/AAAAAAAAAY0/LxPWWzAZsiInCwtHSMlBw8b3fOsIk0zQgCLcBGAs/s1600/installasi-baru.png">Pemasangan Baru</option>
                                    <option value="https://4.bp.blogspot.com/-tJEEjh-VdfU/XNbQN7s75gI/AAAAAAAAAY8/tOxvosJubl8esx_AJinrOdOMgOQimLp4QCLcBGAs/s1600/penambahan-daya.png">Penambahan Daya</option>
                                    <option value="https://1.bp.blogspot.com/-vcnI4Yj6apA/XNbQOicvTkI/AAAAAAAAAZE/_LXV-3l4EQsiVYnVsDMyJCozw44_fh9eQCLcBGAs/s1600/sertifikat-laik-operasi.png">Sertifikat Laik Operasi (SLO)</option>
                                    <option value="https://3.bp.blogspot.com/-ierCmf7WwnQ/XNbQOSKyBrI/AAAAAAAAAZA/qXP4z8wxxtUiFRNoMz8Q2SriLd-NE9LXACLcBGAs/s1600/penangkal-petir.png">Penangkal Petir</option>
                                    <option value="https://1.bp.blogspot.com/-V9Irxnnqfl0/XNbQMwLqvpI/AAAAAAAAAYw/rATCtqpASnw49rvYKdJn9xEjPeFZ5WbEgCLcBGAs/s1600/genset.png">Genset</option>
                                </select>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>

@endsection
