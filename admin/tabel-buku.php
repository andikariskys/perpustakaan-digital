<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Buku</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar Buku</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-buku" class="btn btn-primary btn-sm">Tambah Data Buku</a>
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Kode ISBN</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Tgl Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pemrograman Web Modern</td>
                            <td>978-1234567890</td>
                            <td><span class="badge bg-success">Pemrograman</span></td>
                            <td>10</td>
                            <td>2024-12-08 20:12:55</td>
                            <td>
                                <a href="index.php?page=detail-buku" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-buku" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Belajar Database MySQL</td>
                            <td>978-9876543210</td>
                            <td><span class="badge bg-success">Database</span></td>
                            <td>5</td>
                            <td>2024-12-08 20:12:55</td>
                            <td>
                                <a href="index.php?page=detail-buku" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-buku" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>