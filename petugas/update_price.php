<?php 

include 'koneksi.php';

$id_kamar = mysqli_real_escape_string($koneksi,$_POST['id']);
$tipe_kamar = mysqli_real_escape_string($koneksi,$_POST['tipe_kamar']);
$harga = mysqli_real_escape_string($koneksi,$_POST['price']);

$query = mysqli_query($koneksi,"UPDATE tb_harga SET harga = '$harga' where id_kamar = '$id_kamar'");

 header("location:price.php?pesan=berhasil");
 ?>