<!doctype html>
<!-- Agar saat ditekan edit data sebelum diedit muncul dan ditekan tambah data kosong-->
<?php
include 'connect.php';
$id_kasir = "";
$nama_kasir = "";
$no_telp = "";
$gaji = "";
if(isset($_GET['edit'])){
    $id_kasir = $_GET['edit'];
    $query = "SELECT * from kasir where id_kasir='$id_kasir'";
    $sql = mysqli_query($konek,$query);
    $data = mysqli_fetch_array($sql);
    $id_kasir = $data['id_kasir'];
    $nama_kasir = $data['nama_kasir'];
    $no_telp = $data['no_telp'];
    $gaji = $data['gaji'];
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>olah</title>
  </head>
  <body>

      <!--figure untuk membuat tulisan judul-->
      <figure class="mt-3">
        <blockquote class="blockquote">
          <p>Selamat Datang di Kelola Data</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Kelola Data Menu</cite>
        </figcaption>
      </figure>

      
      
    <!--form untuk membuat form pengisian data-->
    <form action="proseskasir.php" method="post">

    <div class="mb-3 row">
    <label for="id_kasir" class="col-sm-2 col-form-label">ID Kasir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id_kasir" name="id_kasir" value="<?php echo $id_kasir; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="nama_kasir" class="col-sm-2 col-form-label">Nama Kasir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_kasir" name="nama_kasir" value="<?php echo $nama_kasir; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="no_telp" class="col-sm-2 col-form-label">No Telpon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $no_telp; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="gaji" name="gaji" value="<?php echo $gaji; ?>">
    </div>
  </div>

        <?php
        if(isset($_GET['edit'])){
            echo"<button type='submit' class='btn btn-primary'name='btnProses' value='edit'>Simpan Perubahan</button>";
        }else{
            echo"<button type='submit' class='btn btn-primary'name='btnProses' value='tambah'>Tambah Data</button>";
        }
        ?>

    </div>
    </form>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>