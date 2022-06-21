<?php

	require_once('koneksi.php');

	$querySql	= "DELETE FROM jadwal WHERE kd_mk = '$_GET[kd_mk]'";
	
	$deleteData = mysqli_query($koneksi, $querySql);
	
	if($deleteData)
		
	{			
		header("location: jadwal.php");
	}
?>