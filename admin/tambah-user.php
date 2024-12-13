<div class="content">
    <div class="container-fluid py-2">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <form method="POST" action="#">
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="nama-lengkap" placeholder="Steven Hillerburg" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="emailUser">Email User</label>
                        <input type="email" class="form-control" id="emailUser" name="email-user" placeholder="Steven@email.com" required maxlength="50">
                    </div>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="levelPustakawan" name="level" value="pustakawan" checked required>
                        <label for="levelPustakawan">Pustakawan</label>
                    </div>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="levelAdmin" name="level" value="admin">
                        <label for="levelAdmin">Admin</label>
                    </div>
                    <p class="mt-1 mb-0"><b>Note.</b> Password akan ter-generate otomatis setelah akun selesai dibuat</p>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>