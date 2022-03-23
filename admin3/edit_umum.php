<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>form Update</title>
        <?php  include 'boostrap.php'; ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
    <?php
 include "koneksi.php";
 $no = $_GET['id'];
 $query = "select * from tb_fasilitas where no='$no'";
 $result = mysqli_query($koneksi, $query);
 $row = mysqli_fetch_assoc($result);
 $i = $row['no'];
 $nama = $row['nama'];
 $gambar = $row['gambar'];
 $keterangan = $row['keterangan'];

?>
        

      <div class="col-15" style="background-image: url(gedung.jfif); height: 500px; margin: 0px; padding: 0px; padding-top: 60px !important"> 
    <div class="container bg-white" style="padding: 50px; padding-top: 35px !important; padding-bottom: 35px !important; width: 800px; height: 400px; border-radius: 8px;">
           <h2 class="alert alert-success text-center">UPDATE DATA!</h1>

 
              <form action="update_umum.php" method="post">
        
          <div class="row">
              <div class="col-md">
               <div class="form-group mt-4">
                 <label style="width:100%;">
                   Ubah Nama Fasilitas
                    <input type="text" name="nama" class="form-control" value="<?php echo "$nama"; ?>" >
             </label>
         </div> 

              </div>

              <div class="col-md-6">
                  
                   <div class="form-group mt-4">
             <label style="width:100%;">
                 Ubah Foto
                 <input type="text" name="foto" class="form-control" value="<?php echo "$gambar"; ?>" >
             </label>
         </div> 
              </div>

            <div class="form-group" class="mb-3">
              <label class="mt-4" style="width:100%;">
                 Ubah Keterangan
                 <input  type="text" name="keterangan" style="width: 700px;" required="required" class="form-control" value="<?php echo "$keterangan";?>">
             </label>
           </div>   

          </div>
              <br>
           <div class="row form-group">
                <div class="col-md-12 mt-4">
                     <input name="id" value="<?php echo "$i"; ?>" hidden>
                  <button type="submit" class="btn btn-primary pill px-4 py-2">UPDATE</button>
                </div>
              </div>
              </form>
         </label>
       </div>
   </div>
 </form>

</body>
</html>