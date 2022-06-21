<?php

	require_once('koneksi.php');

	$querySql	= "DELETE FROM dosen WHERE kd_dos = '$_GET[kd_dos]'";
	
	$deleteData = mysqli_query($koneksi, $querySql);
	
	if($deleteData)
		
	{			
		header("location: daftar_dosen.php");
	}
?>