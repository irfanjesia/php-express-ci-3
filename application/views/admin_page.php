<?php
session_start();
if (empty($_SESSION['username'])) {
	echo '<script>alert("Maaf, Anda belum login.")</script>';
	redirect(base_url(), 'refresh');
} else {
?>

	<!DOCTYPE html>
	<html>

	<head>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/image/logo2.png">
		<link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<title>Halaman Admin</title>
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
							<a class="nav-link" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#list">List Pengiriman</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href='<?php echo base_url(); ?>Admin/logout/'>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid" style="background-image: url('<?php echo base_url(); ?>public/image/admin.jpeg'); height: 530px; width: 100%; background-attachment: fixed;  margin-top: 56px;">
			<div class="row" align="center">
				<h1 style="color: white; margin-top: 175px;">Selamat datang, <?php echo $_SESSION['username']; ?>.</h1>
			</div>
			<div class="row justify-content-md-center">
				<div class="col col-lg-4" align="center">
					<p style="color: white; font-size: larger">Selamat bekerja! Gunakan sistem ini untuk kepentingan
						pengolahan data barang.</p>
				</div>
			</div>
			<div class="row justify-content-md-center" style="margin-bottom: 140px">
				<div class="col col-lg-8">
					<div class="d-grid gap-2 col-3 mx-auto">
						<a href='<?php echo base_url(); ?>Admin/create/' class="btn btn-dark" style="margin-top: 15px;">Create</a>
					</div>
				</div>
			</div>
		</div>
		<section id="list" style="min-height: 515px;">
			<div class="container" style="padding-bottom: 20px; padding-top: 45px">
				<h1 style="text-align: center; margin-bottom: 20px">List Pengiriman</h1>
				<br>
				<table class="table table-responsive table-hover table-sm align-middle">
					<thead class="table-secondary">
						<tr>
							<th>No. Resi</th>
							<th>Nama Barang</th>
							<th>Nama Pengirim</th>
							<th>Nama Penerima</th>
							<th>Alamat</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php foreach ($posts as $post) : ?>
						<tr class="table-light">
							<td> <?php echo $post->resi; ?></td>
							<td> <?php echo $post->barang; ?> </td>
							<td> <?php echo $post->pengirim; ?> </td>
							<td> <?php echo $post->penerima; ?> </td>
							<td> <?php echo $post->alamat; ?> </td>
							<td> <?php echo $post->status; ?> </td>
							<td>
								<div class="d-grid gap-2 col-4">
									<a href='<?php echo base_url('/Admin/update/' . $post->resi); ?>' class="badge text-primary text-decoration-none" style="font-size: 14px">Update</a>
									<a href='<?php echo base_url('/Admin/delete/' . $post->resi); ?>' onclick='return confirm("Apakah anda yakin ingin menghapus data?")' class="badge text-danger text-decoration-none" style="font-size: 14px">Delete</a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</section>
		<div style="padding-bottom: 30px">
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	</body>

	</html>
<?php } ?>