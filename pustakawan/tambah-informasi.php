<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Informasi</h3>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judulInformasi">Judul Informasi</label>
                        <input type="text" class="form-control" id="judulInformasi" name="judul-informasi" placeholder="Informasi Layanan Peminjaman Buku" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="deskripsiInformasi">Deskripsi Informasi</label>
                        <textarea class="form-control" id="deskripsiInformasi" name="deskripsi-informasi" rows="4" required placeholder="Peminjaman buku di perpustakaan sekolah merupakan layanan yang sangat penting untuk mendukung kegiatan belajar mengajar di sekolah. Perpustakaan menyediakan berbagai jenis buku, mulai dari buku pelajaran, buku referensi, hingga buku bacaan ringan yang dapat membantu siswa meningkatkan pengetahuan dan keterampilan mereka. Informasi mengenai prosedur peminjaman buku akan memudahkan siswa dalam mengakses berbagai buku yang dibutuhkan untuk mendalami materi pelajaran atau sekadar menambah wawasan umum."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambarInformasi">Gambar Informasi</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambarInformasi" name="gambar-informasi" required>
                                <label class="custom-file-label" for="gambarInformasi">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>