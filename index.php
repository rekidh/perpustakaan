<?php
session_start();
require_once("./config/db_config.php");
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>


	<!-- HEADER =============================-->
	<header class="item header margin-top-0">
		<div class="wrapper">
			<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle navigation</span>
						</button>
						<a href="index.html" class="navbar-brand brand"> REKI DESMA HALDI </a>
					</div>
					<div id="navbar-collapse-02" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="propClone"><a href="index.php?page=home">Home</a></li>
							<li class="propClone"><a href="index.php?page=about">About</a></li>
							<li class="propClone"><a href="index.php?page=buku">Buku</a></li>
							<li class="propClone"><a href="index.php?page=informasi">Informasi</a></li>
							<li class="propClone"><a href="index.php?page=contact">Contact</a></li>
							<li class="propClone"> <a href=" index.php?page=login">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="text-homeimage">
							<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
								Perpusatakaan DigitalTalent
							</div>
							<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
								Membaca Semakin Mudah
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- STEPS =============================-->
	<div class="item content">
		<div class="container toparea">
			<div class="row text-center">
				<div class="col-md-4">
					<div class="col editContent">
						<span class="numberstep"><i class="fa fa-search"></i></span>
						<h3 class="numbertext">Cari Buku</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, placeat?</p>
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.col-md-4 col -->
				<div class="col-md-4 ">
					<div class="col editContent">
						<span class="numberstep"><i class="fa fa-book"></i></span>
						<h3 class="numbertext">Peminjaman</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, cupiditate.</p>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.col-md-4 col -->
				<div class="col-md-4 ">
					<div class="col editContent">
						<span class="numberstep"><i class="fa fa-download"></i></span>
						<h3 class="numbertext">Pengembalian</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, autem!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="height: 3em;">

	</div>
	<!-- ITEMS =============================-->
	<div class="container">
		<div class="row text-center">

			<?php

			if (isset($_GET['page'])) {
				$halaman = $_GET['page'];
			} else {
				$halaman = "";
			}

			if ($halaman == "") {
				include "./page/home.php";
			} elseif ($halaman == "login") {
				header('location: ./page/login.php');
			} elseif (!file_exists("./page/$halaman.php")) {
				include "./page/404.php";
			} else {
				include "./page/$halaman.php";
			}

			?>

		</div>
	</div>





	<!-- FOOTER =============================-->
	<div class="footer text-center">
		<div class="container">
			<div class="row">
				<p class="footernote">
					Connect with Scorilo
				</p>
				<ul class="social-iconsfooter">
					<li><a href="#"><i class="fa fa-phone"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<p>
					&copy; 2017 Your Website Name<br />
					Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
				</p>
			</div>
		</div>
	</div>

	<!-- SCRIPTS =============================-->
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/anim.js"></script>
	<script>
		//----HOVER CAPTION---//	  
		jQuery(document).ready(function($) {
			$('.fadeshop').hover(
				function() {
					$(this).find('.captionshop').fadeIn(150);
				},
				function() {
					$(this).find('.captionshop').fadeOut(150);
				}
			);
		});
	</script>

</body>

</html>