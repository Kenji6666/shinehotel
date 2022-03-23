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
        

      <div class="col-15" style="background-image: url(gedung.jfif); height: 500px; margin: 0px; padding: 0px; padding-top: 60px !important"> 
    <div class="container bg-white" style="padding: 50px; padding-top: 35px !important; padding-bottom: 35px !important; width: 800px; height: 400px; border-radius: 8px;">
           <h2 class="alert alert-success text-center">INPUT DATA!</h1>

 
              <form action="simpan_user.php" method="post">
           <div class="form-group" class="mb-3">
              <label style="width:100%;">
                 Masukkan Nama
                 <input  type="text" name="nama" required="required" class="form-control">
             </label>
           </div>   
            
          <div class="row">
              <div class="col-md">
               <div class="form-group mt-4">
                 <label style="width:100%;">
                   Masukkan Username
                    <input type="text" name="username" class="form-control">
             </label>
         </div> 

              </div>

              <div class="col-md-6">
                  
                   <div class="form-group mt-4">
             <label style="width:100%;">
                 Masukkan Password
                 <input type="password" name="password" class="form-control">
             </label>
         </div> 
              </div>
          </div>

          <select class="form-select mt-2" name="level" aria-label="Default select example">
  <option selected>Pilih Level</option>
  <option value="admin">Admin</option>
  <option value="petugas">Petugas</option>
</select>
              <br>
           <div class="row form-group">
                <div class="col-md-12 mt-2">
                     <input name="id" hidden>
                  <button type="submit" class="btn btn-primary pill px-4 py-2">INPUT</button>
                </div>
              </div>
              </form>
         </label>
       </div>
   </div>
 </form>

</body>
</html>