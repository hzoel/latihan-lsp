<?php
	require_once "core/init.php";
	require_once "view/layout/header.php";
    $tampil     = tampil_data('m_semester');
       
    ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <a href="semester_tambah.php" class="btn btn-info"> Tambah Semester </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Semster</th>
                    <th>Ket Semester</th>
                    <th>Tahun Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($tampil)): ?> 
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $row['kd_semester']?></td>
                    <td><?= $row['ket_semester']?></td>
                    <td><?= $row['thn_semester']?></td>
                    <td>
                        <a href="semester_edit.php?id=<?= $row['kd_semester'] ?>" class="btn btn-warning"> Edit </a>
                        <a href="semester_delete.php?id=<?= $row['kd_semester'] ?>" class="btn btn-danger"> Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>   
               
                
            </tbody>
        </table>
    </div>
</main>
<?php require_once "view/layout/footer.php";?>