<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,700,800|Poppins:200,300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="/css/kerja.css">
  <link rel="shortcut icon" href="image/fav_icon.png">
  <title>Lowongan Pekerjaan</title>
</head>
<body>
<div class="header">
    <a href="#"><img src="image/logo.png" alt="PT Anugrah Insan Madani"></a>
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

  <!-- PAGE TWO -->
  <div class="about">
    <div class="container-two">
      <div class="row page-two">
        <div class="col-s-12 two-left aboutus">
          <h1>Lowongan Pekerjaan</h1>
                <p>Kami selaku dari pihak PT Anugrah Insan Madani membuat lowongan pekerjaan untuk orang yang memiliki minat kerja yang sangat tinggi, dan tidak memilih milih saat ditempatkan dimanapun. Rela ditempatkan di luar kota/negeri. Terbuka untuk Fresh Graduate, yang memiliki bakat pada bidang kelistrikan. Segera kirimkan isi data pribadi dan data lainnya di bawah ini.</p>
                <form action="/landing/storelowongan" method="post">
                {{ csrf_field() }}
                    <div class="col-s-6 pribadi">
                        <h3>Isi data pribadimu</h3>
                        <div class="row">
                            <div class="col-s-6">
                                <label for="nama">Nama Lengkap</label><br>
                                <input type="text" required name="namalengkap">
                            </div>
                            <div class="col-s-6">
                                <label for="nama">Nama Panggilan</label><br>
                                <input type="text" required name="namapanggilan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-s-6">
                                <label for="nama">Keahlian</label>
                                <input type="text" required name="keahlian">
                            </div>
                            <div class="col-s-6">
                                <label for="nama">Link Avatar</label>
                                <input type="text" required name="avatar">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-s-6">
                                <label for="nama">Tempat, Tanggal, dan Lahir</label><br>
                                <input type="text" required name="ttl">
                            </div>
                            <div class="col-s-6">
                                <label for="nama">Jenis Kelamin</label><br>
                                <input type="text" required name="jeniskelamin">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-s-6">
                                <label for="nama">Agama</label><br>
                                <input type="text" required name="agama">
                            </div>
                            <div class="col-s-6">
                                <label for="nama">Kota</label><br>
                                <input type="text" required name="kota">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-s-6">
                                <label for="nama">Status</label><br>
                                <input type="text" required name="status">
                            </div>
                            <div class="col-s-6">
                                <label for="nama">No Telp</label><br>
                                <input type="text" required name="telp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="alamat">Alamat Lengkap</label><br>
                                <textarea type="text" required name="alamat" width="100"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-s-6 online">
                        <h3>Test Online</h3>
                        <div class="row">
                            <div class="col-s-12">
                                <label for="pertanyaan">Apa Anda baru lulus?</label><br>
                                <input type="radio" required name="lulus" value="Baru lulus"/>Baru lulus
                                <input type="radio" required name="lulus" value="Tahun kemarin"/>Tahun kemarin
                                <input type="radio" required name="lulus" value="Beberapa tahun lalu"/>Beberapa tahun yang lalu
                            </div>
                            <div class="col-s-12">
                                <label for="pertanyaan">Apa Anda siap ditempatkan diluar kota/negeri?</label><br>
                                <input type="radio" required name="tempat" value="Siap"/>Siap
                                <input type="radio" required name="tempat" value="Keberatan"/>Keberatan
                                <input type="radio" required name="tempat" value="Tidak siap"/>Tidak siap
                            </div>
                            <div class="col-s-12">
                                <label for="pertanyaan">Apa Anda siap bekerja dibawah tekanan?</label><br>
                                <input type="radio" required name="tekanan" value="Siap"/>Siap
                                <input type="radio" required name="tekanan" value="Keberatan"/>Keberatan
                                <input type="radio" required name="tekanan" value="Tidak siap"/>Tidak siap
                            </div>
                            <div class="col-s-12">
                                <label for="pertanyaan">Punya sertifikat kelistrikan?</label><br>
                                <input type="radio" required name="sertifikat" value="Punya"/>Punya
                                <input type="radio" required name="sertifikat" value="Lagi proses"/>Lagi proses
                                <input type="radio" required name="sertifikat" value="Tidak punya"/>Tidak punya
                            </div>
                            <div class="col-s-12">
                                <label for="pertanyaan">Jika didaftarkan, apakah mau ikut sertifikasi kelistrikan?</label><br>
                                <input type="radio" required name="ikutsertifikasi" value="Mau"/>Mau
                                <input type="radio" required name="ikutsertifikasi" value="Mikir dulu"/>Mikir dulu
                                <input type="radio" required name="ikutsertifikasi" value="Tidak usah"/>Tidak usah
                            </div>
                        </div>
                    </div>
                    <button type="submit">Kirim Lamaran</button>
                </form>
            </div>
        </div>
      
        
    </div>
  </div>

  <!-- <div class="container footerr">
    <div class="page-two">
      <footer>Copyright PT Anugrah Insan Madani</footer>
    </div>
  </div> -->



  <script>
    $(function() {
			var pull 		= $('#pull'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
				menu 		= $('nav ul'); // Variabel menu

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
</body>
</html>