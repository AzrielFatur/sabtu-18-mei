<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,700,800|Poppins:200,300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="css/detail.css">
  <link rel="stylesheet" href="/css/modal.css">
  <link rel="shortcut icon" href="image/fav_icon.png">
  <title>PT Anugrah Insan Madani</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="header">
            <a href="index.php"><img src="image/logo.png" alt="PT Anugrah Insan Madani"></a>
        <nav class="clearfix">
            <a href="#" id="pull">&nbsp;</a>
        <div class="geser">
            <ul class="clearfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="myabout">About</a></li>
                <li><a href="lowongankerja">Lowongan Kerja</a></li>
            </ul>
        </div>
        </nav>
    </div>

    <div class="container-detail">
        <div class="row-detail">
        <h1>Sertifikat Laik Operasi</h1>
            <div class="col-s-4">
                <img src="image/sertifikatlaikoperasi.png" width="100%">
            </div>

                <div class="col-s-8">
            @foreach ($sertifikaat as $p)
                <p>{{$p->paragraf}}</p>
            @endforeach

                <div class="alert-ijo">
            @foreach ($sertifikaat as $p)
                <h2>{{$p->judul}}</h2>
            @endforeach

            @foreach ($sertifikaat as $p)
                {{$p->alert}}
            @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container-table">
        <div class="row-table">
            <table width="100%">
                <th>No</th>
                <th>Daya</th>
                <th>Biaya Pemeriksaan</th>
                <th>Jasa Pengurusan</th>
                <th>Total</th>
                <tbody>
                @foreach ($detail as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->daya}}</td>
                    <td>{{$p->biayaperiksa}}</td>
                    <td>{{$p->biayaurus}}</td>
                    <td>{{$p->total}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="#open-modal"><button type="submit">Pesan Sekarang</button></a>
            <div id="open-modal" class="modal-window">
            <div>
                <a href="#modal-close" title="Close" class="modal-close"><i class="fas fa-window-close"></i></a>
                <h1>Form Pemesanan</h1>
                <h4>Detail Produk</h4>
            <form action="/landing/storepesanan" method="post">
            {{ csrf_field() }}
                    <label>Pilih Daya:</label>
                    <select name="daya">
                        @foreach ($detail as $p)
                        <option>{{$p->daya}}</option>
                        @endforeach
                    </select>
                <h4>Detail Pribadi</h4>
                <label for="">Nama</label><br>
                <input type="text" name="nama">

                <label for="">Email</label><br>
                <input type="text" name="email">
                
                <label for="">Nomor Telpon</label><br>
                <input type="number" name="telp">
                
                <label for="">Alamat Lengkap</label><br>
                <textarea type="text" name="alamat"></textarea>
                <button type="submit">Kirim</button></a>
            </form>
                

                </div>
            </div>
        </div>
    </div>

    <div class="footter">
        <footer>&copy; Copyright All Right Reserved.</footer>
    </div>
</body>




<!-- SCRIPT NAGIGASU -->
<script>
    $(function() {
			var pull = $('#pull'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
				menu = $('nav ul'); // Variabel menu

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 600 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</html>