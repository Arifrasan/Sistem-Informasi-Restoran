<!doctype html>

<?php
session_start();
if(isset($_SESSION['username'])){
  header('location:index.php');
  exit;
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
<?php
if(isset($_GET['pesan'])){
?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Login Gagal</strong> <?php echo $_GET['pesan']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

  <div class="card">
  <div class="card-header">
    Halaman Login
    </div>
    <form action="ceklogin.php" method="post">
        <div class="card-body">
        <label for="username" class="form-label">Username</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></span>
  <input type="text" class="form-control" id="username" name="username" 
  required placeholder="Masukkan Username" aria-describedby="basic-addon3">
</div>
<label for="pass" class="form-label">Password</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg></span>
  <input type="password" class="form-control" id="pass" name="pass" 
  required placeholder="Masukkan Password" aria-describedby="basic-addon3">
</div>
<div class="row">
    <button type="submits" class="btn btn-primary" name="btnLogin">Login</button>
</div>
<div class="text-center">
    Belum punya akun silahkan <a href="daftar.php">Daftar</a>
</div>
        </div>   
    </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>