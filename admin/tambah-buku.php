<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Buku</h3>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label abel for="judulBuku">Judul Buku</label>
                        <input type="text" class="form-control" id="judulBuku" name="judul-buku" placeholder="Laskar Pelangi" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label abel for="namaPengarang">Nama Pengarang</label>
                        <input type="text" class="form-control" id="namaPengarang" name="nama-pengarang" placeholder="Andrea Hirata" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label abel for="namaPenerbit">Nama Penerbit</label>
                        <input type="text" class="form-control" id="namaPenerbit" name="nama-penerbit" placeholder="Bentang Pustaka" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label abel for="kodeIsbn">Kode ISBN (kode barcode buku)</label>
                        <input type="text" class="form-control" id="kodeIsbn" name="kode-isbn" placeholder="978-1234567890" required maxlength="15">
                    </div>
                    <div class="form-group">
                        <label>Kategori Buku</label>
                        <select class="form-control select2bs4" style="width: 100%;" id="kategoriBuku" name="kategori-buku" required>
                            <option value="" selected disabled>Pilih kategori</option>
                            <option value="pemrograman">Pemrograman</option>
                            <option value="database">Database</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label abel for="jumlahStok">Jumlah Stok Buku</label>
                        <input type="number" class="form-control" id="jumlahStok" name="jumlah-stok" placeholder="10" required>
                    </div>
                    <div class="form-group">
                        <label abel for="deskripsiBuku">Deskripsi</label>
                        <textarea class="form-control" id="deskripsiBuku" name="deskripsi-buku" rows="4" required placeholder="Cerita terjadi di Desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="coverBuku">Cover Buku</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="coverBuku" name="cover-buku" required>
                                <label class="custom-file-label" for="coverBuku">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>