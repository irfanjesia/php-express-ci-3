<!DOCTYPE html>
<html lang='en'>

<head>
	<link rel="icon" type="image/png" href="http://localhost/tugasakhir/public/image/logo2.png">
	<link href="http://localhost/tugasakhir/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Halaman Guest</title>
</head>

<body style="background-image: url('http://localhost/tugasakhir/public/image/guest.jpeg'); background-repeat:no-repeat; background-size:cover; background-attachment: fixed; background-position: right 100% bottom 100%;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<img class="navbar-brand" src="http://localhost/tugasakhir/public/image/logo.png" style="display: block; width: 10%;" alt="logo">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="http://localhost/tugasakhir/paket/home/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/tugasakhir/paket/home/#tentang">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/tugasakhir/paket/home/#team">Our Team</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col" style="margin-right: 40px; margin-left: 40px; margin-bottom: 40px; margin-top: 40px;">
				<?php foreach ($posts as $post) : ?>
					<?php if ($post == null) { ?>
						<h3>Data tidak ditemukan.</h3>
						<p>Nomor resi yang Anda masukkan salah, silakan kembali ke halaman sebelumnya.</p>
					<?php } else { ?>
						<h3>No. Resi: <?php echo $post->resi; ?></h3>
						<ul class="list-group list-group" style="opacity: 90%">
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Nama Barang</div>
									<?php echo $post->barang; ?>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Nama Pengirim</div>
									<?php echo $post->pengirim; ?>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Nama Penerima</div>
									<?php echo $post->penerima; ?>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Alamat</div>
									<?php echo $post->alamat; ?>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">Status</div>
									<?php echo $post->status; ?>
								</div>
							</li>
						</ul>
					<?php } ?>
				<?php endforeach; ?>
			</div>
			<div class="col" style="margin-bottom: 40px; margin-top: 40px;">
				<?php if ($post == null) {
					echo '';
				} else { ?>
					<img src="http://localhost/tugasakhir/public/image/logo.png" class="rounded" style="display: block; width:85%; position: relative; top: 50%;
transform: translateY(-50%);" alt="logo">
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="fixed-bottom">
		<footer class="container-fluid" style="background-color: whitesmoke; padding-top: 28px; padding-bottom: 18px; margin-top: 55px;">
			<p align="center">Copyright © 2021. All Rights Reserved. | PHP Express</p>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="http://localhost/tugasakhir/public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>