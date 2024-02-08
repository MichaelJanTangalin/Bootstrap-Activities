<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



	<?php
		include 'includes/modals.php';
		include 'includes/navbar.php';
	?>

	<style>
		.thumbnail img{
			width: 350px;
			height: 200px;
		}

		.thumbnail img:hover{
			opacity: .10;
		}

		ion-icon{
			width: 50px;
			height: 50px;
			color: gray;
		}

	</style>
	
</head>
<body>

	

	<div class="container">
		
		<div class="page-header">
			<h1>Contact Us</h1>
		</div>


		<div class="col-md-6">
			<img src="image/anonymous.png" height="410" width="450">
		</div>


		<form class="col-md-6">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" placeholder="Name" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Email</label>
				<input type="text" placeholder="Email" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Subject</label>
				<input type="text" placeholder="Subject" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Message</label>
				<textarea type="text" placeholder="Message" class="form-control" rows="4"></textarea>
			</div>

			<div class="form-group">
				<input class="btn btn-primary btn-block" type="submit"/>
			</div>

		</form>

	</div>

	<footer class="">
		<div class="container">
			<p class="text-center text-muted" style="padding: 10px;">Copyright © <script>document.write(new Date().getFullYear());</script>: Michael Jan Tangalin</p>

			<div class="text-center">
				<a href="https://www.facebook.com/">
					<ion-icon name="logo-facebook"></ion-icon>
				</a>

				<a href="https://www.linkedin.com/in/michael-jan-tangalin-86657b229/">
					<ion-icon name="logo-linkedin"></ion-icon>
				</a>

				<a href="https://github.com/Master-kyoya?tab=repositories">
					<ion-icon name="logo-github"></ion-icon>
				</a>

				<a href="https://www.google.com/">
					<ion-icon name="logo-google"></ion-icon>
				</a>
			</div>
		</div>
	</footer>



</body>



</html>