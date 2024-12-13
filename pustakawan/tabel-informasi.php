<?php
// Query untuk mengambil data informasi
$sql = "SELECT * FROM data_informasi ORDER BY tgl_pembuatan DESC";
$result = mysqli_query($conn, $sql); ?>

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
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                <td><?= $no++ ?></td>
                            <td><?= $row['judul'] ?></td>
                            <td><?= substr($row['deskripsi'], 0, 50) ?>...</td>
                            <td><?= $row['tgl_pembuatan'] ?></td>
                            <td>
                                <a href="index.php?page=detail-informasi&id_informasi=<?= $row['id_informasi'] ?>" class="btn btn-info">Detail</a>
                                <a href="index.php?page=tambah-informasi&id_informasi=<?= $row['id_informasi'] ?>" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus informasi ini?')">Hapus</a>
                            </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada informasi.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>