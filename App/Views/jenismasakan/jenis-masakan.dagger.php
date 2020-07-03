<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jenis Masakan</title>
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
            <li class="nav-item"><a href="bahan-masakan" class="nav-link">Bahan Masakan</a></li>
            <li class="nav-item"><a href="jenis-masakan" class="nav-link">Jenis Masakan</a></li>
            <li class="nav-item">
           <span style="font-size:15px;cursor:pointer" class="nav-link" onclick="openNav()">Kegemaran</span>
            </li>
            <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="login">Login</a>
              <a href="register">Register</a>
            </div>
          </div>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(/lesungbatu/public/images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
              <span class="subheading">Keenakan Dirasa</span>
              <h1 class="mb-4">Dapatkan resepi menarik mengikut bahan masakan anda !</h1>
            </div>
            <div class="col-md-6 ftco-animate">
              <img src="/lesungbatu/public/images/gif1.gif" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
              <span class="subheading">Kerangupan Terasa</span>
              <h1 class="mb-4">Resepi terhebat dengan bahan masakan sedia ada !</h1>
            </div>
            <div class="col-md-6 ftco-animate">
              <img src="/lesungbatu/public/images/gif.gif" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(/lesungbatu/public/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">LesungBatu Terhebat</span>
              <h1 class="mb-4">Resepi disedia mudah, masakan anda juga menjadi mudah !</h1>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
          <div class="icon"><span class="icon-phone"></span></div>
          <div class="text">
          <a href="login" id="customer_login_link">  <h3>Login</h3></a>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="icon"><span class="icon-my_location"></span></div>
          <div class="text">
              <a href="register" id="customer_register_link"><h3>Register</h3></a>
          </div>
        </div>
      </div>
    </div>
    <div class="social d-md-flex pl-md-5 p-4 align-items-center">
      <ul class="social-icon">
        <li class="ftco-animate"><a href="https://www.facebook.com/LesungBatu-104272681174189/?modal=admin_todo_tour" target="_blank"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="https://twitter.com/lesungbatu12" target="_blank"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="https://www.instagram.com/lesungbatu12_/" target="_blank"><span class="icon-instagram" target="_blank"></span></a></li>
      </ul>
    </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Jenis Masakan Digemari</h2>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<div class="text p-4">
    						<h3>Masakan Melayu Tradisi</h3>
    				  	<img src="/lesungbatu/public/images/a5.jfif"><br><br>
    						<a href="Masakan-Melayu-Tradisi" class="ml-2 btn btn-white btn-outline-white">Dapatkan !</a></p>
              </div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<div class="text p-4">
    						<h3>Masakan Western</h3><br>
	               <img src="/lesungbatu/public/images/a6.jfif"><br><br>
    						<a href="Masakan-Western" class="ml-2 btn btn-white btn-outline-white">Dapatkan !</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<div class="text p-4">
    						<h3>Masakan Thai</h3><br>
	               <img src="/lesungbatu/public/images/a7.jfif"><br><br>
    						<a href="Masakan-Thai" class="ml-2 btn btn-white btn-outline-white">Dapatkan !</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <div class="text p-4">
                <h3>Masakan Chinese</h3><br>
                 <img src="/lesungbatu/public/images/a8.jfif"><br><br>
                <a href="Masakan-Chinese" class="ml-2 btn btn-white btn-outline-white">Dapatkan !</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <div class="text p-4">
                <h3>Masakan Indian</h3><br>
                 <img src="/lesungbatu/public/images/a9.jfif"><br><br>
                <a href="Masakan-Indian" class="ml-2 btn btn-white btn-outline-white">Dapatkan !</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section><br><br><br>

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

  <script>
  function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }

  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }
  </script>

  <script>

  function Melayu () {
  from bs4 import BeautifulSoup
  from requests import get

  url = 'https://myresipi.com/categories?sub_category=masakan_melayu'
  response = get(url)
  print(response.text[:500])
  html_soup = BeautifulSoup(response.text, 'html.parser')
  type(html_soup)
  masakan_melayu = html_soup.find_all('div',class_ = 'latest-item col-lg-6 col-md-6 col-sm-6')
  print(masakan_melayu)

  }

  </script>


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
