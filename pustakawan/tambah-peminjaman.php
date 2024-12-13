<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <form method="POST" action="#">
                <div class="card-body">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="judul-buku" required>
                            <option value="" selected disabled>Pilih kategori</option>
                            <option value="Pemrograman Web Modern">Pemrograman Web Modern</option>
                            <option value="Belajar Database MySQL">Belajar Database MySQL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="namaSiswa">Nama Siswa</label>
                        <input type="text" class="form-control" id="namaSiswa" name="nama-siswa" placeholder="Ali Budi" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="inputKelas">Kelas</label>
                        <input type="text" class="form-control" id="inputKelas" name="kelas" placeholder="IV-A" required maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="tglPinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tglPinjam" name="tgl-pinjam" required>
                    </div>
                    <div class="form-group">
                        <label for="tglKembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tglKembali" name="tgl-kembali" required>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>