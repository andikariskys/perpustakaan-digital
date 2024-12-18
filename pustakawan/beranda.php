<?php

$queryBuku = "SELECT COUNT(*) AS total FROM data_buku";
$resultBuku = mysqli_query($conn, $queryBuku);
$dataBuku = mysqli_fetch_assoc($resultBuku);
$totalBuku = $dataBuku['total'];

$queryInformasi = "SELECT COUNT(*) AS total FROM data_informasi";
$resultInformasi = mysqli_query($conn, $queryInformasi);
$dataInformasi = mysqli_fetch_assoc($resultInformasi);
$totalInformasi = $dataInformasi['total'];

$queryBerita = "SELECT COUNT(*) AS total FROM data_berita_acara WHERE jenis='berita'";
$resultBerita = mysqli_query($conn, $queryBerita);
$dataBerita = mysqli_fetch_assoc($resultBerita);
$totalBerita = $dataBerita['total'];

$queryAcara = "SELECT COUNT(*) AS total FROM data_berita_acara WHERE jenis='acara'";
$resultAcara = mysqli_query($conn, $queryAcara);
$dataAcara = mysqli_fetch_assoc($resultAcara);
$totalAcara = $dataAcara['total'];
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard Pustakawan</h1>
                <h6>Selamat datang, <?= $nama ?>!</h6>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $totalBuku ?></h3>

                        <p>Total buku dipinjam</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book"></i>
                    </div>
                    <a href="index.php?page=peminjaman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $totalInformasi ?></h3>

                        <p>Informasi diterbitkan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-information"></i>
                    </div>
                    <a href="index.php?page=informasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $totalBerita ?></h3>

                        <p>Total berita diterbitkan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-paper "></i>
                    </div>
                    <a href="index.php?page=berita" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $totalAcara ?></h3>

                        <p>Total acara diterbitkan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a href="index.php?page=acara" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div><!-- /.container-fluid -->
</section>