<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/image/logo2.png">
	<link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Halaman Home</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container-fluid">
			<img class="navbar-brand" src="<?php echo base_url(); ?>public/image/logo.png" style="display: block; width: 10%;" alt="logo">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#cek">Cek Resi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tentang">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">Our Team</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="padding-top: 21px;">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url(); ?>public/image/carousel1.png" class="d-block w-100" style="width: 100%; height: 565px;" alt="carousel1">
				<div class="carousel-caption d-none d-md-block">
					<h5>Pengiriman Seluruh Indonesia</h5>
					<p>PHP Express sudah tersebar di lebih dari 40 kota yang ada di seluruh Indonesia.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url(); ?>public/image/carousel2.png" class="d-block w-100" style="width: 100%; height: 565px;" alt="carousel2">
				<div class="carousel-caption d-none d-md-block">
					<h5>Lebih Berat Lebih Hemat</h5>
					<p>PHP Express dapat melakukan pengiriman barang hingga 10kg dengan harga yang lebih ekonomis.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url(); ?>public/image/carousel3.png" class="d-block w-100" style="width: 100%; height: 565px;" alt="carousel3">
				<div class="carousel-caption d-none d-md-block">
					<h5>PHP Kilat</h5>
					<p>Barang cepat sampai tujuan hanya dengan estimasi 1 hari sampai di kota-kota besar Indonesia.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<section id="cek">
		<div class="container-fluid" style="padding-top: 50px">
			<form action='<?php echo base_url(); ?>Guest/cek_resi/' method='post'>
				<div class="row">
					<div class="col" style="margin: 40px;">
						<h5>Masukkan Nomor Resi</h5>
						<div class="mb-3">
							<input type="text" name='resi' class="form-control" id="formGroupExampleInput" placeholder="contoh: 9930621">
						</div>
						<div class="d-grid gap-2 col-3">
							<input class="btn btn-dark" type='submit' name='submit' value='Cek Resi'>
						</div>
					</div>
					<div class="col" style="margin: 40px;">
						<h2>Lacak Kiriman</h2>
						<p>Sekarang Anda bisa melacak informasi paket Anda, caranya cukup mudah hanya dengan memasukan nomor
							resi dan status paket Anda akan langsung terlihat.</p>
					</div>
				</div>
			</form>
		</div>
	</section>
	<section style="background-color: #eeeeee;" id="tentang">
		<div class="row" style="margin: 40px; padding-top: 60px; padding-bottom: 50px;">
			<div class="col-8">
				<h2>About Us</h2>
				<p>
					PHP Express merupakan salah satu jasa pengiriman terpercaya yang ada di Indonesia dan sudah ada sejak
					tahun 2021, didirikan dengan tujuan memudahkan pengiriman barang dan menjamin keamanan terhadap barang
					anda.
				</p>
				<p>
					PHP Express berkomitmen untuk mengembangkan dan memperluas jangkauan pengiriman hingga ke seluruh kota
					yang ada di Indonesia, saat ini kami tercatat sudah berada di lebih dari 40 kota besar yang ada di
					Indonesia.
				</p>
				<p>
					Kami memiliki lebih dari 2000 kurir yang akan menjamin paket anda sampai dengan cepat dan selamat,
					sehingga anda tidak perlu khawatir karena status pengiriman dapat dipantau secara berkala melalui fitur
					yang sudah kami sediakan.
				</p>
			</div>
			<div class="col-4">
				<img style="border-radius: 10%; width: 95%; height: 95%;" src="<?php echo base_url(); ?>public/image/php.JPG" alt="about">
			</div>
		</div>
	</section>
	<section id="team" style=" text-align: center; padding: 2% 5%;">
		<h2 style="padding-bottom: 15px;">Our Team</h2>
		<div class="row" style="margin-top: 40px">
			<div style="text-align: center; padding: 3%" class="feature-box col-lg-3">
				<img style="width: 70%; margin-bottom: 1rem; border-radius: 100%" src="<?php echo base_url(); ?>public/image/foto1.jpg" alt="Irfan">
				<h4>Irfan Jesia Abyakta</h4>
				<p>195150407111021</p>
			</div>
			<div style="text-align: center; padding: 3%" class="feature-box col-lg-3">
				<img style="width: 70%; margin-bottom: 1rem; border-radius: 100%" src="<?php echo base_url(); ?>public/image/foto2.JPG" alt="Zia">
				<h4>Hafia Azzahra</h4>
				<p>195150400111049</p>
			</div>
			<div style="text-align: center; padding: 3%" class="feature-box col-lg-3">
				<img style="width: 70%; margin-bottom: 1rem; border-radius: 100%" src="<?php echo base_url(); ?>public/image/foto3.jpg" alt="Nanta">
				<h4>Putu Ananta Yoga</h4>
				<p>195150401111033</p>
			</div>
			<div style="text-align: center; padding: 3%" class="feature-box col-lg-3">
				<img style="width: 70%; margin-bottom: 1rem; border-radius: 100%" src="<?php echo base_url(); ?>public/image/foto4.JPG" alt="Cornel">
				<h4>Cornella Putri M</h4>
				<p>195150407111025</p>
			</div>
		</div>
	</section>
	<footer class="container-fluid" style="background-color: whitesmoke; padding-top: 28px; padding-bottom: 18px;">
		<p align="center">Copyright © 2021. All Rights Reserved. | PHP Express</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>