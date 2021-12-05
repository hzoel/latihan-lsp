<?php
	require_once "core/init.php";
	require_once "view/layout/header.php";
    $tampil_user     = tampil_data('m_mahasiswa');
       
    ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <a href="tambah_mhs.php" class="btn btn-info"> Tambah Mahasiswa </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>kode Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($tampil_user)): ?> 
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $row['nm_mhs']?></td>
                    <td><?= $row['nim_mahasiswa']?></td>
                    <td><?= $row['kd_prodi']?></td>
                    <td>
                        <a href="edit_mhs.php?id=<?= $row['nim_mahasiswa'] ?>" class="btn btn-warning"> Edit </a>
                        <a href="delete_mhs.php?id=<?= $row['nim_mahasiswa'] ?>" class="btn btn-danger"> Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>   
               
                
            </tbody>
        </table>
    </div>
</main>
<?php require_once "view/layout/footer.php";?>