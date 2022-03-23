
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    <!-- .site-mobile-menu -->
    
    
   
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/gedung.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              
              <h1 class="mb-2">Welcome To Shine</h1>
              <h2 class="caption">Hotel &amp; Resort</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/dapur.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Unique Experience</h1>
              <h2 class="caption">Enjoy With Us</h2>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover overlay" style="background-image: url(images/resto.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Relaxing Room</h1>
              <h2 class="caption">Your Room, Your Stay</h2>
            </div>
          </div>
        </div>
      </div> 

    </div>



  
     <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Booking</h2>
            <hr width="50%" size="50px" color="red" style="align-items: center;"></hr>
          </div>
        </div>



    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="checkin.php" method="post" class="p-5 bg-white">

              <input type="hidden" name="id_booking">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" required="required" name="nama_tamu" class="form-control" placeholder="Full Name">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" name="telp_tamu" required="required" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row col-md-12 mb-3 mb-md-0">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0 mr-5">
                  <label class="font-weight-bold" for="checkin">Check In</label>
                  <input type="date" name="tgl_checkin" required="required" class="form-control" style="width: 200px;">
                </div>
              </div>              

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="checkout">Check Out</label>
                  <input type="date" name="tgl_checkout" required="required" class="form-control" style="width: 200px;">
                </div>
              </div>          
              </div>    


            <div class="row col-md-12 mb-3 mb-md-0">
              

              <div class="row form-group mr-3">
                  <div class="col-md-12 mb-3 mb-md-0">
                   <label class="font-weight-bold" for="room">Room Type</label>
                   <div class="select-itms">
                    <select class="form-control" name="tipe_kamar" id="room" style="width: 200px;">
                      <option value="single">Single Room</option>
                      <option value="standar">Standard Room</option>
                      <option value="superior">Superior Room</option>
                      <option value="deluxe">Deluxe Room</option>
                    </select>
                  </div>
                </div>
              </div>


                <div class="row form-group ml-1">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="guest">Guest</label>
                  <div class="select-itms">
                    <select class="form-control" name="jumlah_tamu" id="guest" style="width: 70px;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Jumlah Kamar</label> 
                  <div class="select-itms">
                    <select class="form-control" name="jumlah_kamar" id="guest" style="width: 70px;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Book Now" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            
          </div>
            </form>


          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Jln. Fatmawati No. 17 Kota Bandung Jawa Barat</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">(021)-732-654</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">shinehotel@gmail.com</a></p>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Swimming Pool</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hotel Teller</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Fire Exit</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Car Parking</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hair Dryer</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Minibar</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Drinks</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="display-3 mb-3 d-block text-primary">
                <i class="bi bi-router"></i></span>
              <h2 class="h5 mt-3">24 Hours Wifi</h2>
            </div>
          </div>

        </div>
      </div>
    </div>
    

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3">
            <a href="images/gedung.jfif" class="image-popup img-opacity"><img src="images/gedung.jfif" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/dapur.jfif" class="image-popup img-opacity"><img src="images/dapur.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/resto.jpg" class="image-popup img-opacity"><img src="images/resto.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/meja.jpg" class="image-popup img-opacity"><img src="images/meja.jpg" alt="Image" class="img-fluid"></a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="images/food.jpg" class="image-popup img-opacity"><img src="images/food.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/window.jpg" class="image-popup img-opacity"><img src="images/window.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/room.jpg" class="image-popup img-opacity"><img src="images/room.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/pool.jpg" class="image-popup img-opacity"><img src="images/pool.jpg" alt="Image" class="img-fluid"></a>
          </div>

        </div>
      </div>
    </div>
    



    
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
         <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>filosofi kami adalah tentang kenyamanan dan perhatian tamu. Terinspirasi oleh warisan lokal fasilitas yang terus diperbarui dan layanan khusus yang disampaikan dengan senyum dan ketulusan yang selalu selaras dengan lingkungan lokal</p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Contact Us</h3>
                  <ul class="list-unstyled">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Email : shinehotel@gmail.com </a></li>
                    <li><a href="#">Telp  : (021)-732-654</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Our Location</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Jln. Fatmawati No. 17</a></li>
                    <li><a href="#">Kota Bandung</a></li>
                    <li><a href="#">Jawa Barat</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-15"><h3 class="footer-heading mb-4 text-white">Social Media</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>

                </p>
              </div>
          </div>
        </div>
      
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>