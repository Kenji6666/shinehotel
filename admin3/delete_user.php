<?php 

include 'koneksi.php';

$id_user = mysqli_real_escape_string($koneksi,$_GET['id']);

$data = mysqli_query($koneksi,"DELETE FROM tb_user where id_user = '$id_user'");
$query=mysqli_query($koneksi,"SELECT * FROM tb_user where id_user='$id'");
$cek = mysqli_num_rows($query);
if ($cek==0) {

 header("location:user.php?pesan=berhasil hapus");
}
 ?>