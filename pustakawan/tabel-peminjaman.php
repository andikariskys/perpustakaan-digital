<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Peminjaman</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar Peminjaman</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-peminjaman" class="btn btn-primary btn-sm">Tambah Data Peminjaman</a>
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Buku</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pemrograman Web Modern</td>
                            <td>Ali Budi</td>
                            <td>VI-A</td>
                            <td>2024-12-01</td>
                            <td>2024-12-15</td>
                            <td><a href="#" class="btn btn-sm btn-success">dipinjam</a></td>
                            <td>
                                <a href="index.php?page=tambah-peminjaman" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Belajar Database MySQL</td>
                            <td>Siti Nura</td>
                            <td>VII-B</td>
                            <td>2024-12-05</td>
                            <td>2024-12-20</td>
                            <td>dikembalikan</td>
                            <td>
                                <a href="index.php?page=tambah-peminjaman" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>