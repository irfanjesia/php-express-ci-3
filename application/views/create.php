<!DOCTYPE html>
<html lang='en'>

<head>
	<link rel="icon" type="image/png" href="http://localhost/tugasakhir/public/image/logo2.png">
	<link href="http://localhost/tugasakhir/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Halaman Create</title>
</head>

<body style="background-image: url('http://localhost/tugasakhir/public/image/create.jpg'); background-repeat:no-repeat; background-size:cover; background-attachment: fixed; background-position: right 20% bottom 10%;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<img class="navbar-brand" src="http://localhost/tugasakhir/public/image/logo.png" style="display: block; width: 10%;" alt="logo">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="http://localhost/tugasakhir/paket/admin/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/tugasakhir/paket/admin/#list">List Pengiriman</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col" style="margin-right: 40px; margin-left: 40px; margin-bottom: 40px; margin-top: 40px;">
				<h1>Create</h1>
				<br>
				<form action='<?php echo base_url('/paket/create_process/'); ?>' method='post' style="background-color: lightgrey; padding: 20px 20px 20px 20px; border-radius: 5px; opacity: 90%">
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='resi'>
						<label for="floatingInput">No. Resi</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='barang'>
						<label for="floatingInput">Nama Barang</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='pengirim'>
						<label for="floatingInput">Nama Pengirim</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='penerima'>
						<label for="floatingInput">Nama Penerima</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='alamat'>
						<label for="floatingInput">Alamat</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='status'>
						<label for="floatingInput">Status</label>
					</div>
					<div class="row justify-content-md-center">
						<div class="col col-lg-6" align="center" style="margin-top: 20px">
							<div class="d-grid gap-2 mx-auto">
								<input class="btn btn-dark" type='submit' name='submit' value='Simpan'>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col" style="margin-bottom: 40px; margin-top: 40px;">
				<img src="http://localhost/tugasakhir/public/image/logo.png" class="rounded" style="display: block; width:85%; position: relative; top: 50%;
transform: translateY(-50%);" alt="logo">
			</div>
		</div>
		<div style="padding-bottom: 50px">
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="http://localhost/tugasakhir/public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>