<!DOCTYPE html>
<html lang="en-id">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="description" content="Perpustakaan Digital SD Kanisius Sorogenen Surakarta.">
    <meta name="author" content="John Doe">
    <meta name="keywords" content="perpustakaan digital, sd kanisius sorogenen, sd kanisius">
    <meta property="og:title" content="Perpustakaan Digital SD Kanisius" />
    <meta property="og:description" content="Perpustakaan Digital SD Kanisius Sorogenen Surakarta." />
    <meta property="og:image" content="images/logo-sd-kanisius.png" />

    <!-- Title -->
    <title>Perpustakaan SD Kanisius Sorogenen</title>

    <!-- Favicon -->
    <link href="assets/images/logo-sd-kanisius.ico" rel="icon" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="assets/libraria/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Mobile Menu -->
    <link href="assets/libraria/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="assets/libraria/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
    <!-- Stylesheet -->
    <link href="assets/libraria/css/style.css" rel="stylesheet" />
</head>

<body>
    <?php
    include 'helper/koneksi.php';
    $page = empty($_GET['page']) ? null : $_GET['page'];
    ?>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index.php">
                                            <img src="assets/images/logo-sd-kanisius.png" alt="LIBRARIA" style="width: 52px; height: 57px;" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="topbar-links">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="<?php if ($page == null) {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php">Beranda</a>
                                    </li>
                                    <li class=" <?php if ($page == 'daftar-buku') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php?page=daftar-buku">Daftar Buku</a>
                                    </li>
                                    <li class=" <?php if ($page == 'berita-acara') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php?page=berita-acara">Berita &amp; Acara</a>
                                    </li>
                                    <li class=" <?php if ($page == 'informasi') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php?page=informasi">Informasi</a>
                                    </li>
                                    <li class=" <?php if ($page == 'contact') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php?page=contact">Kontak</a>
                                    </li>
                                    <li></li>
                                    <li></li>
                                    <?php if ($level == 'admin') { ?>
                                        <li>
                                            <a href="admin/index.php">beranda</a>
                                        </li>
                                    <?php } else if ($level == 'pustakawan') { ?>
                                        <li>
                                            <a href="pustakawan/index.php">beranda</a>
                                        </li>
                                    <?php } else { ?>
                                        <li class=" <?php if ($page == 'login') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="index.php?page=login">Log In</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li class=" <?php if ($page == null) {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php">Beranda</a>
                                </li>
                                <li class=" <?php if ($page == 'daftar-buku') {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php?page=daftar-buku">Daftar Buku</a>
                                </li>
                                <li class=" <?php if ($page == 'berita-acara') {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php?page=berita-acara">Berita &amp; Acara</a>
                                </li>
                                <li class=" <?php if ($page == 'informasi') {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php?page=informasi">Informasi</a>
                                </li>
                                <li class=" <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php?page=contact">Kontak</a>
                                </li>
                                <li class=" <?php if ($page == 'login') {
                                                echo 'active';
                                            } ?>">
                                    <a href="index.php?page=login">Sigin In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <?php

    switch ($page) {
        case null:
            include 'beranda.php';
            break;
        case 'daftar-buku':
            include 'daftar-buku.php';
            break;
        case 'detail-buku':
            include 'detail-buku.php';
            break;
        case 'berita-acara':
            include 'berita-acara.php';
            break;
        case 'detail-berita-acara':
            include 'detail-berita-acara.php';
            break;
        case 'informasi':
            include 'informasi.php';
            break;
        case 'detail-informasi':
            include 'detail-informasi.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'login':
            include 'login.php';
            break;
        default:
            include '404.php';
            break;
    }

    ?>

    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <center style="margin-top: 2rem; margin-bottom: 2rem;">
                <p class="text-white">Copyright &copy; 2024 <a href="https://www.andikariskys.my.id" target="_blank"><b>Andikariskys</b></a></p>
            </center>
        </div>
    </footer>
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="assets/libraria/js/jquery-1.12.4.min.js"></script>
    <!-- jQuery UI -->
    <script type="text/javascript" src="assets/libraria/js/jquery-ui.min.js"></script>
    <!-- jQuery Easing -->
    <script type="text/javascript" src="assets/libraria/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/libraria/js/bootstrap.min.js"></script>
    <!-- Mobile Menu -->
    <script type="text/javascript" src="assets/libraria/js/mmenu.min.js"></script>
    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="assets/libraria/js/harvey.min.js"></script>
    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="assets/libraria/js/waypoints.min.js"></script>
    <!-- Facts Counter -->
    <script type="text/javascript" src="assets/libraria/js/facts.counter.min.js"></script>
    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="assets/libraria/js/mixitup.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/libraria/js/owl.carousel.min.js"></script>
    <!-- Accordion -->
    <script type="text/javascript" src="assets/libraria/js/accordion.min.js"></script>
    <!-- Responsive Tabs -->
    <script type="text/javascript" src="assets/libraria/js/responsive.tabs.min.js"></script>
    <!-- Responsive Table -->
    <script type="text/javascript" src="assets/libraria/js/responsive.table.min.js"></script>
    <!-- Masonry -->
    <script type="text/javascript" src="assets/libraria/js/masonry.min.js"></script>
    <!-- Carousel Swipe -->
    <script type="text/javascript" src="assets/libraria/js/carousel.swipe.min.js"></script>
    <!-- bxSlider -->
    <script type="text/javascript" src="assets/libraria/js/bxslider.min.js"></script>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="assets/libraria/js/main.js"></script>
</body>

</html>