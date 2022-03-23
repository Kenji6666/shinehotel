<?php 

include 'koneksi.php';

$id_pesan = mysqli_real_escape_string($koneksi,$_GET['id']);

$data = mysqli_query($koneksi,"DELETE FROM tb_pesan where id_pesan = '$id_pesan'");
$query=mysqli_query($koneksi,"SELECT * FROM tb_pesan where id_pesan ='$id_pesan'");
$cek = mysqli_num_rows($query);
if ($cek==0) {

 header("location:bookinglist.php?pesan=berhasil hapus");
}
 ?>