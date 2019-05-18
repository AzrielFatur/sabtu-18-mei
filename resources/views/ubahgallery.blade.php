@extends('layouts.app')

@section('content')
                <div class="container-fluid">
                    <div class="container">
                        <h3 class="text-center"> Data Gallery</h3>
                        <button class="btn btn-primary"><a href="/gallery">Kembali</a></button><br><br>
                        @foreach($gallery as $p)
                        
                        <form action="/service/updategallery" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                            <input type="hidden" name="id" value="{{ $p->id }}"><br>
                                <label class="col-sm-2 col-form-label" >Gambar</label>
                                <div class="col-sm-10">
                                <select name="gallery" class="custom-select">
                                    <option selected value="">--Pilih Gallery--</option>
                                    <option value="https://4.bp.blogspot.com/-0R5-Wse9uFk/XNed8ZzHeWI/AAAAAAAAAZ8/bJMN8Xd9WSwkL0lXGpdCJwG3F3qv4k4hACLcBGAs/s1600/gallery-1.png">Gallery Pertama</option>
                                    <option value="https://3.bp.blogspot.com/-ffzOOoik6Rg/XNed8YPEUlI/AAAAAAAAAZ0/nZ21V7YUDsgJ5QhCRAwx1Dx5x4DPIKBRACLcBGAs/s1600/gallery-2.png">Gallery Kedua</option>
                                    <option value="https://4.bp.blogspot.com/-HDGzBuA_cCU/XNed8SMdxZI/AAAAAAAAAZ4/a4or9BiHje0ZjgCWgUuL1FIKRoqfXS_5wCLcBGAs/s1600/gallery-3.png">Gallery Ketiga</option>
                                    <option value="https://4.bp.blogspot.com/-3J9kXf1F1kQ/XNehY0vR2oI/AAAAAAAAAaQ/u5NStZ7NTgks-AjHY6jlzTppCjBe9AAugCLcBGAs/s1600/gallery-4.png">Gallery Keempat</option>
                                    <option value="https://3.bp.blogspot.com/-_2UA10GLBhA/XNehZMKTdfI/AAAAAAAAAaY/Xb0R9y3i280cINzwDMhc67tY42Y66ixfwCLcBGAs/s1600/gallery-5.png">Gallery Kelima</option>
                                    <option value="https://1.bp.blogspot.com/-bXg2uvCCw94/XNehY89hi2I/AAAAAAAAAaU/gO4yK5p15kYuZ672zkJ4RI68a1lQGx-1gCLcBGAs/s1600/gallery-6.png">Gallery Keenam</option>
                                </select><br><br>
                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
@endsection