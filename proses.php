<?php
include 'connect.php';
//method untuk menambahkan data pada tabel
if(isset($_POST['btnProses'])){
    $noMenu = $_POST['noMenu'];
    $jenis = $_POST['jenis'];
    $kategori = $_POST['kategori'];
    $namaMenu = $_POST['namaMenu'];
    $harga = $_POST['harga'];
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO menu VALUES('$noMenu', '$jenis', '$kategori', '$namaMenu', '$harga')";
        $sql=mysqli_query($konek,$query);
        if($sql){
            header('location:index.php');
        }
    }
//method untuk mengedit data pada tabel
$query="UPDATE menu set noMenu='$noMenu', kategori='$kategori', namaMenu='$namaMenu', harga='$harga', jenis='$jenis'
where noMenu='$_POST[noMenu]' ";
$sql=mysqli_query($konek,$query);
if($sql){
    header('location:index.php');
}
//method untuk menghapus data pada tabel
}elseif($_GET['hapus']){
    $query="DELETE FROM agent WHERE id='$_GET[hapus]'";
    $sql=mysqli_query($konek,$query);
    if($sql){
        header('location:index.php');
    }
}
?>