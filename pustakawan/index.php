<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pustakawan | beranda</title>
  <!-- Favicon -->
  <link href="../assets/images/logo-sd-kanisius.ico" rel="icon" type="image/x-icon" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/ionicons/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/admin-lte/dist/css/adminlte.min.css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/data-tables/datatables.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/admin-lte/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <?php
  include '../helper/koneksi.php';
  if ($level_session or $level_cookie != 'pustakawan') {
    echo "<script>
        alert('Silakan login terlebih dahulu!');
        window.location.href='../index.php?page=signin'
    </script>";
  }
  $page = empty($_GET['page']) ? null : $_GET['page'];
  ?>
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link">
        <img src="../assets/images/logo-sd-kanisius.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light">Pustakawan</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link <?= $page == null ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item <?php if ($page == 'peminjaman' or $page == 'tambah-peminjaman') {
                                  echo 'menu-open';
                                } ?>">
              <a href=" #" class="nav-link <?php if ($page == 'peminjaman' or $page ==  'tambah-peminjaman') {
                                              echo 'active';
                                            } ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Daftar Peminjaman
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=peminjaman" class="nav-link <?= $page == 'peminjaman' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Lihat Data Peminjaman</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=tambah-peminjaman" class="nav-link <?= $page == 'tambah-peminjaman' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Tambah Peminjaman</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php if ($page == 'informasi' or $page == 'tambah-informasi') {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if ($page == 'informasi' or $page == 'tambah-informasi') {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                  Daftar Informasi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=informasi" class="nav-link <?= $page == 'informasi' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Lihat Data Informasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=tambah-informasi" class="nav-link <?= $page == 'tambah-informasi' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Tambah Data Informasi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php if ($page == 'berita' or $page == 'tambah-berita' or $page == 'aktivitas-berita') {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if ($page == 'berita' or $page == 'tambah-berita' or $page == 'aktivitas-berita') {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                  Daftar Berita
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=berita" class="nav-link <?= $page == 'berita' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Lihat Data Berita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=tambah-berita" class="nav-link <?= $page == 'tambah-berita' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Tambah Data Berita</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php if ($page == 'acara' or $page == 'tambah-acara' or $page == 'aktivitas-acara') {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if ($page == 'acara' or $page == 'tambah-acara' or $page == 'aktivitas-acara') {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas fa-calendar-day"></i>
                <p>
                  Daftar Acara
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=acara" class="nav-link <?= $page == 'acara' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Lihat Data Acara</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=tambah-acara" class="nav-link <?= $page == 'tambah-acara' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Tambah Data Acara</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">INFORMASI AKUN</li>
            <li class="nav-item">
              <a href="index.php?page=profiles" class="nav-link <?php if ($page == 'profiles' or $page == 'activate') {
                                                                  echo 'active';
                                                                } ?>">
                <i class="nav-icon far fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../signout.php" class="nav-link active bg-danger">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Keluar/Sign Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">

      <?php switch ($page) {
        case null:
          include 'beranda.php';
          break;
        case 'peminjaman':
          include 'tabel-peminjaman.php';
          break;
        case 'tambah-peminjaman':
          include 'tambah-peminjaman.php';
          break;
        case 'informasi':
          include 'tabel-informasi.php';
          break;
        case 'detail-informasi':
          include 'detail-informasi.php';
          break;
        case 'tambah-informasi':
          include 'tambah-informasi.php';
          break;
        case 'berita':
          include 'tabel-berita.php';
          break;
        case 'detail-berita':
          include 'detail-berita.php';
          break;
        case 'tambah-berita':
          include 'tambah-berita.php';
          break;
        case 'acara':
          include 'tabel-acara.php';
          break;
        case 'detail-acara':
          include 'detail-acara.php';
          break;
        case 'tambah-acara':
          include 'tambah-acara.php';
          break;
        case 'profiles':
          include 'profiles.php';
          break;
        case 'activate':
          include 'profiles.php';
          break;
        default:
          include '404.php';
          break;
      } ?>

    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="https://andikariskys.my.id" target="_blank">andikariskys</a>.</strong>
      All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>

  <!-- jQuery -->
  <script src="../assets/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../assets/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/admin-lte/plugins/moment/moment.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../assets/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../assets/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- Data Tables -->
  <script src="../assets/admin-lte/plugins/data-tables/datatables.min.js"></script>
  <script src="../assets/admin-lte/plugins/select2/js/select2.full.min.js"></script>
  <script>
    let table = new DataTable('#myTable');

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  </script>
  <!-- AdminLTE App -->
  <script src="../assets/admin-lte/dist/js/adminlte.js"></script>
</body>

</html>