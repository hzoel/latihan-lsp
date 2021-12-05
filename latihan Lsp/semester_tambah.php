<?php
	require_once "core/init.php";
	

	require_once "view/layout/header.php";
		$error="";
		if(isset($_POST['submit']))
			{
                $kd_semester   =  $_POST['kd_semester'];
                $ket_semester        =  $_POST['ket_semester'];
                $thn_semester          = $_POST['thn_semester'];
               

				if(!empty($kd_semester))
					{
                       
						if(tambah_data_sms($kd_semester,$ket_semester,$thn_semester))
						{
							echo "<meta http-equiv = 'refresh' content = '1;url=semester.php'>";
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
        <h4 class="mb-3">Semester</h4>
        <form class="needs-validation" action="" method="post">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="firstName">Kode Semester</label>
                    <input type="text" class="form-control" id="firstName" name="kd_semester" placeholder=""  required>
                    
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Keterangan semester</label>
                    <input type="text" class="form-control" id="lastName" name="ket_semester" placeholder="" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">thn Semster</label>
                    <input type="text" class="form-control" id="lastName" name="thn_semester" placeholder=""  required>
                </div>
               
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-info" value="Simpan" name="submit">
                </div>
               
            </div>
        </form>
    </div>
</main>



<?php require_once "view/layout/footer.php";?>