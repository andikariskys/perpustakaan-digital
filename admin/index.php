<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
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
  if ($level_session or $level_cookie != 'admin') {
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
        <span class="brand-text font-weight-light">Dashboard (Admin)</span>
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
            <li class="nav-item <?php if ($page == 'categories' or $page == 'add_category') {
                                  echo 'menu-open';
                                } ?>">
              <a href=" #" class="nav-link <?php if ($page == 'categories' or $page ==  'add_category') {
                                              echo 'active';
                                            } ?>">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>
                  Daftar Kategori
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=categories" class="nav-link <?= $page == 'categories' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Lihat Data Kategori</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=add_category" class="nav-link <?= $page == 'add_category' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Tambah Data Kategori</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php if ($page == 'books' or $page == 'add_book') {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if ($page == 'books' or $page == 'add_book') {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Daftar Buku
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=books" class="nav-link <?= $page == 'books' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Lihat Data Buku</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=add_book" class="nav-link <?= $page == 'add_book' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Tambah Data Buku</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php if ($page == 'users' or $page == 'add_user' or $page == 'log_users') {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if ($page == 'users' or $page == 'add_user' or $page == 'log_users') {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>
                  Daftar User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ">
                <li class="nav-item">
                  <a href="index.php?page=users" class="nav-link <?= $page == 'users' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Lihat Data User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=add_user" class="nav-link <?= $page == 'add_user' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Tambah Data User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=log_users" class="nav-link <?= $page == 'log_users' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Log Data User</p>
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
          include 'dashboard.php';
          break;
        case 'categories':
          include 'table-categories.php';
          break;
        case 'add_category':
          include 'add_category.php';
          break;
        case 'books':
          include 'table-books.php';
          break;
        case 'add_book':
          include 'add_book.php';
          break;
        case 'book_detail':
          include 'book_detail.php';
          break;
        case 'users':
          include 'table-users.php';
          break;
        case 'add_user':
          include 'add_user.php';
          break;
        case 'log_users':
          include 'table-log-users.php';
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