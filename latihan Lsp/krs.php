<?php
	require_once "core/init.php";
	require_once "view/layout/header.php";
    $tampil     = tampil_data('t_krs_mhs');
       
    ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <a href="krs_tambah.php" class="btn btn-info"> Tambah KRS </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>kd_matkul</th>
                    <th>thn_semester</th>
                    <th>nim_mhs</th>
                    <th>kd_prodi</th>
                    <th>kd_kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($tampil)): ?> 
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $row['kd_matkul']?></td>
                    <td><?= $row['thn_semester']?></td>
                    <td><?= $row['nim_mhs']?></td>
                    <td><?= $row['kd_prodi']?></td>
                    <td><?= $row['kd_kelas']?></td>
                    <td>
                        <a href="krs_edit.php?id=<?= $row['id_krs_mhs'] ?>" class="btn btn-warning"> Edit </a>
                        <a href="krs_hapus.php?id=<?= $row['id_krs_mhs'] ?>" class="btn btn-danger"> Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>   
               
                
            </tbody>
        </table>
    </div>
</main>
<?php require_once "view/layout/footer.php";?>