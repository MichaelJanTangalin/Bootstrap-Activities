<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Peaky Shoppers</title>

	<?php
		include 'includes/style/bootstrap.php';
		include 'includes/navbar.php';
		include 'includes/modals.php';
	?>
	<style>
		
		
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			max-height: 550px;    /* Set slide height here */

		}


		.btn-custom{
	      border-radius: 50em;
	      color: white;
	      background: transparent;
	      border: 1px solid white;
	      transition: all 0.5s ease-in-out 0s;

	    }

	    .btn-custom:hover {
	      background: white;
	      color: black;
	    }

	    .btn-custom:active {
	      background: black;
	      color: white;
	    }

		body {
		    background: #f0f1f5;
		}

		
		.thumbnail img {
			width: 100%;
			height: 250px;
			object-fit: scale-down;
			overflow: visible;
		}
	
		

	</style>
</head>
<body>

	<div class="container-fluid" style="padding-top:50px;">

		<div class="row">
			<div class="col-md-14">
				<div class="carousel slide" data-ride="carousel" id="c1"> 
					<ol class="carousel-indicators">
						<li data-target="#c1" data-slide-to="0" class="active"></li>
						<li data-target="#c1" data-slide-to="1"></li>
						<li data-target="#c1" data-slide-to="2"></li>
						<li data-target="#c1" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/headers/Header1.gif" style="width: 100%;">
							<div class="carousel-caption">
								<img src="image/BannerImage.png" style="width: 80%; ">

								<div style="padding-bottom:30px;">
									<a href="about.php" class="btn btn-custom">Learn More</a>
									
								</div>
							</div>
						</div>

						<div class="item">
							<img src="image/headers/Header2.jpg" style="width: 100%;">
							<div class="carousel-caption">
								<img src="image/sale.png" style="width: 80%;">
							</div>
						</div>

						<div class="item">
							<img src="image/headers/Header3.jpg" style="width: 100%;">
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="image/headers/Header4.jpg" style="width: 100%;">

						</div>
					</div>

					<a href="#c1" data-slide="prev" class="left carousel-control">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a href="#c1" data-slide="next" class="right carousel-control">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>

	

	

	</div>

	<div class="container ChangeFONT" style="padding-top:20px;">
		<div class="page-header"><h1 class="text-center"><b>Explore Our Products</b></h1></div>
		<div class="col-md-3">
			<div class="thumbnail" onclick="location.href='laptopPC.php'">
				<img src="image/Category/Category1.gif" style="width: 100%;">
				<div class="caption" >
					<h3 class="text-center">Computers</h3>
				</div>
				
			</div>
		</div>

		<div class="col-md-3">
			<div class="thumbnail" onclick="location.href='computerParts.php'">
				<img src="image/Category/Category2.gif" style="width: 100%;">
				<div class="caption">
					<h3 class="text-center">Components</h3>
				</div>
				
			</div>
		</div>

		<div class="col-md-3">
			<div class="thumbnail" onclick="location.href='mobilePhones.php'">
				<img src="image/Category/Category3.gif" style="width: 100%;">
				<div class="caption">
					<h3 class="text-center">Mobile Phones</h3>
				</div>
				
			</div>
		</div>

		<div class="col-md-3">
			<div class="thumbnail" onclick="location.href='gamingConsoles.php'">
				
				<img src="image/Category/Category4.gif" style="width: 100%;">
				<div class="caption">
					<h3 class="text-center">Gaming Consoles</h3>
				</div>
				
			</div>
		</div>
	</div>


	<?php

		include 'includes/footer.php';
	?>

</body>
</html>