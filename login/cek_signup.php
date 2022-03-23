<?php 
include 'koneksi.php';
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));

$query = "INSERT into tb_user values('','$nama','$username','$password','tamu')";


if (mysqli_query($koneksi,$query)) {
	header("location:index.php");
	echo '<script>alert("Berhasil Sign Up, Silahkan Sign in Untuk Memesan Kamar")</script>';
}

?>