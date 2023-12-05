<?php
include 'connect.php';
if(isset($_POST['btnProses'])){
    $kode_pelanggan = $_POST['kode_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_telp = $_POST['no_telp'];
    $gaji = $_POST['gaji'];
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO pelanggan VALUES('$kode_pelanggan', '$nama_pelanggan', '$no_telp')";
        $sql=mysqli_query($konek,$query);
        if($sql){
            header('location:datapembeli.php');
        }
    }

$query="UPDATE pelanggan set kode_pelanggan='$kode_pelanggan', nama_pelanggan='$nama_pelanggan', no_telp='$no_telp'
where kode_pelanggan='$_POST[kode_pelanggan]' ";
$sql=mysqli_query($konek,$query);
if($sql){
    header('location:datapembeli.php');
}
}elseif($_GET['hapus']){
    $query="DELETE FROM pelanggan WHERE kode_pelanggan='$_GET[hapus]'";
    $sql=mysqli_query($konek,$query);
    if($sql){
        header('location:datapembeli.php');
    }
}
?>