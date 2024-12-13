<?php

// Query untuk menghitung jumlah kategori buku
$queryKategori = "SELECT COUNT(*) AS total FROM data_kategori";
$resultKategori = mysqli_query($conn, $queryKategori);
$dataKategori = mysqli_fetch_assoc($resultKategori);
$totalKategori = $dataKategori['total'];

// Query untuk menghitung jumlah buku tersedia
$queryBuku = "SELECT COUNT(*) AS total FROM data_buku";
$resultBuku = mysqli_query($conn, $queryBuku);
$dataBuku = mysqli_fetch_assoc($resultBuku);
$totalBuku = $dataBuku['total'];

// Query untuk menghitung jumlah user admin/pustakawan
$queryUser = "SELECT COUNT(*) AS total FROM data_user";
$resultUser = mysqli_query($conn, $queryUser);
$dataUser = mysqli_fetch_assoc($resultUser);
$totalUser = $dataUser['total'];
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard Admin</h1>
                <h6>Selamat datang, <?= $nama ?>!</h6>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $totalKategori ?></h3>

                        <p>Jenis kategori buku</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-list-outline"></i>
                    </div>
                    <a href="index.php?page=categories" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $totalBuku ?></h3>

                        <p>Buku tersedia</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book"></i>
                    </div>
                    <a href="index.php?page=books" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $totalUser ?></h3>

                        <p>Total user admin/pustakawan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="index.php?page=users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div><!-- /.container-fluid -->
</section>