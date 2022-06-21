<?php
ob_start();

	require_once('koneksi.php');

	$querySql	= "DELETE FROM nilaimhs WHERE kd_mk = '$_GET[kd_mk]'";
	
	$deleteData = mysqli_query($koneksi, $querySql);
	
	if($deleteData)
		
	{			
		header("location: nilai.php");
	}
?>