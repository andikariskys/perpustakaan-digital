<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Informasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar Informasi</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-informasi" class="btn btn-primary btn-sm">Tambah Data Informasi</a>
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Informasi</th>
                            <th>Deskripsi (singkat)</th>
                            <th>Tgl Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Informasi Layanan Peminjaman Buku</td>
                            <td><?= substr("Peminjaman buku di perpustakaan sekolah merupakan layanan yang sangat penting untuk mendukung kegiatan belajar mengajar di sekolah. Perpustakaan menyediakan berbagai jenis buku, mulai dari buku pelajaran, buku referensi.", 0, 50) ?>...</td>
                            <td>2024-12-08 20:04:12</td>
                            <td>
                                <a href="index.php?page=detail-informasi" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-informasi" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pengumuman Libur Sekolah</td>
                            <td><?= substr("Pengumuman libur sekolah adalah informasi yang sangat ditunggu oleh seluruh siswa dan orang tua. Sekolah akan libur selama dua minggu pada akhir bulan ini, tepatnya dari tanggal 24 Desember hingga 7 Januari.", 0, 50) ?>...</td>
                            <td>2024-12-08 20:04:12</td>
                            <td>
                                <a href="index.php?page=detail-informasi" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-informasi" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>