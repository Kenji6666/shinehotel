<?php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		// alihkan ke halaman dashboard admin
		header("location:../admin3/price.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:../petugas/bookinglist.php");
		}
		else if($data['level']=="tamu"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tamu";
		// alihkan ke halaman dashboard pegawai
		header("location: ../menu/booking.php");
	}

		else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
		echo '<script>alert("Silahkan Login Dengan Email dan Password Akun Hotel Anda")</script>';
	}	
}else{
	header("location:index.php?pesan=gagal");
	echo '<script>alert("Silahkan Login Dengan Email dan Password Akun Hotel Anda")</script>';
}
?>