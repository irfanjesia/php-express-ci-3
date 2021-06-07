<!DOCTYPE html>
<html lang="en">
<head>
	<link href="http://localhost/tugasakhir/public/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Login Admin</title>
</head>
<body style="background-image: url('http://localhost/tugasakhir/public/image/login.jpeg'); background-repeat:no-repeat; background-size:cover;">
<div class="container-fluid">
	<div class="row" align="center">
		<img src="http://localhost/tugasakhir/public/image/logo.png" class="rounded" style="display: block; width:25%; margin-left: auto;
margin-right: auto; margin-top: 140px; margin-bottom: 40px;" alt="logo">
	</div>
</div>
<div class="container-fluid">
	<form action='<?php echo base_url('/paket/login_process/'); ?>' method='post'>
		<div class="row justify-content-md-center">
			<div class="col col-lg-8" align="center">
				<div class="d-grid gap-2 col-4 mx-auto">
					<input class="form-control" type='text' name='username' placeholder='Username' style="background-color: lightgrey; border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; border-color: darkgrey" required autofocus>
				</div>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-lg-8" align="center">
				<div class="d-grid gap-2 col-4 mx-auto" style="margin-bottom: 30px;">
					<input class="form-control" type='password' name='password' placeholder='Password' style="background-color: lightgrey; border-top-right-radius: 0;
  border-top-left-radius: 0; border-color: darkgrey; border-top-color: lightgrey;" required>
				</div>
			</div>
		</div>
		<div class="row justify-content-md-center" style="margin-bottom: 140px">
			<div class="col col-lg-8" align="center">
				<div class="d-grid gap-2 col-4 mx-auto">
					<input class="btn btn-dark" type='submit' name='submit' value='Login'>
					<p style="margin-top: 20px">© 2021</p>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="fixed-bottom">
	<div class="footer">
		<footer class="container-fluid" style="padding-top: 28px; padding-bottom: 28px; margin-top: 81px;">
		</footer>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
		integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
		crossorigin="anonymous"></script>
<script src="http://localhost/tugasakhir/public/js/bootstrap.min.js"
		integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
		crossorigin="anonymous"></script>
</body>
</html>
