<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="image/fav_icon.png">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gaya.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
</head>
<body>







<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img src="/image/am-logo.png"> AM Dash</div>
          <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-landmark"></i>Overview</a>       
              <button class="list-group-item list-group-item-action bg-light  dropdown-btn"><i class="fas fa-file"></i>Pages<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                  <li><a href="/about"><i class="far fa-address-card"></i>About</a></li>
                  <li><a href="/service"><i class="fas fa-sliders-h"></i>Service</a></li>
                  <li><a href="/gallery"><i class="far fa-images"></i>Gallery</a></li>
                  <li><a href="/data"><i class="fas fa-building"></i>Contact Company</a></li>
                  <li><a href="/tim"><i class="fas fa-user-friends"></i>Tim</a></li>
                  <li><a href="/testi"><i class="fas fa-building"></i>Testimonial</a></li>
                  <li><a href="/sertifikaat"><i class="fas fa-certificate"></i>Sertifikat</a></li>
                  <li><a href="/detail"> <i class="fas fa-info"></i>Detail Page</a></li><br>
                </div>
                  <a href="/message" class="list-group-item list-group-item-action bg-light"><i class="fas fa-comments"></i>Message</a>
                  <a href="/semuapelamar" class="list-group-item list-group-item-action bg-light"><i class="fas fa-briefcase"></i>Daftar Pelamar</a>
                  <a href="/semuapelanggan" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i>Daftar Pelanggan</a>
                  <a href="/setting" class="list-group-item list-group-item-action bg-light"><i class="fas fa-cogs"></i>Setting</a>
          </div>
        </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
            <div id="menu-toggle"><span class="navbar-toggler-icon"></span></div>
              <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @foreach ($users as $p)
                    <img src="{{$p->gambar}}" width="40px">{{$p->name}}
                    @endforeach
                     <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
                  </li>
              </ul>
            </div>
          </nav>
    <!-- /#page-content-wrapper -->
          <main class="py-4">
              @yield('content')
          </main>
    </div>

    <!-- KUMPULAN SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- SCRIPT TOGGLE SIDEBAR -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

    <!-- SCRIPT DROPDOWN -->
      <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
        }
      </script>
      
</body>
</html>
