<!doctype html>
<?php
include 'connect.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Restoran</title>
  </head>
  <body>

    <!--nav untuk membuat navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RESTORAN BASDA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datakasir.php">Data Kasir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datapembeli.php">Data Pembeli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
              </li>
          </div>
        </div>
      </nav>
      
      <!--figure untuk membuat tulisan judul-->
      <figure class="mt-3">
        <blockquote class="blockquote">
          <p>Data Pelanggan Restoran Basda</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Raja adalah pelanggan</cite>
        </figcaption>
      </figure>

      <!--button untuk membuat tombol-->
      <a href="olahpembeli.php" type="button" class="btn btn-primary mb-3">Tambah</a>

      <!--table untuk membuat tabel-->
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Kode Pelanggan</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * from pelanggan";
          $sql = mysqli_query($konek, $query);
          while ($data = mysqli_fetch_array($sql)){
          ?>
          <tr>
            <td><?php echo $data['kode_pelanggan'];?></td>
            <td><?php echo $data['nama_pelanggan'];?></td>
            <td><?php echo $data['no_telp'];?></td>
            <td><a href="olahpembeli.php?edit=<?php echo $data['kode_pelanggan']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg></a>
                <a href="prosespembeli.php?hapus=<?php echo $data['kode_pelanggan']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                </svg></a></td>
          </tr>

          <?php
          }?>
        </tbody>
      </table>
            <!-- Awal Footer -->
            <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 -  Designed by Kungcan</p>
            <a href="https://instagram.com/zakawali06?igshid=YmMyMTA2M2Y="><img src="images/icon/ig.png" class="mr-10" data-toggle="tooltip" title="Instagram"> Algalin Zakawali</a>
            <a href="https://www.instagram.com/invites/contact/?i=2gzx0bya2c7q&utm_content=1xl97rx"><img src="images/icon/ig.png" class="mr-10" data-toggle="tooltip" title="Instagram"> Dzakwan Ammar</a>
            <a href="https://instagram.com/amrinazabrila?igshid=ZDdkNTZiNTM="><img src="images/icon/ig.png" class="mr-10" data-toggle="tooltip" title="Instagram"> Zabrila Amrina</a>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>