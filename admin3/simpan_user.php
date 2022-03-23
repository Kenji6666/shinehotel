<?php 

include 'koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$id_user = mysqli_real_escape_string($koneksi,$_POST['id']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$level = mysqli_real_escape_string($koneksi, $_POST['level']);

$query = "INSERT into tb_user values('','$nama','$username','$password','$level')";

 if (mysqli_query($koneksi,$query)) {
    header("location:user.php");
    exit;
}

 ?>