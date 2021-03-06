<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/gedungg.jpg');"></div>
    <div class="contents order-2 order-md-1"> 
      <form action="cek_login.php" method="post">
      <div class="container bg-white">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Sign in to <strong>Shine Hotel</strong></h3>
            <p class="mb-4">Sign in untuk memesan kamar</p>
            <form action="cek_login.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" required="required" class="form-control" placeholder="your-email@gmail.com" name="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" required="required" class="form-control" placeholder="Your Password" name="password">
              </div>
              
              <input type="submit" value="Sign in" class="btn btn-block btn-primary">

               </label>
                <span class="ml-auto"><a href="signup.php" class="forgot-pass">Belum punya akun? Daftar</a></span> 

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>