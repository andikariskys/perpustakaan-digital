<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Acara</h3>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judulAcara">Judul Acara</label>
                        <input type="text" class="form-control" id="judulAcara" name="judul-acara" placeholder="Acara Penghargaan Tahunan" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="deskripsiAcara">Deskripsi Acara</label>
                        <textarea class="form-control" id="deskripsiAcara" name="deskripsi-acara" rows="4" required placeholder="Acara penghargaan tahunan adalah kegiatan yang diselenggarakan setiap tahun untuk memberikan apresiasi kepada para siswa yang telah menunjukkan prestasi luar biasa di berbagai bidang, seperti akademik, olahraga, dan seni. Dalam acara ini, para siswa yang berhasil meraih prestasi terbaik akan mendapatkan penghargaan sebagai bentuk penghormatan atas usaha dan kerja keras mereka selama setahun."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tglAcara">Tanggal Acara</label>
                        <input type="date" class="form-control" id="tglAcara" name="tgl-acara" required>
                    </div>
                    <div class="form-group">
                        <label for="waktuAcara">Waktu Mulai Acara</label>
                        <input type="time" class="form-control" id="waktuAcara" name="waktu-acara" required>
                    </div>
                    <div class="form-group">
                        <label for="tempatAcara">Tempat Acara Berlangsung</label>
                        <input type="text" class="form-control" id="tempatAcara" name="tempat-acara" placeholder="Auditorium Sekolah" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="gambarAcara">Gambar Acara</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambarAcara" name="gambar-acara" required>
                                <label class="custom-file-label" for="gambarAcara">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>