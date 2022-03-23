<?php 

include 'koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$id_user = mysqli_real_escape_string($koneksi,$_POST['id']);
$email = mysqli_real_escape_string($koneksi,$_POST['email']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));

$query = mysqli_query($koneksi,"UPDATE tb_user SET nama = '$nama', username = '$email', password = '$password', level = '$level' where id_user = '$id_user'");

 header("location:user.php?pesan=berhasil");
 ?>