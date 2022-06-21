<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.min.css">


</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN ||<b>UNIVERSITAS TEKNOLOGI SUMBAWA</b></a>

    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
      <h5>
        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notivikasi"></i></i>
        <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></i>
      </h5>

    </div>
    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="daftar_siswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="daftar_dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Dosen</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="matakuliah.php"><i class="fas fa-user-edit mr-2"></i> Mata Kuliah</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kuliah</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i> Nilai Mahasiswa</a>
          <hr class="bg-secondary">
        </li>

      </ul>
    </div>

<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	$kdMk    = $_POST['kd_mk']; 
	$kdDos     = $_POST['kd_dos'];
	$hari  = $_POST['hari'];
  $jam   = $_POST['jam'];

	$queryMysql = "INSERT INTO jadwal (kd_mk,kd_dos,hari,jam) VALUES ('$kdMk','$kdDos','$hari','$jam')";
	$simpanData = mysqli_query($koneksi, $queryMysql);

	if ($simpanData) {

		header("location: jadwal.php") ;
	} else {
		echo 'data gagal disimpan';
	}
}

?>

 <div class="col-md10 p-5 pt-2">
<div class="alert alert-info">
	<h3 class="text-center">Tambah Data Jadwal Kuliah Mahasiswa</h3>
</div>
<form method="POST" action="" class="form-group">
	<div class="mb-2 row">
		<label for="inputnama" class="col-sm-2 col-form-label">Kode Matakuliah</label>
		<div class="col-sm-4">
			<input type="text" name="kd_mk" placeholder="Masukkan matakuliah" size="80" class="form-control" />
		</div>
	</div>

<div class="mb-2 row">
    <label for="inputnama" class="col-sm-2 col-form-label">Kode Dosen</label>
    <div class="col-sm-4">
      <input type="text" name="kd_dos" placeholder="Masukkan kode dosen" size="80" class="form-control" />
    </div>
</div>

	<div class="mb-2 row">
		<label for="inputnama" class="col-sm-2 col-form-label">Hari</label>
		<div class="col-sm-4">
			<input type="text" name="hari" placeholder="Masukkan hari" size="35" class="form-control" />
		</div>
	</div>

<div class="mb-2 row">
    <label for="inputnama" class="col-sm-2 col-form-label">Jam</label>
    <div class="col-sm-4">
      <input type="text" name="jam" placeholder="Masukkan jam" size="80" class="form-control" />
    </div>
  </div>

	<br /><br />

	<input name="simpan" type="submit" value="Simpan Data" class="btn btn-outline-info" />
</form>
</div>
</body>

</html>