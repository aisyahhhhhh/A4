<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Title -->
  <title>@yield('title', 'Beranda')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/@yield('css', 'main').css" rel="stylesheet">

  {{-- icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Make Body CSS Style -->
  <style>
      .navbar {
    background-color: #add8e683;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
    #navbar {
      transition: top 0.3s ease-in-out;
    }

    .navbar {
      background-color: #add8e683;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    #navbar.navbar-hide {
      top: -100px;
    }

    body {
      @yield('body-style')
    }
    @media (min-width: 768px) {
  .navbar-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
  }
  .navbar-nav .nav-item {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 1rem;
    /* gap each  item*/
    margin: 0 3rem;
  }
}
.profile {
  margin-right: 30px !important;
}
/* gap each  item y in mobie view*/
@media (max-width: 768px) {

  .navbar-nav .nav-item {
    margin: 3rem 3rem;

  }
}
.caption {
  display: none;
}

@media (max-width: 767.98px) {
  .caption {
    display: block;
    text-align: center;
    font-size: 14px;
  }
}

  /* fix for non-clickable links in offcanvas menu */
  .navbar-nav .nav-link {
    pointer-events: none;
  }

  /* fix for background color in offcanvas menu */
  .offcanvas {
    background-color: #add8e683;
  }
  </style>

</head>

<body>
  {{-- navbar s --}}
<nav class="navbar navbar-expand-md fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navbarNavLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="nav-link">
              <img src="pictures/navbar/beranda.png" alt="Home">
              <span class="caption d-block d-md-none">Beranda</span>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <img src="pictures/navbar/belajar.png" alt="Belajar">
              <span class="caption d-block d-md-none">Belajar</span>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <img src="pictures/navbar/bermain.png" alt="Bermain">
              <span class="caption d-block d-md-none">Bermain</span>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <img src="pictures/navbar/teka-teki.png" alt="Teka-teki">
              <span class="caption d-block d-md-none">Teka-teki</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
    {{-- cicrle account icon --}}
    <div class="d-flex justify-content-center align-items-center profile">
      <div class="circle rounded-circle">
        <i class="fas fa-user"></i>
      </div>
  </div>
</nav>




  {{-- <nav id="navbar" class="navbar fixed-top">
    <ul>
      <li><a href="/"><img src="pictures/navbar/beranda.png" alt="Home"></a></li>
      <li><a href="/belajar"><img src="pictures/navbar/belajar.png" alt="Home"></a></li>
      <li><a href="/bermain"><img src="pictures/navbar/bermain.png" alt="Home"></a></li>
      <li><a href="/teka-teki"><img src="pictures/navbar/teka-teki.png" alt="Home"></a></li>
    </ul>
  </nav> --}}

  @section('content')

  @show

  {{-- footer --}}
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <footer>
    <div class="text-center p-3">
      © 2023 Copyright:
      <p><strong>A4 Team | S1 TI A | Universitas Negeri Malang</strong></p>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  {{-- jq --}}
  <script src="{{ url('js/jq.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script>

  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/@yield('js', 'main').js"></script>

</body>

</html>
