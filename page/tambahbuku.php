<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Buku</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Buku</h6>
        </div>
        <div class="card-body">
            <form action="cek_login.php" method="post" class="user">
                <div class="form-group">
                    <label for="name">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
                </div>
                <div class="form-group">
                    <label for="name">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang Buku" required>
                </div>
                <input type="submit" value="Simpan" class="btn btn-primary">
                <a href="index.php?page=buku" class="btn btn-danger">Batal</a>
                <hr>
            </form>
        </div>
    </div>
</div>