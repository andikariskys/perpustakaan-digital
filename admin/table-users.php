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
        <a href="index.php?page=add_user" class="btn btn-primary btn-sm">Tambah Data User</a>
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <p>
                <strong>Akun berhasil dibuat!<br>(Informasi Akun)</strong><br>
                <b>Email : </b> admin1@email.com<br>
                <b>Password : </b> 66f28d46f08d6<br>
                <i>Tutup informasi ini jika password sudah disalin/disimpam</i>
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
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
                        <tr>
                            <td>1</td>
                            <td>Rochman Rosyad</td>
                            <td>admin1@email.com</td>
                            <td><a href="#" class="btn btn-sm btn-success">Reset Password</a></td>
                            <td>Admin</td>
                            <td>Aktif</td>
                            <td>2024-12-08 20:12:55</td>
                            <td>
                                <a href="index.php?page=add_user" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rina Sari</td>
                            <td>pustakawan@email.com</td>
                            <td><a href="#" class="btn btn-sm btn-success">Reset Password</a></td>
                            <td>Pustakawan</td>
                            <td>Non-aktif</td>
                            <td>2024-12-08 20:12:56</td>
                            <td>
                                <a href="index.php?page=add_user" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>