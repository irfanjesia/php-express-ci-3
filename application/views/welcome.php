<!DOCTYPE html>
<html lang='en'>

<head>
	<link rel="icon" type="image/png" href="http://localhost/tugasakhir/public/image/logo2.png">
	<link href="http://localhost/tugasakhir/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Welcome!</title>
</head>

<body style="background-image: url('http://localhost/tugasakhir/public/image/welcome.jpeg'); background-repeat:no-repeat; background-size:cover; background-attachment: fixed; background-position: right 56% bottom 100%;">
	<div class="container-fluid">
		<div class="row" align="center" style="margin-top: 70px;">
			<h2>Welcome to PHP Express!</h2>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-lg-6" align="center">
				<p>Jasa pengiriman berbasis teknologi yang mendukung pertumbuhan<br>e-commerce dengan jangkauan ke seluruh
					Indonesia.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="d-grid gap-2 col-4 mx-auto" style="margin-bottom: 40px;">
			<a class="btn btn-dark" href='<?php $this->load->helper('url');
											echo base_url('/paket/home/'); ?>' role="button">Enter as Guest</a>
			<a class="btn btn-secondary" href='<?php $this->load->helper('url');
												echo base_url('/paket/login/'); ?>' role="button">Login as Administrator</a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" align="center" style="margin-bottom: 100px;">
			<img src="http://localhost/tugasakhir/public/image/logo.png" class="rounded" style="display: block; width:25%; margin-left: auto;
margin-right: auto;" alt="logo">
		</div>
	</div>
	<br>
	<br>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="http://localhost/tugasakhir/public/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>