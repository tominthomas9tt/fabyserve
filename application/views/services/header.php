<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Faby Serve</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $assetsUrl; ?>img/favicon.png" rel="icon">
  <link href="<?php echo $assetsUrl; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/8182324a5c.js"></script>
  <link href="<?php echo $assetsUrl; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $assetsUrl; ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $assetsUrl; ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $assetsUrl; ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo $assetsUrl; ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $assetsUrl; ?>css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top " style="background-color: #012970;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center ">
        <span class="text-white">Fabyserve</span>
      </a>
      <script>
        function changeLocationModel() {
          $('#locationSelectModal').modal('show');
        }
      </script>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="text-white" onclick="changeLocationModel()"><?php echo empty($selectedLocation) ? "Select location" : $selectedLocation; ?><i class="bi bi-chevron-down"></i></a></li>
          <li><a class="text-white" href="#"><i class="fa fa-bell" style="font-size: 1.25rem;" aria-hidden="true"></i></a></li>
          <li class="dropdown dropright"><a class="text-white" href="#"><i class="fa fa-user-circle" style="font-size: 1.25rem;" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li><a href="#">Login</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->