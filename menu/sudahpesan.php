<!DOCTYPE html>
<html>
<head>
	<title>Selamat Menikmati</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
</head>

<?php include 'boostrap.php';

 ?>
<body>
<div class="container">
<div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
Berhasil Booking Kamar!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	<span aria-hidden="true"></span>
</button>
  </div>
</div>
<?php 



 ?>
  <table class="table table-hover" border="2">

    <tr>
      <th>Id Booking</th>
      <th>Nama</th>
      <th>Nomor Telpon</th>
      <th>Tipe Kamar</th>
      <th>Check In</th>
      <th>Check Out</th>
      <th>Jumlah Tamu</th>
      <th>Jumlah kamar</th>


    </tr>
    <?php 
    session_start();
    include 'koneksi.php';
    $nama_tamu=$_SESSION['username'];

    $data = mysqli_query($koneksi,"SELECT * from tb_pesan WHERE nama_tamu = '$nama_tamu'");
    while($d = mysqli_fetch_array($data)){
     ?>
              <tr>
                <td><?php echo $d['id_pesan']; ?></td>                
                <td><?php echo $d['nama_tamu']; ?></td>
                <td><?php echo $d['telp_tamu']; ?></td>
                <td><?php echo $d['tipe_kamar']; ?></td>
                <td><?php echo $d['tgl_checkin']; ?></td>
                <td><?php echo $d['tgl_checkout']; ?></td>      
                <td><?php echo $d['jumlah_tamu']; ?></td>
                <td><?php echo $d['jumlah_kamar']; ?></td>

              </tr>
                <?php
    }
    ?>
    </table>
    <a href="cetak.php" class="btn btn-success">cetak</a>


        
</body>
</html>