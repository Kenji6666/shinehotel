<!DOCTYPE html>
<html>
<?php
include 'koneksi.php'; 
 $data = mysqli_query($koneksi,"select * from tb_harga");
    while($d = mysqli_fetch_array($data)){
    }
     ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Price</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


	<?php 

	include "koneksi.php";
	$id_kamar = $_GET['id'];
	$query = "select * from tb_fasilitas_kamar where id='$id_kamar'";
	$result = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($result);
	// i = id kamar
	$i = $row['id'];  
	$tipe_kamar = $row['tipe_kamar'];
	$fitur = $row['fitur'];

	 ?>

	 <form action="update_fasilitas_k.php" method="post">

	<div class="col-15" style="background-image: url(gedung.jfif); height: 500px; margin: 0px; padding: 0px; padding-top: 60px !important"> 
	<div class="container bg-white" style="padding: 50px; padding-top: 35px !important; padding-bottom: 35px !important; width: 500px; height: 400px; border-radius: 8px;">
	
	<h2 class="alert alert-success text-center text-danger">UPDATE DATA</h2>
		<h5 class="text-center fw-bold">Tipe Kamar</h5>
<div class="card text-center" style="width: 400px; height: 50px;">
  <div class="card-body">
    <h5 class="card-text fst-italic"><?php echo "$tipe_kamar"; ?></h5>
		  <div class="form-group mb-3 mt-4">
		  	<h5 class="text-center fw-bold">Edit Fasilitas</h5>
		  		<input type="text" name="fitur" class="form-control text-center" value="<?php echo "$fitur"?>" style="height: 50px; width: 363px;"></input>
		  	</label>

              <div class="row form-group">
                  <button type="submit" class="btn btn-primary pill px-4 py-2">UPDATE</button>
                <div class="col-md-12 mt-4">
                	 <input name="id_kamar" value="<?php echo "$i"; ?>" hidden>
                </div>
              </div>

	</div>
	</div>
</tbody>
</table>
</div>
</div>        
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>