<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Resepi</title>
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
            <li class="nav-item active"><a href="/lesungbatu/users" class="nav-link">Laman Utama</a></li>
            <li class="nav-item"><a href="bahanmasakan" class="nav-link">Bahan Masakan</a></li>
            <li class="nav-item"><a href="jenismasakan" class="nav-link">Jenis Masakan</a></li>
            <li class="nav-item"><a href="kegemaranuser" class="nav-link">Kegemaran</a></li>
          </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section  style="background-image: url(/lesungbatu/public/images/bg_1.jpg);height:600px">
      <div class="slider-item"><br><br><br><br>
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" style="text-align:center;">
              <span class="subheading"><h1  style="font-style: bold">Keenakan Dirasa</h1></span><br>
              <h3 class="mb-4"  style="font-style: italic">Dapatkan resepi menarik mengikut bahan masakan anda </h3>
              </div>
            <div class="col-md-6 ftco-animate">
              <img src="/lesungbatu/public/images/gif1.gif" class="img-fluid" alt="" >
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Senarai Resepi !</h2>
            <div class="contain">
            <?php
            echo "<table>";
            echo "<tr>";
            echo "<th> Resepi Pilihan !</th>";
            echo "<th> Klik Link !</th>";
            echo "<th> Kegemaran Saya !</th>";


            foreach ($dataResult as $recipe){
                //$value->course_name;

                echo "<tr>";
                echo "<td> $recipe->recipe_title </td>";
                echo "<td><a href=$recipe->recipe_link><font color=#3498DB>Dapatkan!</font></a></td>";
                echo "<td><a href=kegemaranusers/$recipe->recipe_id><font color=red>Tambah!</font></a></td>";
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";
            ?>
            <style>
            .contain {
              margin:0 auto;
              width:100%;
              overflow:auto;
            }

              table {
                margin:0 auto;
                width:100%;
                overflow:auto;
                font-size: 18px;
                font-family: helvetica, Arial, sans-serif;;
                text-align: center;
                border-width: 2px;
                border-color: #666666;
                border-collapse: collapse;
              }

               th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                }

               td {
                border-width: 1px;
                width: 2px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
              }
              }
          </style>
      </div>
    </div>
    </div>
  </div>
  </section><br><br><br><br><br>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(/lesungbatu/public/images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Ayam</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Pasta</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Kerabu</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Kam Heong</a>

                   <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Capati</a>
		            </div>
		          </div>
		              </div>
		            </div>
		          </div>
		        </div><br><br>
            <center>
              <ul>
              <a target="_blank">&nbspF.A.Q</a>
              <a target="_blank">&nbspPrivacy Policy</a>
              <a target="_blank">&nbspCopyright &copy; 2019,</a>
              <a href="#">&nbspLesungBatu</a>
              <a target="_blank">&nbspPowered by LB TEAM</a>
            </ul>
          </center>
    </section>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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

  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
      OneSignal.init({
        appId: "a112f057-a98c-4a99-95ef-b6e14bef1d78",
      });
    });
  </script>

  <script src="/lesungbatu/public/js/forwardchaining.js"></script>
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
