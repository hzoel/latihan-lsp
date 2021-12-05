<?php
	if(!$_SESSION['user'])
		{
			header('Location:index.php');
		}

	require_once "core/init.php";
	if(isset($_GET['id']))
	{
		if(delete_mhs($_GET['id']))
			{
				echo "<meta http-equiv = 'refresh' content = '1;url=index.php'>";
			}

		else echo "gagal menghapus data";
	}
?>