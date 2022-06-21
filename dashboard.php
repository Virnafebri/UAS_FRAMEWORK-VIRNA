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
        <li class="nav-item">
        <a class="nav-link text-white" href="login.php"><i class="fas fa-paper-plane mr-2"></i> Log out</a><hr class="bg-secondary">
      </li>

      </ul>
    </div>

    <div class="col-md10 p-5 pt-2">
      <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3>
      </hr>

      <div class="row text-white">
        <div class="card bg-info ml-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-user-graduate mr-3"></i>
            </div>
            <h5 class="card-title">JUMLAH MAHASISWA</h5>
            <div class="display-4">1.200</div>
            <a class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>

          </div>
        </div>
        <div class="card bg-success ml-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-chalkboard-teacher mr-2"></i>
            </div>
            <h5 class="card-title">JUMLAH DOSEN</h5>
            <div class="display-4">58</div>
            <a class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>

          </div>
        </div>
        <div class="card bg-danger ml-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-user-edit mr-2"></i>
            </div>
            <h5 class="card-title">JUMLAH STAF</h5>
            <div class="display-4">21</div>
            <a class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>

          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="card ml-5 text-white text-center" style="width: 18rem;">
          <div class="card-header bg-danger display-4 pt-4 pb-4">
            <i class="fab fa-instagram-square"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-danger">INSTAGRAM</h5>
            <a href="#" class="btn btn-danger">FOLLOW</a>
          </div>
        </div>

        <div class="card ml-5 text-white text-center" style="width: 18rem;">
          <div class="card-header text-info display-4 pt-4 pb-4">
            <i class="fab fa-facebook-f"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-info">FACEBOOK</h5>
            <a href="#" class="btn btn-info">LIKE</a>
          </div>
        </div>

        <div class="card ml-5 text-white text-center" style="width: 18rem;">
          <div class="card-header bg-primary display-4 pt-4 pb-4">
            <i class="fab fa-twitter-square"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-primary">TWITTER</h5>
            <a href="#" class="btn btn-primary">FOLLOW</a>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin.js"></script>
</body>

</html>