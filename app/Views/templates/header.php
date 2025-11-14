<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Curriculum Vitae(CV) Syifa S</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Syifa's CV</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <?php
          $uri = service('uri');
          $segment = $uri->getSegment(1); // Ambil segment URL setelah domain
        ?>
        <ul>
          <li><a class="nav-link scrollto <?= ($segment == '' ? 'active' : '') ?>" href="<?= base_url('/') ?>#hero">Home</a></li>
          <li><a class="nav-link scrollto <?= ($segment == '' ? 'active' : '') ?>" href="<?= base_url('/') ?>#about">About</a></li>
          <li><a class="nav-link <?= ($segment == 'resume' ? 'active' : '') ?>" href="<?= base_url('resume') ?>">Skills & Resume</a></li>
          <li><a class="nav-link <?= ($segment == 'portfolio' ? 'active' : '') ?>" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
          <li><a class="nav-link <?= ($segment == 'contact' ? 'active' : '') ?>" href="<?= base_url('contact') ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.instagram.com/syifatsalitsa_?igsh=bTBqdWFqaDNyem1y" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/syifa-shefiany-tsalitsa-762079294?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">
