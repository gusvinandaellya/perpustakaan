<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Anggota</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Anggota 
            <a href="index.php?page=tambahanggota" class="btn btn-primary btn-sm float-right m-0">Tambah Anggota</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        $no     = 1;
                        $query  = mysqli_query($con, "SELECT * FROM anggota");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['tanggal_lahir']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['jenkel']; ?></td>
                            <td>
                                <a href="index.php?page=editanggota&id=<?php echo $data['id_anggota']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="page/hapusanggota.php" class="btn btn-danger btn-sm">Hapus</a>
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