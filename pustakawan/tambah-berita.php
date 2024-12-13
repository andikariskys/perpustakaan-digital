<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Berita</h3>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judulBerita">Judul Berita</label>
                        <input type="text" class="form-control" id="judulBerita" name="judul-berita" placeholder="Peluncuran Aplikasi Pembelajaran Baru" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="deskripsiBerita">Deskripsi Berita</label>
                        <textarea class="form-control" id="deskripsiBerita" name="deskripsi-berita" rows="4" required placeholder="Pemerintah meluncurkan aplikasi pembelajaran baru yang dapat diakses oleh semua pelajar di Indonesia. Aplikasi ini dirancang untuk memudahkan proses pembelajaran di luar sekolah, dengan fitur-fitur interaktif seperti video pembelajaran, kuis, dan forum diskusi."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tglBerita">Tanggal Berita</label>
                        <input type="date" class="form-control" id="tglBerita" name="tgl-berita" required>
                    </div>
                    <div class="form-group">
                        <label for="gambarBerita">Gambar Berita</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambarBerita" name="gambar-berita" required>
                                <label class="custom-file-label" for="gambarBerita">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>