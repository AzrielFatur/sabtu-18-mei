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
  <title>About</title>
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
                <h1>LAMARAN ANDA BERHASIL DI KIRIM</h1>
                <a href="/lowongankerja"><button>Kembali</button></a>
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