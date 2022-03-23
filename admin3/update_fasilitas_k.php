<?php 

include 'koneksi.php';

$id_kamar = mysqli_real_escape_string($koneksi,$_POST['id_kamar']);
$tipe_kamar = mysqli_real_escape_string($koneksi,$_POST['tipe_kamar']);
$fitur = mysqli_real_escape_string($koneksi,$_POST['fitur']);

$query = mysqli_query($koneksi,"UPDATE tb_fasilitas_kamar SET fitur = '$fitur' where id= '$id_kamar'");

 header("location:fasilitas_kamar.php?pesan=berhasil");
 ?>