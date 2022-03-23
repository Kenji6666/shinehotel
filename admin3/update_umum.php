<?php 

include 'koneksi.php';

$no = mysqli_real_escape_string($koneksi,$_POST['id']);
$gambar = mysqli_real_escape_string($koneksi,$_POST['foto']);
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$keterangan = mysqli_real_escape_string($koneksi,$_POST['keterangan']);

$query = mysqli_query($koneksi,"UPDATE tb_fasilitas SET nama = '$nama', gambar = '$gambar', keterangan = '$keterangan' where no = '$no'");

 header("location:fasilitas_umum.php?pesan=berhasil");
 ?>