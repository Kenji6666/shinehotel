  <?php 
         session_start();
if($_SESSION['level']=="tamu"){
        header("location:../login/index.php?pesan=silahkan login");

    }   
      elseif ($_SESSION['level']=="") {
            
        header("location:../login/index.php?pesan=silahkan login");
        }

        elseif ($_SESSION['level']=="petugas") {
            
        header("location:../login/index.php?pesan=silahkan login");
        }
             
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking List</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	
<!-- navbar -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
	<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <h4 class="text-white text-left" style="margin-right: 100px; padding-top: 8px; font-family: serif;">Shine Hotel | Admin</h4>

    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-danger" aria-current="page" href="bookinglist.php">Bookinglist</a>
        </li>
      </ul>

      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false active">
            Fasilitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="fasilitas_kamar.php">Fasilitas Kamar</a></li>
            <li><a class="dropdown-item" href="fasilitas_umum.php">Fasilitas Hotel</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="price.php">Price</a>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="room.php">Room</a>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="user.php">User</a>
        </li>
      </ul>

      
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../login/logout.php">
          <button type="button" class="btn btn-danger" style="margin-left: 140px; margin-right: 40px;">Log Out</button>
          </a>
        </li>
      </ul>
      
    </div>
  </div>
 </nav>

<!-- navbar end -->

	
	<div class="col-13" style="padding: 80px; padding-top: 50px !important; background-image: url(gedung.jfif); min-height: 438px !important; height: 100%;">
  <div class="container bg-white" style="padding: 20px; border-radius: 8px;">
		<div class="card-header ">
			<h4 class="card-title text-center">Booking List</h4>
		</div>
<div class="row form-group">
   <form action="bookinglist.php" method="get">
    <label>Cari :</label>
      <input type="text" name="cari">
      <input class="btn btn-success" type="submit" value="Cari">
    </form>
      <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                }
                ?>

</row>
	<table class="table table-sm" style="text-align: center;">
  <thead>
    <tr  class="table-danger">
    <th width="10px">Id</th>
			<th width="50px">Nama Tamu</th>
			<th width="30px">No. Telpon</th>
      <th width="30px">Tipe Kamar</th>
			<th width="50px">Check In</th>
			<th width="50px">Check Out</th>
      <th width="10px">Jml Tamu</th>
      <th width="10px">Jml Kamar</th>
      <th width="30px">Status</th>
      <th width="30px">Opsi</th>
    </tr>
  </thead>
  <tbody>
    
   <?php
		include 'koneksi.php';
		$no = 1;
     if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from tb_pesan where nama_tamu like '%".$cari."%' or  tgl_checkout like '%".$cari."%'");}
    else {
		$data = mysqli_query($koneksi,"select * from tb_pesan");}
		while($d = mysqli_fetch_array($data)){
	 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_tamu']; ?></td>
        <td><?php echo $d['telp_tamu']; ?></td>
				<td><?php echo $d['tipe_kamar']; ?></td>
				<td><?php echo $d['tgl_checkin']; ?></td>
				<td><?php echo $d['tgl_checkout'];?></td>
        <td><?php echo $d['jumlah_tamu']; ?></td>
        <td><?php echo $d['jumlah_kamar']; ?></td>
			</tr>
			<?php
	}
  ?>
</tbody>
</table>
</div>
</div>

</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>