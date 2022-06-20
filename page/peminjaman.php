<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Peminjaman</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman 
            <a href="index.php?page=tambahpeminjaman" class="btn btn-primary btn-sm float-right m-0">Tambah Peminjaman</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Petugas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        $no     = 1;
                        $query  = mysqli_query($con, "SELECT * FROM peminjaman");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                    <tbody>
                        <tr>
                        <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['nama_petugas']; ?></td>
                            <td> 
                            <a href="index.php?page=detailpeminjaman" class="btn btn-success btn-sm">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>