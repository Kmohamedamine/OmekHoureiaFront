

<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="fr">


<head>

   <link rel="stylesheet" type = "text/css" href ="css/reservation.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

<!--<body data-spy="scroll" data-target="#navbar">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a> -->
<!--	
<?PHP
session_start();
?> -->
	
 	<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Omek Houria </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
<li>
              <a href="reservation.html">Reserver une table</a>
                    </li>
          </ul>

                </div>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>		<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(images/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <br>
                        <div><br>
                          <br>
                           <br>
                            <br> <br>
<br>
<br>
<br>
<br>
                 

<h1>Réservation enregistrer merci </h1> </div>
                         
                              
                         <br>

<br>
<br>
<br>
<br>                  

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br></section>
<br></form>
<!-- End of Reservation Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0" >
     <form > <div class="inner container">
         <div class="row">
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Pas besoin de rentrer à la maison pour manger, venez chez
nous et faites comme chez vous !
Des plats quotidiens pour tous les goûts vous sont proposés avec des prix corrects, n'hésitez pas à partager avec nous vos envies et vos avis.
See you soon !</p>
	         		<nav class="nav nav-mastfoot justify-content-start">
		                <a class="nav-link" href="#">
		                	<i class="fab fa-facebook-f"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-twitter"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-instagram"></i>
		                </a>
		            </nav>
         		</div>
         		
         	</div>
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-5 px-0">
         			<h4>Heures d'ouverture </h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Lundi</span><span>Fermé</span></li>
		                <li class="d-flex justify-content-between"><span>Mardi</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Mercredi</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Jeudi</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Vendredi</span><span>9:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Samedi</span><span>9:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Dimanche</span><span> 9:00 - 02:00 </span></li>
		              </ul>
         		</div>
         		
         	</div>

         	<div class="col-lg-4">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>Newsletter</h4>
	         		
	         	 <form id="newsletter">
            <div class="form-group">
              <input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
            </div>
						<button type="submit" class="btn btn-primary w-100">Submit</button>
					</form>
         		</div>
         		
         	</div>
         	<div class="col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">Copyright 2020. All Right Reserved. </p>
         	</div>
            
        </div>
    </div>
</footer>	</div>
	
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>
