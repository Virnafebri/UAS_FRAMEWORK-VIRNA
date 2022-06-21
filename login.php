<?php
ob_start();
session_start();
require_once('koneksi.php');

if (isset($_POST['login'])) {
    $userName = $_POST['username'];
    $password = md5($_POST['password']);

    $query    = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$userName'");
    $data     = mysqli_fetch_assoc($query);

    if (!empty($data)) {
        echo '<h4>Username terdaftar!</h4>';
        if ($password == $data['password']) {

            $_SESSION['id_user']   = $data['username'];
            $_SESSION['nama']      = $data['nama_user'];
            $_SESSION['level']     = 'admin';
            header('location: dashboard.php');
        } else {
            echo 'Password salah!!';
        }
    } else {
        if (!empty($data)) {
            echo '<h4>Username terdaftar!</h4>';
            if ($password == $data['password']) {

                $_SESSION['id_user']   = $data['username'];
                $_SESSION['nama']      = $data['nama_user'];
                $_SESSION['level']     = 'kader';
                header('location: dashboard.php');
            } else {
                echo 'Password salah!!';
            }
        }
        echo '<h4>Username salah!</h4>';
    }
}
?>
<html>

<head>
    <title>UNIVERSITAS TEKNOLOGI SUMBAWA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center bg-info">
                        <img src="bootstrap/img/1.jpg" alt="" class="circle" width="80" height="80">
                        <h4 class="font-weight-bold">UNIVERSITAS TEKNOLOGI SUMBAWA</h4>
                    </div>
                    <div class="card-body px-4">
                        <form method="POST" action="">
                            <div class="row mb -2">

                                <input name="username" type="text" class="form-control mb-2" placeholder="Username" />

                                <input name="password" for type="password" class="form-control mb-2" placeholder="Password" />
                            </div>
                            <div class="row">
                                <button name="login" type="submit" class="btn btn-info">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>