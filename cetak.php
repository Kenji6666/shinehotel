<!DOCTYPE html>
<html>
<head>
	<title>pembayaran</title>

</head>
<?php 

    include 'boostrap.php'
 ?>
<body>
    <div class="col-13" style="padding: 80px; padding-top: 50px !important; background-image: url(images/gedung.jfif); min-height: 443px !important; height: 100%;">
    <div class="container bg-white" style="padding: 20px; border-radius: 8px;">
        <div class="card-header ">
            <h4 class="card-title text-center">SHINE HOTEL</h4>
        </div>
    
    <?php 
    session_start();
    include 'koneksi.php';
    $nama=$_SESSION['username'];
    $data = mysqli_query($koneksi,"SELECT * from tb_pesan WHERE nama_tamu = '$nama'");
    while($d = mysqli_fetch_array($data)){
     ?>
      
      <div class="row justify-content-center">
      <table class="table table-sm table-light" style="margin: 50px;"> 
        <tbody>
        <tr>
            <td>Id Pesan</td>
            <td><?php echo $d['id_pesan']; ?></td>
        </tr>
        <tr>
            <td>Nama Tamu</td>                
            <td><?php echo $d['nama_tamu']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telpon Tamu</td>
            <td><?php echo $d['telp_tamu']; ?></td>
        </tr>
        <tr>
            <td>Tipe Kamar</td>
            <td><?php echo $d['tipe_kamar']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Checkin</td>
            <td><?php echo $d['tgl_checkin']; ?></td>
        </tr>
        <tr>
         <td>Tanggal Checkout</td>
            <td><?php echo $d['tgl_checkout']; ?></td>
        </tr>
        <tr>      
            <td>Jumlah Tamu</td>
            <td><?php echo $d['jumlah_tamu']; ?></td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td><?php echo $d['jumlah_kamar']; ?></td>
        </tr>
                
                <?php
    }
    ?>
</tbody>
    </table>
</div>
    <script>
    	
    	window.print()
    </script>
</div>
</div>
</body>
</html>