
<?php
 $id; 
 $photo;
 $user;
session_start();

$con=mysqli_connect("localhost","root","","users")or die(mysqli_error($con));
$id=$_SESSION['id'];
$name=$_SESSION['name'];
                  	
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nitro &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
	</head>
	<body>
	<div id="fh5co-page">



		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="home.php"><img src="images/logo.png" </a></br> 
 <?php

echo $name;
			?> 
			</h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="home.php">Accueil</a></li>
					<li><a href="portfolio.php">Notes</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				 
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">


 

<!-- The four columns -->
<div class="fh5co-narrow-content">
	<div style="text-align:center">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">les emplois <span>du temps </span></h2></div>
				<div class="row animate-box" data-animate-effect="fadeInLeft">

<div class="row">
 <h3> Master </h3>

  <div class="column">
  	<label> M2 RT </label>
    <img src="images/2rt.PNG" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
  	  	<label> M2 GL </label>
    <img src="images/2gl.PNG" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/1rt.PNG" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/1gl.PNG" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
<div class="column">
    <img src="images/1gi.PNG" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
<h3> Licence </h3>
 <div class="column">
 	  	<label> L1  </label>
    <img src="images/l1s4.PNG" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
  	 	  	<label> L2  </label>

    <img src="images/l2.PNG" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
<div class="column">
	 	  	<label> L3  </label>

    <img src="images/l3.PNG" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div></div>
<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
			 
			
			
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
		            		<img src="images/djamel.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Animée par un esprit d’innovation et la recherche de l’excellence, l’Université IBN Khaldoun a, au fil des ans, formé et diplômé près de 1000 personnes qui, chacune à leur façon, ont participé au progrès de leur communauté et de la société. &rdquo; <cite class="author">&mdash; Djamel zerrouki</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/ilyes.JPG" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;La créativité ne fait que relier les choses. Lorsque vous demandez aux créatifs comment ils ont fait quelque chose, ils se sentent un peu coupables parce qu’ils ne l’ont pas vraiment fait, ils ont juste vu quelque chose. Cela leur parut évident au bout d'un moment. &rdquo;<cite class="author">&mdash; Ilyase</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
		            </div>
		          </div>
				</div>
			</div>


			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">C'est quoi
 <span>Nous aimons faire</span></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>Strategy</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>Explore</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools-2"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="30000" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Nombre des étudiants</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">membre des enseignants</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Facultés et instituts
</span>
						</div>
					</div>
				</div>
			</div>
		 

			 
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

