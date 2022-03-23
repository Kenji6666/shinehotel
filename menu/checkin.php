<?php 
session_start();
include 'koneksi.php';
	$id_booking = mysqli_real_escape_string($koneksi,$_POST['id_booking']);
	$nama_tamu = mysqli_real_escape_string($koneksi,$_POST['nama_tamu']);
	$telp_tamu = mysqli_real_escape_string($koneksi,$_POST['telp_tamu']);
	$tipe_kamar = mysqli_real_escape_string($koneksi,$_POST['tipe_kamar']);
	$tgl_checkin = mysqli_real_escape_string($koneksi,$_POST['tgl_checkin']);
	$tgl_checkout = mysqli_real_escape_string($koneksi,$_POST['tgl_checkout']);
	$jumlah_tamu = mysqli_real_escape_string($koneksi,$_POST['jumlah_tamu']);
	$jumlah_kamar = mysqli_real_escape_string($koneksi,$_POST['jumlah_kamar']);

mysqli_query($koneksi,"INSERT INTO tb_pesan values('$id_booking','$nama_tamu','$telp_tamu','$tipe_kamar','$tgl_checkin','$tgl_checkout','$jumlah_tamu','$jumlah_kamar')");

	$_SESSION['username'] = $nama_tamu;
	header("location:sudahpesan.php?pesan=berhasil");



?>