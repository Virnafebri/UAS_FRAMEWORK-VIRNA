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
        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="daftar_siswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="daftar_dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Dosen</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="matakuliah.php"><i class="fas fa-user-edit mr-2"></i> Mata Kuliah</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kuliah</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i> Nilai Mahasiswa</a><hr class="bg-secondary">
      </li>
     
    </ul>
        </div>
        <div class="col-md10 p-5 pt-2">
          <h3><i class="fas fa-calendar-alt mr-2"></i> DAFTAR JADWAL KULIAH</h3></hr>

          <a href="tambah_jadwal.php" class="btn btn-primary mb-2"><i class="fas fa-plus mr-2"></i> TAMBAH DAFTAR JADWAL KULIAH</a>

          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Kode Dosen</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th colspan="3" scope="col"><center>Aksi</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';
      $no = 1;
      $sql = "SELECT * FROM jadwal";

      $result = mysqli_query($koneksi, $sql);

      while ($data = mysqli_fetch_assoc($result)) {

      ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $data['kd_mk'] ?></td>
          <td><?php echo $data['kd_dos'] ?></td>
          <td><?php echo $data['hari'] ?></td>
          <td><?php echo $data['jam'] ?></td>
          
          <td>
            
            <a onClick="return confirm('Data yang sudah dihapus tidak dapat dikembalikan!?')" href="hapus_jadwal.php?kd_mk=<?php echo $data['kd_mk'] ?>"><button type="button" class="btn btn-warning">Hapus</button></a>
          </td>
        </tr>
      <?php } ?>
              
            </tbody>
          </table>

        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>