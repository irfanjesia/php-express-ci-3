<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/image/logo2.png">
	<link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Halaman Update</title>
</head>

<body style="background-image: url('<?php echo base_url(); ?>public/image/update.jpeg'); background-repeat:no-repeat; background-size:cover; background-attachment: fixed; background-position: right 20% bottom 50%;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<img class="navbar-brand" src="<?php echo base_url(); ?>public/image/logo.png" style="display: block; width: 10%;" alt="logo">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href='<?php echo base_url('/paket/admin/'); ?>'>Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href='<?php echo base_url('/paket/admin/#list'); ?>'>List Pengiriman</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col" style="margin-right: 40px; margin-left: 40px; margin-bottom: 40px; margin-top: 40px;">
				<h1>Update</h1>
				<br>
				<?php foreach ($posts as $post) : ?>
					<form action='<?php echo base_url('/paket/update_process/' . $post->resi); ?>' method='post' style="background-color: lightgrey; padding: 20px 20px 20px 20px; border-radius: 5px; opacity: 90%">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label"> Nama Barang: </label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='barang' value='<?php echo $post->barang; ?>'>
						</div>
						<div class="mb-3">
							<label class="form-label"> Nama Pengirim: </label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='pengirim' value='<?php echo $post->pengirim; ?>'>
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Penerima: </label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='penerima' value='<?php echo $post->penerima; ?>'>
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat: </label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='alamat' value='<?php echo $post->alamat; ?>'>
						</div>
						<div class="mb-3">
							<label class="form-label">Status: </label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='status' value='<?php echo $post->status; ?>'>
						</div>
					<?php endforeach; ?>
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
				<img src="<?php echo base_url(); ?>public/image/logo.png" class="rounded" style="display: block; width:85%; position: relative; top: 50%;
transform: translateY(-50%);" alt="logo">
			</div>
		</div>
		<div style="padding-bottom: 50px">
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>