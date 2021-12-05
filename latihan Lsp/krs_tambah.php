<?php
	require_once "core/init.php";
	

	require_once "view/layout/header.php";
		$error="";
         $mhs     = tampil_data('m_mahasiswa');
		if(isset($_POST['submit']))
			{
                $kd_matkul   =  $_POST['kd_matkul'];
                $thn_semester        =  $_POST['thn_semester'];
                $nim_mhs          = $_POST['nim_mhs'];
                $kd_prodi        =  $_POST['kd_prodi'];
                $kd_kelas          = $_POST['kd_kelas'];
               

				if(!empty($kd_matkul))
					{
                       
						if(tambah_data_krs($kd_matkul,$thn_semester,$nim_mhs,$kd_prodi,$kd_kelas))
						{
							echo "<meta http-equiv = 'refresh' content = '1;url=krs.php'>";
						}
						else
							{
                                //var_dump('error');
								$error = 'ada masalah saat isi data';
							}
					}
					else
						{
							$error = 'Nama harus di isi !!!';
						}
			}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="col-md-12 order-md-1">
        <h4 class="mb-3">KRS</h4>
        <form class="needs-validation" action="" method="post">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="firstName">Kode Matkul</label>
                    <input type="text" class="form-control" id="firstName" name="kd_matkul" placeholder=""  required>
                    
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Tahun Semester</label>
                    <input type="text" class="form-control" id="lastName" name="thn_semester" placeholder="" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Mahasiswa</label>
                    <select name="nim_mhs" id="nim_mhs" class="form-control">
                        <?php $no = 1; while ($row = mysqli_fetch_assoc($mhs)): ?> 
                            <option value="<?= $row['nim_mahasiswa']?>"><?= $row['nm_mhs']?></option>
                        <?php endwhile; ?>   
                    </select>
                  
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Kd Kaprodi</label>
                    <input type="text" class="form-control" id="lastName" name="kd_prodi" placeholder="" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">kelas</label>
                    <input type="text" class="form-control" id="lastName" name="kd_kelas" placeholder=""  required>
                </div>
               
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-info" value="Simpan" name="submit">
                </div>
               
            </div>
        </form>
    </div>
</main>



<?php require_once "view/layout/footer.php";?>