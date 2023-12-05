<?php
include 'connect.php';
if(isset($_POST['btnProses'])){
    $id_kasir = $_POST['id_kasir'];
    $nama_kasir = $_POST['nama_kasir'];
    $no_telp = $_POST['no_telp'];
    $gaji = $_POST['gaji'];
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO kasir VALUES('$id_kasir', '$nama_kasir', '$no_telp', '$gaji')";
        $sql=mysqli_query($konek,$query);
        if($sql){
            header('location:datakasir.php');
        }
    }

$query="UPDATE kasir set id_kasir='$id_kasir', nama_kasir='$nama_kasir', no_telp='$no_telp', gaji='$gaji'
where id_kasir='$_POST[id_kasir]' ";
$sql=mysqli_query($konek,$query);
if($sql){
    header('location:datakasir.php');
}
}elseif($_GET['hapus']){
    $query="DELETE FROM kasir WHERE id_kasir='$_GET[hapus]'";
    $sql=mysqli_query($konek,$query);
    if($sql){
        header('location:datakasir.php');
    }
}
?>