<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bahan Masakan</title>
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
    <link rel="stylesheet" href="/lesungbatu/public/css/checkbox.css">
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
            <h2 class="mb-4">Pilih Bahan Masakan Anda ! </h2>
          </div>
        </div>
            <div class="media d-block text-center block-6 services">
              <div class="media-body">
                  <form method="get" action="resepi" onsubmit="return resepi()">
                    <div class="checkmark">
                    <label><input type="checkbox" id="ayam" name="bahan" value="ayam">
                      Ayam &nbsp&nbsp</label>
                    <label><input type="checkbox" id="daging" name="bahan" value="daging">
                      Daging &nbsp&nbsp</label>
                    <label><input type="checkbox" id="ikan" name="bahan" value="ikan">
                      Ikan &nbsp&nbsp</label>
                    <label><input type="checkbox" id="sotong" name="bahan" value="sotong">
                      Sotong &nbsp&nbsp</label>
                    <label><input type="checkbox" id="udang" name="bahan" value="udang">
                      Udang &nbsp&nbsp</label>
                    <label><input type="checkbox" id="ketam" name="bahan" value="ketam">
                      Ketam &nbsp&nbsp</label>
                    <label><input type="checkbox" id="telur7" name="bahan" value="telur">
                      Telur &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="madu" name="bahan" value="madu">
                      Madu &nbsp&nbsp</label>
                    <label><input type="checkbox" id="keju" name="bahan" value="keju">
                      Keju &nbsp&nbsp</label>
                    <label><input type="checkbox" id="tomato" name="bahan" value="tomato">
                      Tomato &nbsp&nbsp</label>
                    <label><input type="checkbox" id="lemon" name="bahan" value="lemon">
                      Lemon &nbsp&nbsp</label>
                    <label><input type="checkbox" id="kentang" name="bahan" value="kentang">
                      Kentang &nbsp&nbsp</label>
                    <label><input type="checkbox" id="cendawan" name="bahan" value="cendawan">
                      Cendawan &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="cilikering" name="bahan" value="cilikering">
                      Cili Kering &nbsp&nbsp</label>
                    <label><input type="checkbox" id="ciliapi" name="bahan" value="ciliapi">
                      Cili Api &nbsp&nbsp</label>
                    <label><input type="checkbox" id="cilibesar" name="bahan" value="cilibesar">
                      Cili Besar &nbsp&nbsp</label>
                    <label><input type="checkbox" id="serbukcili" name="bahan" value="serbukcili">
                      Serbuk Cili &nbsp&nbsp</label>
                    <label><input type="checkbox" id="serbukkari" name="bahan" value="serbukkari">
                      Serbuk Kari &nbsp&nbsp</label>
                    <label><input type="checkbox" id="perencahsup" name="bahan" value="perencahsup">
                      Perencah Sup &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="daunkesum" name="bahan" value="daunkesum">
                      Daun Kesum &nbsp&nbsp</label>
                    <label><input type="checkbox" id="daunkari" name="bahan" value="daunkari">
                      Daun Kari &nbsp&nbsp</label>
                    <label><input type="checkbox" id="daunlimau" name="bahan" value="daunlimau">
                      Daun Limau Purut &nbsp&nbsp</label>
                    <label><input type="checkbox" id="daunsup" name="bahan" value="daunsup">
                      Daun Sup &nbsp&nbsp</label>
                    <label><input type="checkbox" id="daunkunyit" name="bahan" value="daunkunyit">
                      Daun Kunyit &nbsp&nbsp</label>
                    <label><input type="checkbox" id="serai" name="bahan" value="serai">
                      Serai &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="susucair" name="bahan" value="susucair">
                      Susu cair &nbsp&nbsp</label>
                    <label><input type="checkbox" id="santan" name="bahan" value="santan">
                      Santan &nbsp&nbsp</label>
                    <label><input type="checkbox" id="sususegar" name="bahan" value="sususegar">
                      Susu Segar&nbsp&nbsp</label>
                    <label><input type="checkbox" id="butter" name="bahan" value="butter">
                      Butter &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="kicapmasin" name="bahan" value="kicapmasin">
                      Kicap Masin &nbsp&nbsp</label>
                    <label><input type="checkbox" id="kicapmanis" name="bahan" value="kicapmanis">
                      Kicap Manis &nbsp&nbsp</label>
                    <label><input type="checkbox" id="kicaplemak" name="bahan" value="kicaplemak">
                      Kicap Lemak &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="soscili" name="bahan" value="soscili">
                      Sos Cili &nbsp&nbsp</label>
                    <label><input type="checkbox" id="sostomato" name="bahan" value="sostomato">
                      Sos Tomato &nbsp&nbsp</label>
                    <label><input type="checkbox" id="sostiram" name="bahan" value="sostiram">
                      Sos Tiram &nbsp&nbsp</label>
                    <label><input type="checkbox" id="ladahitam" name="bahan" value="ladahitam">
                      Lada Hitam &nbsp&nbsp</label>
                    <label><input type="checkbox" id="ladasulah" name="bahan" value="ladasulah">
                      Lada Sulah &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="limaukasturi" name="bahan" value="limaukasturi">
                      Limau Kasturi &nbsp&nbsp</label>
                    <label><input type="checkbox" id="imaunipis" name="bahan" value="limaunipis">
                      Limau Nipis &nbsp&nbsp</label>
                    <label><input type="checkbox" id="asamajawa" name="bahan" value="asamajawa">
                      Asam jawa &nbsp&nbsp</label><br>
                    <label><input type="checkbox" id="tepunggandum" name="bahan" value="tepunggandum">
                      Tepung Gandum &nbsp&nbsp</label>
                    <label><input type="checkbox" id="tepungjagung" name="bahan" value="tepungjagung">
                      Tepung Jagung &nbsp&nbsp</label>
                    <label><input type="checkbox" id="tepungberas" name="bahan" value="tepungberas">
                      Tepung Beras &nbsp&nbsp</label><br>
                    </div>
                   <input type="text" id="bahan" name="bahanmasakan" placeholder="Tambah bahan anda...">
                   <input type="submit" value="Cari Resepi !" style="font-weight:bold" class="ml-2 btn btn-white btn-outline-black"/>
                  </form>
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
