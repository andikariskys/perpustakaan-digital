<?php
$sql = "SELECT dp.id_peminjaman, dp.tgl_pinjam, dp.tgl_kembali, dp.status, db.judul AS nama_buku, dp.nama_siswa, dp.kelas 
FROM data_peminjaman dp
JOIN data_buku db ON dp.id_buku = db.id_buku";
$result = mysqli_query($conn, $sql);
?>

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
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $status_button = ($row['status'] == 'dipinjam')
                                    ? "<a href='#' class='btn btn-sm btn-success'>Dipinjam</a>"
                                    : $row['status'];
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama_buku'] ?></td>
                                    <td><?= $row['nama_siswa'] ?></td>
                                    <td><?= $row['kelas'] ?></td>
                                    <td><?= $row['tgl_pinjam'] ?></td>
                                    <td><?= $row['tgl_kembali'] ?></td>
                                    <td><?= $status_button ?></td>
                                    <td>
                                        <a href="index.php?page=tambah-peminjaman&id_peminjaman=<?= $row['id_peminjaman'] ?>" class="btn btn-warning">Ubah</a>
                                        <a href="#" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='8'>Tidak ada data peminjaman.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>