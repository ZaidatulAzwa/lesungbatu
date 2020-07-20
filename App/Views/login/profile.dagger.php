<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
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
    <link rel="stylesheet" href="/lesungbatu/public/css/navigation.css">
    <link rel="stylesheet" href="/lesungbatu/public/css/jenismasakan.css">
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
  	          <li class="nav-item active"><a href="/lesungbatu" class="nav-link">Laman Utama</a></li>
              <li class="nav-item"><a href="bahanmasakan" class="nav-link">Bahan Masakan</a></li>
  	          <li class="nav-item"><a href="jenismasakan" class="nav-link">Jenis Masakan</a></li>
  	          <li class="nav-item"><a href="kegemaran" class="nav-link">Kegemaran</a></li>
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
              <h2 class="mb-4">Profile Saya</h2>
              <form action="" method="POST">
                  <input type="text" name="name" placeholder="Insert your username">
                  <input type="submit" name="search" value="Search" style="font-weight:bold" class="ml-2 btn btn-white btn-outline-black"/> <br><br>
              </form>
                  <?php
                    $connection = mysqli_connect("localhost", "lesungbatu", "root", "");
                    $db = mysqli_select_db($connection, 'users');

                    if(isset($_POST['search']))
                    {
                      $user_username = $_POST['user_username'];

                      $query = "SELECT * FROM users where user_username = '$user_username'";
                      $query_run = mysqli_query($connection, 'users');

                      while($row = mysqli_fetch_array($query_run))
                      {
                        ?>
                          <form action="" method="POST">
                            <input type="text" name="user_email" value="<?php echo $row['user_email']?>">
                            <input type="text" name="user_username" value="<?php echo $row['user_username']?>">
                            <input type="text" name="user_password" value="<?php echo $row['user_password']?>">
                          <input type="submit" name="update" style="font-weight:bold" class="ml-2 btn btn-white btn-outline-black" value="Update">
                        </form>
                        <?php
                      }
                    }
                    ?>
      	</div>
      	</div>
      </div>
      </section>

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

<?php
  $connection = mysqli_connect("localhost", "lesungbatu", "root", "");
  $db = mysqli_select_db($connection, 'users');

  if(isset($_POST['update']))
  {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $query = "UPDATE 'users' SET user_username='$_POST[user_username]', user_email='$_POST[user_email]', user_password='$_POST[user_password]' where user_username='$_POST[user_username]'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      echo '<script> alert("Data Updated") </script>';
    }
    else
    {
      echo '<script> alert("Data Not Updated") </script>';
    }
  }
 ?>
