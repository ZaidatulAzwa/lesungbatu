<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="/lesungbatu/public/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/animate.css">

    <link rel="stylesheet" href="/lesungbatu/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/magnific-popup.css">

    <link rel="stylesheet" href="/lesungbatu/public/css/aos.css">

    <link rel="stylesheet" href="/lesungbatu/public/css/ionicons.min.css">

    <link rel="stylesheet" href="/lesungbatu/public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/lesungbatu/public/css/flaticon.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/icomoon.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"> 	<img src="/lesungbatu/public/images/lesung.jpg" width="20%" height="20%"> LesungBatu<br></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
  	          <li class="nav-item active"><a href="/lesungbatu/users" class="nav-link">Laman Utama</a></li>
              <li class="nav-item"><a href="/lesungbatu/bahanmasakan" class="nav-link">Bahan Masakan</a></li>
  	          <li class="nav-item"><a href="/lesungbatu/jenismasakan" class="nav-link">Jenis Masakan</a></li>
  	          <li class="nav-item"><a href="/lesungbatu/kegemaran" class="nav-link">Kegemaran</a></li>
  	        </ul>
  	      </div>
  		  </div>
  	  </nav>
      <!-- END nav -->

      <section class="ftco-section ftco-services">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
              <center>
                  <h1 style="color:black"> Update Profile </h1><br>
                  <form action="<?php echo base_url('update/').$singleRow->user_id; ?>" method="post">
                      <?php Html::csrf(); ?>
                      <input type="text" name="name" value="<?php echo $singleRow->user_username;?>">
                      <input type="submit" name="search" value="Search" style="font-weight:bold" class="ml-2 btn btn-white btn-outline-black"/> <br><br>
                      <div class="form-group">
                        <label for="email"><b>New Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          &nbsp&nbsp&nbsp</b></label>
                      <input type="text" name="email">
                    </div>
                    <div class="form-group">
                      <label for="email"><b>New Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                       <input type="text" name="name">
                     </div>
                     <div class="form-group">
                       <label for="email"><b>New Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                       <input type="password" name="new_password" required>
                     </div>
                     <div class="form-group">
                       <label for="email"><b>Confirm Password:&nbsp</b></label>
                       <input type="password" name="confirm_password" required>
                     </div><br>
                    <input type="submit" style="font-weight:bold" class="ml-2 btn btn-white btn-outline-black" value="Update">
                  </form>
              </center>
      		</div>
      	</div>
      	</div>
      </section>

  <style>
  .dropbtn {
    background-color: black;
    color:  white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }

  .dropup {
    position: relative;
    display: inline-block;
  }

  .dropup-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    bottom: 50px;
    z-index: 1;
  }

  .dropup-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropup-content a:hover {background-color:white}

  .dropup:hover .dropup-content {
    display: block;
  }

  .dropup:hover .dropbtn {
    background-color: black;
  }
  </style>

  <script src="/lesungbatu/public/js/jquery.min.js"></script>
  <script src="/lesungbatu/public/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/lesungbatu/public/js/popper.min.js"></script>
  <script src="/lesungbatu/public/js/bootstrap.min.js"></script>
  <script src="/lesungbatu/public/js/jquery.easing.1.3.js"></script>
  <script src="/lesungbatu/public/js/jquery.waypoints.min.js"></script>
  <script src="/lesungbatu/public/js/jquery.stellar.min.js"></script>
  <script src="/lesungbatu/public/js/owl.carousel.min.js"></script>
  <script src="/lesungbatu/public/js/jquery.magnific-popup.min.js"></script>
  <script src="/lesungbatu/public/js/aos.js"></script>
  <script src="/lesungbatu/public/js/jquery.animateNumber.min.js"></script>
  <script src="/lesungbatu/public/js/bootstrap-datepicker.js"></script>
  <script src="/lesungbatu/public/js/jquery.timepicker.min.js"></script>
  <script src="/lesungbatu/public/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/lesungbatu/public/js/google-map.js"></script>
  <script src="/lesungbatu/public/js/main.js"></script>

  </body>
</html>
