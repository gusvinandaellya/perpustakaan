<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Peminjaman</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Peminjaman</h6>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Pinjam buku
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pinjam Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="" class="user">
                        <input type="hidden" name="id_detailpeminjaman" class="form-control" id="judul">
                        <div class="form-group">
                            <label for="inputCity">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="form-group">
                            <label for="inputZip">ID Buku</label>
                            <input type="text" name= "id_buku" class="form-control" id="id_buku">
                        </div>
                        <div class="form-group">
                            <label for="inputZip">Tanggal Pengembalian</label>
                            <input type="date" name= "tgl_kembali" class="form-control" id="id_buku">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <h5 class="m-2 font-weight-bold text-primary">Buku yang dipinjam</h5>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Komet</td>
                            <td><?php echo date('Y-m-h'); ?></td>
                            <td><?php echo date('Y-m-h'); ?></td>
                            <td>
                                <a href="page/hapusbuku.php" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form action="" method="post" class="user">
                <div class="form-group">
                    <label for="name">Nama Petugas</label>
                    <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama Peminjam</label>
                    <input type="text" name="username" value="Eka Wahyu Budi Santoso" class="form-control" required>
                </div>
                <a href="index.php?page=peminjaman" class="btn btn-primary">Kembali</a>
                <hr>
            </form>
        </div>
    </div>
</div>