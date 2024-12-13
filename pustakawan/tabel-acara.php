<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Acara</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar Acara </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-acara" class="btn btn-primary btn-sm">Tambah Data Acara</a>
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Acara</th>
                            <th>Deskripsi (singkat)</th>
                            <th>Tgl Acara</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Tgl Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Acara Penghargaan Tahunan</td>
                            <td><?= substr("Acara penghargaan tahunan adalah kegiatan yang diselenggarakan setiap tahun untuk memberikan apresiasi kepada para siswa yang telah menunjukkan prestasi luar biasa di berbagai bidang, seperti akademik, olahraga, dan seni.", 0, 50) ?>...</td>
                            <td>2024-12-15</td>
                            <td>10:00:00</td>
                            <td>Auditorium Sekolah</td>
                            <td>2024-12-08 20:04:12</td>
                            <td>
                                <a href="index.php?page=detail-acara" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-acara" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Festival Seni & Budaya</td>
                            <td><?= substr("Festival Seni dan Budaya 2024 merupakan acara tahunan yang diselenggarakan oleh Pemerintah Kota untuk merayakan keberagaman budaya dan seni lokal. Acara ini melibatkan berbagai pertunjukan seni, seperti tari tradisional, musik daerah, pameran seni rupa, dan bazar kuliner khas daerah.", 0, 50) ?>...</td>
                            <td>2024-12-20</td>
                            <td>08:00:00</td>
                            <td>Taman Kota XYZ</td>
                            <td>2024-12-09 10:22:34</td>
                            <td>
                                <a href="index.php?page=detail-acara" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-acara" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>