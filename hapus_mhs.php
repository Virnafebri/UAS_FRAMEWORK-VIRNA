<?php

ob_start();

	require_once('koneksi.php');

	$querySql	= "DELETE FROM mahasiswa WHERE NIM = '$_GET[NIM]'";
	
	$deleteData = mysqli_query($koneksi, $querySql);
	
	if($deleteData)
		
	{			
		header('location: daftar_siswa.php');
	}
?>