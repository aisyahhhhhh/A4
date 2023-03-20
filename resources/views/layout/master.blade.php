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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/@yield('css', 'main').css" rel="stylesheet">

    <!-- Make Body CSS Style -->
    <style>
        body {
            @yield('body-style')
        }
    </style>

</head>
<body>
        
    <!-- ======= Header/Navbar Section ======= -->
    <!-- Start Header -->
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
        <nav id="navbar" class="navbar navbar-hidden">
          <ul class="menu">
            <li><a href="#services"><img src="assets/img/navbar/beranda.png" alt="Home"></a></li>
            <li><a href="#services"><img src="assets/img/navbar/belajar.png" alt="Home"></a></li>
            <li><a href="#services"><img src="assets/img/navbar/bermain.png" alt="Home"></a></li>
            <li><a href="#services"><img src="assets/img/navbar/teka-teki.png" alt="Home"></a></li>
          </ul>
        </nav>  
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->
  
  
  
  
  @section('content')
  
  @show
  
  
  
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
  <div id="preloader"></div>
  
      <footer>
        <div class="text-center p-3">
          © 2023 Copyright:
          <p><strong>A4 Team | S1 TI A | Universitas Negeri Malang</strong></p>
        </div>
        <!-- Copyright -->
      </footer>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/@yield('js', 'main').js"></script>
  
  </body>
  </html>