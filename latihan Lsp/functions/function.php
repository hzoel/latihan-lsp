<?php


// fungsi global
function escape($data)
{
	global $link;
	return mysqli_real_escape_string ($link, $data);

} 
function result($query)
{
	global $link;
	if($result = mysqli_query($link, $query) or die ('gagal menampilkan data'))
	{
		return $result;
	}
}

function run($query)
	{
		global $link;
		//var_dump(mysqli_query($link, $query));die();
		if(mysqli_query($link, $query))
		return true; else return false;	
	}


function login($username, $password)
{
	$username = escape($username);
	$password = escape ($password);
	$ps 	 = md5($password);
	$query = "SELECT * FROM tb_user WHERE username='$username' AND password='$ps'";
	global $link;
	if($result = mysqli_query($link, $query))
	{
		if(mysqli_num_rows($result) !=0) return true;
				else
					return false;
	}
}

function tampil_data($tbl){
	$query = "SELECT * FROM $tbl  ";
	return result($query);

}
function tambah_data_mhs($nim_mahasiswa,$kd_prodi,$nm_mhs,$tempat_lhr_mhs,$agama, $tgl_lhr_mhs,$jenis_klmn_mhs,$tgl_msk_mhs,$kd_status_mhs,$alamat_mhs,$tlp_mhs){
	$query = "INSERT INTO m_mahasiswa (nim_mahasiswa, kd_prodi, nm_mhs,tempat_lhr_mhs,agama,tgl_lhr_mhs,jenis_klmn_mhs,tgl_msk_mhs,kd_status_mhs,alamat_mhs,tlp_mhs) VALUES
	 ('$nim_mahasiswa', '$kd_prodi','$nm_mhs','$tempat_lhr_mhs','$agama','$tgl_lhr_mhs','$jenis_klmn_mhs','$tgl_msk_mhs','$kd_status_mhs','$alamat_mhs','$tlp_mhs')";
	return run($query);
}


function edit_mhs($id){
	
	$query = "SELECT * FROM m_mahasiswa WHERE nim_mahasiswa = $id ";
	return result($query);

}

function update_mhs($nim_mahasiswa,$kd_prodi,$nm_mhs,$tempat_lhr_mhs,$agama, $tgl_lhr_mhs,$jenis_klmn_mhs,$tgl_msk_mhs,$kd_status_mhs,$alamat_mhs,$tlp_mhs){
	$query  = " UPDATE m_mahasiswa SET 
				nim_mahasiswa	='$nim_mahasiswa',
				kd_prodi	 	='$kd_prodi',
				nm_mhs	 		='$nm_mhs',
				tempat_lhr_mhs	='$tempat_lhr_mhs',
				agama	 		='$agama',
				tgl_lhr_mhs	 	='$tgl_lhr_mhs',
				jenis_klmn_mhs	='$jenis_klmn_mhs',
				tgl_msk_mhs	 	='$tgl_msk_mhs',
				kd_status_mhs	='$kd_status_mhs',
				alamat_mhs	 	='$alamat_mhs',
				tlp_mhs	 		='$tlp_mhs' where nim_mahasiswa = '$nim_mahasiswa'
				";
	return result($query);
}
function delete_mhs($id){
	$query = " DELETE FROM m_mahasiswa WHERE nim_mahasiswa=$id ";
	return run($query);
}

function tambah_data_sms($kd_semester,$ket_semester,$thn_semester){
	$query = "INSERT INTO m_semester (kd_semester, ket_semester, thn_semester) VALUES
	('$kd_semester', '$ket_semester','$thn_semester')";
   return run($query);

}

function edit_sms($id){
	$query = "SELECT * FROM m_semester WHERE kd_semester = $id ";
	return result($query);

}

function edit_data_sms($kd_semester,$ket_semester,$thn_semester){
	$query  = " UPDATE m_semester SET 
				kd_semester	='$kd_semester',
				ket_semester	 	='$ket_semester',
				thn_semester	 		='$thn_semester' where kd_semester = '$kd_semester'
				";
	return result($query);

	
}

function delete_sms($id){
	$query = " DELETE FROM m_semester WHERE kd_semester=$id ";
	return run($query);
}

function tambah_data_krs($kd_matkul,$thn_semester,$nim_mhs,$kd_prodi,$kd_kelas){
	$query = "INSERT INTO t_krs_mhs (kd_matkul, thn_semester, nim_mhs,kd_prodi, kd_kelas) VALUES
	('$kd_matkul', '$thn_semester','$nim_mhs', '$kd_prodi','$kd_kelas')";
   return run($query);

}

function edit_krs($id){
	$query = "SELECT * FROM t_krs_mhs WHERE id_krs_mhs = $id ";
	return result($query);

}

function edit_data_krs($kd_matkul,$thn_semester,$nim_mhs,$kd_prodi,$kd_kelas,$id){
	$query  = " UPDATE t_krs_mhs SET 
				kd_matkul	='$kd_matkul',
				thn_semester	 	='$thn_semester',
				nim_mhs	 		='$nim_mhs' ,
				kd_prodi	 	='$kd_prodi',
				kd_kelas	 		='$kd_kelas' 
				
				where id_krs_mhs = '$id'
				";
	return result($query);

	
}

function delete_krs($id){
	$query = " DELETE FROM t_krs_mhs WHERE id_krs_mhs=$id ";
	return run($query);
}


?>