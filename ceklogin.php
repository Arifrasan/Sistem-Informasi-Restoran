<?php
include 'connect.php';
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $query = mysqli_query($konek, "SELECT * from tbuser where username='$username'");
    $q = mysqli_query($konek, "SELECT * from tbuser where pass='$pass'");
    
    if(mysqli_num_rows($query) > 0 ){
        if(mysqli_num_rows($q) > 0 ){
            session_start();
            $_SESSION['username'] = $data['username'];
        header('location:index.php');
        }else{
        header('location:login.php?pesan=Password Salah');
    }
    }   else{
    header('location:login.php?pesan=Username Salah');
}
}
?>