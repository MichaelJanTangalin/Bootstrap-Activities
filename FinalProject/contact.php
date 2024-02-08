<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">


	<?php
	include 'includes/style/bootstrap.php';
	include 'includes/navbar.php';
	include 'includes/modals.php';


	?>

	<style>
		.navbar-default{
			background: #9cdeff;
		}

		.navbar{
			margin-bottom: 0 !important;
			border: 0 !important;
		}

		body {
			background: #f0f1f5;

		}

	

		
	</style>

	
	
</head>
<body>


	<div class="container" style="padding-top:50px;">
		



		<div class="col-lg-6"style="padding-top: 60px;">
			

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.133594831398!2d121.12322961430003!3d14.591462381213702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b88062e3f005%3A0xdad9a6de9ad3a6b1!2sBirmingham%20St%2C%20Cainta%2C%201900%20Rizal!5e0!3m2!1sen!2sph!4v1669388642459!5m2!1sen!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="container">
				<h3><span class="fa-solid fa-envelope fa-lg"></span> Shelby62@sample.com</h3>
				<h3><span class="fa-solid fa-phone fa-lg"></span> +69 696 969 6960</h3>
				<h3><span class="fa-solid fa-location-dot fa-lg"></span> Birmingham Street Cainta Rizal.</h3>
			</div>
		</div>



		<form class="col-lg-6">

			<div class="page-header">
				<h1 class="ChangeFONT">Contact Us</h1>
			</div>
			
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" placeholder="Name" class="form-control ">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" placeholder="Email" class="form-control ">
				</div>

				<div class="form-group">
					<label for="name">Subject</label>
					<input type="text" placeholder="Subject" class="form-control ">
				</div>

				<div class="form-group">
					<label for="name">Message</label>
					<textarea type="text" placeholder="Message" class="form-control " rows="4"></textarea>
				</div>

				<div class="form-group">
					<input class="btn btn-danger btn-block btn-lg" type="submit"/>
				</div>

			</form>
		
	</div>


		<?php

			include 'includes/footer.php';
		?>

</body>



</html>