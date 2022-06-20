<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Anggota</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Anggota</h6>
        </div>
        <div class="card-body">
            <form action="cek_login.php" method="post" class="user">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="username" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="name">Tanggal lahir</label>
                    <input type="date" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" placeholder="Desa / Kecamatan / Kabupaten" required>
                </div>
                <div class="form-group">
                    <label for="inputState">Jenis Kelamin</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <input type="submit" value="Simpan" class="btn btn-primary">
                <a href="index.php?page=anggota" class="btn btn-danger">Batal</a>
                <hr>
            </form>
        </div>
    </div>
</div>