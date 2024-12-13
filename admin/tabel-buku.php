<?php
$query = "SELECT data_buku.id_buku, data_buku.judul, data_buku.kode_isbn, data_kategori.nama, data_buku.stok, data_buku.tgl_ditambahkan 
    FROM data_buku 
    INNER JOIN data_kategori ON data_buku.id_kategori = data_kategori.id_kategori";
$result = mysqli_query($conn, $query);
?>

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
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['judul'] ?></td>
                                    <td><?= $row['kode_isbn'] ?></td>
                                    <td><span class="badge bg-success"><?= $row['nama'] ?></span></td>
                                    <td><?= $row['stok'] ?></td>
                                    <td><?= $row['tgl_ditambahkan'] ?></td>
                                    <td>
                                        <a href="index.php?page=detail-buku&id=<?= $row['id_buku'] ?>" class="btn btn-info">Detail</a>
                                        <a href="index.php?page=ubah-buku&id=<?= $row['id_buku'] ?>" class="btn btn-warning">Ubah</a>
                                        <a href="index.php?page=hapus-buku&id=<?= $row['id_buku'] ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data buku tersedia.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>