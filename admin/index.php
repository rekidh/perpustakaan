<?php

session_start();

if (!isset($_SESSION['login'])) {
	header('location:../index.php?page=login');
}
include("../config/db_config.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perpustkaan Admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Perustakaan </span>Admin</a>
				<!-- <ul class="nav navbar-top-links navbar-right">
				</ul> -->
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">

			<li class="parent ">
				<a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-navicon">&nbsp;</em> Master <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="index.php?page=buku">
							<span class="fa fa-arrow-right">&nbsp;</span> Buku
						</a>
					</li>
					<li>
						<a class="" href="index.php?page=anggota">
							<span class="fa fa-arrow-right">&nbsp;</span> Anggota
						</a>
					</li>
					<li>
						<a class="" href="index.php?page=adm_add_buku">
							<span class="fa fa-arrow-right">&nbsp;</span> Tambah Buku
						</a>
					</li>

				</ul>
			</li>
			<li class="parent ">
				<a data-toggle="collapse" href="#sub-item-2">
					<em class="fa fa-navicon">&nbsp;</em> Transaksi <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="index.php?page=pengembalian">
							<span class="fa fa-arrow-right">&nbsp;</span> Pengembalian
						</a></li>
					<li><a class="" href="index.php?page=peminjaman">
							<span class="fa fa-arrow-right">&nbsp;</span> Peminjaman
						</a></li>

				</ul>
			</li>

			<li><a href="./pages/logut.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<?php

				if (isset($_GET['page'])) {
					$halaman = $_GET['page'];
				} else {
					$halaman = "";
				}

				if ($halaman == "") {
					include "./pages/home.php";
				} elseif (!file_exists("pages/$halaman.php")) {
					include "./pages/404.php";
				} else {
					include "./pages/$halaman.php";
				}

				?>
			</div>
		</div>

	</div> <!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>