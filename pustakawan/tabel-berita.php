<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar Berita </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-berita" class="btn btn-primary btn-sm">Tambah Data Berita</a>
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Berita</th>
                            <th>Deskripsi (singkat)</th>
                            <th>Tgl Acara</th>
                            <th>Waktu</th>
                            <th>Tgl Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Berita Ujian Semester</td>
                            <td><?= substr("Berita ujian semester adalah informasi yang berkaitan dengan jadwal dan persiapan ujian akhir semester yang diadakan setiap semester di sekolah. Ujian semester merupakan evaluasi penting untuk mengukur pemahaman siswa terhadap materi pelajaran yang telah diajarkan selama satu semester.", 0, 50) ?></td>
                            <td>2024-12-20</td>
                            <td> - </td>
                            <td>2024-12-08 20:04:12</td>
                            <td>
                                <a href="index.php?page=detail-berita" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-berita" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Peluncuran Aplikasi Pembelajaran Baru</td>
                            <td><?= substr("Pemerintah meluncurkan aplikasi pembelajaran baru yang dapat diakses oleh semua pelajar di Indonesia. Aplikasi ini dirancang untuk memudahkan proses pembelajaran di luar sekolah, dengan fitur-fitur interaktif seperti video pembelajaran, kuis, dan forum diskusi.", 0, 50) ?></td>
                            <td>2024-12-12</td>
                            <td> - </td>
                            <td>2024-12-09 10:22:34</td>
                            <td>
                                <a href="index.php?page=detail-berita" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-berita" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>