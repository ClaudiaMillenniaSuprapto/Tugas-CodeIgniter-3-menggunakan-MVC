<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang di SIRS</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<style>
	body {
		background-color: #ffffff;
		font-family: 'Assistant', sans-serif;
		color: #808080;
	}

	.navbar-brand {
		font-family: 'Assistant', sans-serif;
		font-weight: bold;
	}

	.navbar-light .navbar-nav .nav-link {
		color: #d3d3d3;
	}

	.navbar-light .navbar-nav .nav-link.active {
		font-weight: bold;
		color: #808080 !important;
	}

	.btn-navbar-right {
		margin-top: -10px !important;
		margin-bottom: -8px !important;
		margin-right: -18px !important;
		height: 70px;
		border-radius: 0;
	}

	.btn-login {
		width: 95px;
		background-color: #d3d3d3;
		color: #ffffff;
	}

	.btn-login:hover {
		background-color: #418CFD;
		color: #ffffff;
	}

	.btn-login p {
		margin-top: 16px;
	}

	header {
		padding: 180px 0 165px;
		margin-top: -70px;
		background-image: url("https://i.postimg.cc/Z5TgB84f/piron-guillaume-U4-Fy-Cp3-Kz-Y-unsplash.jpg");
		background-size: cover;
	}

	header h1,
	header p {
		color: #ffffff;
	}

	header h1 {
		font-family: 'Playfair Display', serif;
		font-weight: bold;
		font-size: 50px;
	}

	header p {
		font-size: 20px;
	}

	header .btn-get-started {
		background-color: #FF9E53;
		color: #ffffff;
	}

	header .btn-get-started:hover {
		background-color: #FFAA69;
		color: #ffffff;
	}

	.section-stats {
		margin-top: -50px;
	}

	.section-stats .stats-detail {
		padding-top: 15px;
		background-color: #ffffff;
		padding-left: 40px;
	}

	.section-stats h2 {
		font-size: 30px;
		margin-bottom: 0;
	}

	.section-stats p {
		font-size: 20px;
		font-weight: lighter;
	}

	.section-popular {
		min-height: 540px;
		background-color: #d3d3d3;
		margin-top: -50px;
		margin-bottom: -230px;
	}

	.section-popular-heading {
		margin-top: 150px;
	}

	.section-popular-heading h2,
	.section-popular-heading p {
		color: #ffffff;
	}

	.section-popular-heading h2 {
		font-family: 'Playfair Display', serif;
		font-weight: bold;
	}

	.section-popular-heading p {
		font-size: 18px;
	}

	.section-popular-content .section-popular-travel .card-travel {
		min-height: 380px;
		background-color: #000000;
		color: #ffffff;
		padding: 30px;
		background-size: cover;
		margin-bottom: 20px;
	}

	.section-popular-content .travel-country {
		font-size: 18px;
		color: #ffffff;
	}

	.section-popular-content .travel-location {
		font-size: 26px;
		color: #ffffff;
	}

	.section-popular-content .travel-button .btn-travel-details {
		background-color: #FF9E53;
		color: #ffffff;
	}

	.section-popular-content .travel-button .btn-travel-details:hover {
		background-color: #ffb37a;
		color: #ffffff;
	}

	.btn-get-started {
		background-color: #FF9E53;
		color: #ffffff;
	}

	.btn-get-started:hover {
		background-color: #FFAA69;
		color: #ffffff;
	}

	.btn-need-help {
		background-color: #f8f7f7f2;
		color: #bebebec3;
	}

	.btn-need-help:hover {
		background-color: #e0e0e0;
		color: #ffffffc3;
	}

	.section-footer a {
		color: #808080;
	}

	.section-details-header {
		min-height: 310px;
		background: #E4E6EB;
		margin-top: -70px;
	}

	.section-details-content {
		margin-top: -210px;
		min-height: 100vh;
	}

	.section-details-content .breadcrumb {
		background-color: transparent;
		padding: 0;
		margin-bottom: 30px;
	}

	.section-details-content .breadcrumb-item.active {
		font-weight: bold;
		color: #418CFD;
	}

	/*# sourceMappingURL=main.css.map */
</style>

