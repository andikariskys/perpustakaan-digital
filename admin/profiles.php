<div class="content">
    <div class="container-fluid py-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ubah Informasi Akun</h3>
            </div>
            <form method="POST" action="#">
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Alexander Grahamm Bell" required maxlength="50" value="Fahmi Rahman">
                    </div>
                    <div class="form-group">
                        <label for="emailUser">Email Anda</label>
                        <input type="email" class="form-control" id="emailUser" placeholder="Alexander@email.com" required maxlength="50" value="admin@email.com">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </div>
            </form>
        </div>
        <hr>
        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
            <p>
                Akun Anda saat ini statusnya masih <strong>Non-aktif</strong> silakan ubah password terlebih dahulu agar akun menjadi aktif. <br>
                <i>Abaikan pesan ini jika Anda tidak ingin memperbarui password.</i>
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Ubah Password</h3>
            </div>
            <form method="POST" action="#">
                <div class="card-body">
                    <div class="form-group"> <label for="currentPassword">Password saat ini</label>
                        <div class="input-group"> <input type="password" class="form-control" id="currentPassword" placeholder="********" required maxlength="30">
                            <div class="input-group-append"> <span class="input-group-text toggle-password" onclick="togglePassword('currentPassword')"><i class="fas fa-eye"></i></span> </div>
                        </div>
                    </div>
                    <div class="form-group"> <label for="newPassword">Password baru</label>
                        <div class="input-group"> <input type="password" class="form-control" id="newPassword" placeholder="********" required maxlength="30">
                            <div class="input-group-append"> <span class="input-group-text toggle-password" onclick="togglePassword('newPassword')"><i class="fas fa-eye"></i></span> </div>
                        </div>
                    </div>
                    <div class="form-group"> <label for="reNewPassword">Password baru (ulangi)</label>
                        <div class="input-group"> <input type="password" class="form-control" id="reNewPassword" placeholder="********" required maxlength="30">
                            <div class="input-group-append"> <span class="input-group-text toggle-password" onclick="togglePassword('reNewPassword')"><i class="fas fa-eye"></i></span> </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function togglePassword(fieldId) {
        var passwordField = document.getElementById(fieldId);
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>