<?php
// Query untuk mengambil data user
$sql = "SELECT * FROM data_user";
$result = mysqli_query($conn, $sql); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active">Daftar User</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <a href="index.php?page=tambah-user" class="btn btn-primary btn-sm">Tambah Data User</a>
        <!-- <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <p>
                <strong>Akun berhasil dibuat!<br>(Informasi Akun)</strong><br>
                <b>Email : </b> <?= htmlspecialchars($row['email']) ?><br>
                <b>Password : </b> <?= htmlspecialchars($row['password']) ?><br>
                <i>Tutup informasi ini jika password sudah disalin/disimpam</i>
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
        <div class="card py-3 mt-2">
            <div class="table-responsive">
                <table class="table table-hover table-striped text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Tgl Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= htmlspecialchars($row['nama']) ?></td>
                                    <td><?= htmlspecialchars($row['email']) ?></td>
                                    <td><a href="#" class="btn btn-sm btn-success">Reset Password</a></td>
                                    <td><?= ucfirst($row['level']) ?></td>
                                    <td><?= ucfirst($row['status']) ?></td>
                                    <td><?= $row['tgl_pendaftaran'] ?></td>
                                    <td>
                                        <a href="index.php?page=ubah-user&id_user=<?= $row['id_user'] ?>" class="btn btn-warning">Ubah</a>
                                        <a href="#" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='8'>Tidak ada data pengguna.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>