<body>

	<!-- NAVBAR -->
	<div class="container">
		<nav class="row navbar navbar-expand-lg navbar-light bg-white">
			<a href="welcome" class="navbar-brand" style="color:#808080">
				SIRS
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav ml-auto mr-3">
					<li class="nav-item mx-2-md-2">
						<a href="welcome" class="nav-link active">Home</a>
					</li>
					<!-- <li class="nav-item mx-2-md-2">
                    <a href="" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                    id="navbardrop"
                    data-toggle="dropdown">
                    Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Link 1</a>
                        <a href="" class="dropdown-item">Link 2</a>
                        <a href="" class="dropdown-item">Link 3</a>
                    </div>
                </li>
                <li class="nav-item mx-2-md-2">
                    <a href="" class="nav-link">Testimonial</a>
                </li> -->
				</ul>
				<!-- Mobile Button -->
				<!-- <form class="form-inline d-sm-block d-md-none">
					<a href="login/login">
						<button class="btn btn-login my-2 my-sm-0 px-4">
							<a href="login/login">Masuk</a>
						</button>
					</a>
				</form> -->
				<!-- Desktop Button -->
				<form class="form-inline my-2 my-lg-0 d-none d-md-block">
					<a href="Login" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
						<p>Login</p>
					</a>
				</form>
			</div>
		</nav>
	</div>

	<!-- HEADER -->
	<header class="text-center">
		<h1>
			Sistem Informasi
			<br>
			Rumah Sakit
		</h1>
		<p class="mt-3">
			Melayani Dengan Baik Dan Puas Pada Pasien
		</p>
		<a href="SignUp" class="btn btn-get-started px-4 mt 4">
			DAFTAR
		</a>
	</header>


	<main>
		<!-- POPULAR -->
		<div class="container">
			<section class="section-stats row justify-content-center" id="stats">
				<div class="col-3 col-md-2 stats-detail">
					<h2>20</h2>
					<p>Kelas Standard</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>12</h2>
					<p>Kelas Eksekutif</p>
				</div>
				<div class="col-3 col-md-2 stats-detail">
					<h2>30</h2>
					<p>Kelas VIP</p>
				</div>
				<!-- <div class="col-3 col-md-2 stats-detail">
					<h2>72</h2>
					<p>Partners</p>
				</div> -->

			</section>
		</div>

		<section class="section-popular" id="popular">
			<div class="container">
				<div class="row">
					<div class="col text-center section-popular-heading">
						<h2>Informasi Terkini</h2>
						<p>Sesuatu yang baru dari rumah sakit
						</p>
					</div>
				</div>
			</div>
		</section>

		<div class="section section-popular-content" id=popularContent>
			<div class="container">
				<div class="section-popular-travel row justify-content-center">
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column" style="background-image:url('https://i.postimg.cc/v8XhDp2V/diana-polekhina-ZBst-HWt9v-Lc-unsplash.jpg');">
							<div class="travel-country">VAKSINASI</div>
							<div class="travel-location">DOSIS-3</div>
							<div class="travel-button mt-auto">
								<a href="Details" class="btn btn-travel-details px-4">
									View Details
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<footer class="section-footer mt-5 mb-4 border-top">
				<div class="container pt-5 pb-5">
					<div class="row justify content-center">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-lg-3">
									<h5>FEATURES</h5>
									<ul class="list-unstyled">
										<li><a href="#">Comunity</a></li>
									</ul>
								</div>

								<div class="col-12 col-lg-3">
									<h5>ACCOUNT</h5>
									<ul class="list-unstyled">
										<li><a href="#">Home</a></li>
										<li><a href="#">Login</a></li>
										<li><a href="#">Daftar</a></li>
									</ul>
								</div>

								<div class="col-12 col-lg-3">
									<h5>COMPANY</h5>
									<ul class="list-unstyled">
										<li><a href="#">Help Center</a></li>
									</ul>
								</div>

								<div class="col-12 col-lg-3">
									<h5>GET CONNECTED</h5>
									<ul class="list-unstyled">
										<li><a href="#">Jalan Raya Bersama Surabaya</a></li>
										<li><a href="#">0822 - 5715 - 4886</a></li>
										<li><a href="#">support@sirs.id</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row border-top justify-content-center align-items-center pt-4">
						<div class="col-auto text-gray-500 font-weight-light">
							2022 Copyright - All rights reserved - Made in Surabaya
						</div>
					</div>
				</div>
			</footer>



			<script src="../../system/libraries/jquery/jquery.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>