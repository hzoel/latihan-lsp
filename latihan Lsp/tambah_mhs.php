<?php
	require_once "core/init.php";
	

	require_once "view/layout/header.php";
		$error="";
		if(isset($_POST['submit']))
			{
                $nim_mahasiswa   =  $_POST['nim_mahasiswa'];
                $kd_prodi        =  $_POST['kd_prodi'];
                $nm_mhs          = $_POST['nm_mhs'];
                $tempat_lhr_mhs  =  $_POST['tempat_lhr_mhs'];
                $agama           =  $_POST['agama'];
                $tgl_lhr_mhs     = $_POST['tgl_lhr_mhs'];
                $jenis_klmn_mhs  =  $_POST['jenis_klmn_mhs'];
                $tgl_msk_mhs        =  $_POST['tgl_msk_mhs'];
                $kd_status_mhsnama           = $_POST['kd_status_mhsnama'];
                $alamat_mhs          =  $_POST['alamat_mhs'];
                $tlp_mhs             =  $_POST['tlp_mhs'];

				if(!empty($nim_mahasiswa))
					{
                       
						if(tambah_data_mhs($nim_mahasiswa,$kd_prodi,$nm_mhs,$tempat_lhr_mhs,$agama, $tgl_lhr_mhs,$jenis_klmn_mhs,$tgl_msk_mhs,$kd_status_mhsnama,$alamat_mhs,$tlp_mhs))
						{
							echo "<meta http-equiv = 'refresh' content = '1;url=index.php'>";
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
        <h4 class="mb-3">Mahasiswa</h4>
        <form class="needs-validation" action="" method="post">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="firstName">Nim Mahasiswa</label>
                    <input type="text" class="form-control" id="firstName" name="nim_mahasiswa" placeholder=""  required>
                    
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Kode Prodi</label>
                    <input type="text" class="form-control" id="lastName" name="kd_prodi" placeholder="" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="lastName" name="nm_mhs" placeholder=""  required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="firstName">Tempat Lahir</label>
                    <input type="text" class="form-control" id="firstName" name="tempat_lhr_mhs" placeholder=""  required>
                    
                </div>
               
                <div class="col-md-12 mb-3">
                    <label for="lastName">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                        <option value="Islam" selected>Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                   
                </div>
                <div class="col-md-12 mb-3">
                    <label for="firstName">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="firstName" name="tgl_lhr_mhs" placeholder=""  required>
                    
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Jenis Kelamin</label>
                    <div class="custom-control custom-radio">
                        <input id="credit" name="jenis_klmn_mhs" value="L" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Laki - laki</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="jenis_klmn_mhs" value="P" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Perempuan</label>
                    </div>
                  
                   
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="lastName" name="tgl_msk_mhs" placeholder="" required>
                    
                </div>
              
                <div class="col-md-12 mb-3">
                    <label for="lastName">status</label>
                    <div class="custom-control custom-radio">
                        <input id="credit" name="kd_status_mhsnama" value="1" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Aktif</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="kd_status_mhsnama" value="2" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Tidak Aktif</label>
                    </div>
                  
                   
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Alamat</label>
                    <input type="text" class="form-control" id="lastName" name="alamat_mhs" placeholder=""  required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName">tlpn</label>
                    <input type="text" class="form-control" id="lastName" name="tlp_mhs" placeholder=""  required>
                </div>
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-info" value="Simpan" name="submit">
                </div>
               
            </div>
        </form>
    </div>
</main>



<?php require_once "view/layout/footer.php";?>