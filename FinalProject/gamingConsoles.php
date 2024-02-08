<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Gaming Zone</title>

	<?php
		include 'includes/style/bootstrap.php';
		include 'includes/navbar.php';
		include 'includes/modals.php';
		include 'includes/productModal.php';
	?>

	<style>
		.thumbnail img {
		  width: 100%;
		  height: 250px;
		  object-fit: scale-down;
		  overflow: visible;
		}
		

		.social-icon {
			color: #292929;
			transition: colo 0.2;
		}

		.social-icon:hover {
			color: #333333;
		}

		ion-icon{
			width: 50px;
			height: 50px;
		}
		.page-header {
			text-align: center;
		}

		.black .active a,
		.black .active a:hover {
		    background-color: #292929 !important;
		}
		.carousel .item img {
		  object-fit: fit;
		  object-position: center;
		  width: 100%;
		  height: 60vh;
		  overflow: hidden;
		}

	</style>


</head>
<body>

	<div class="container" style="padding-top:70px;">
		<div class="col-sm-9">
			<div class="carousel slide" data-ride="carousel" id="c1"> 
				<ol class="carousel-indicators">
					<li data-target="#c1" data-slide-to="0" class="active"></li>
					<li data-target="#c1" data-slide-to="1"></li>
					<li data-target="#c1" data-slide-to="2"></li>
					<li data-target="#c1" data-slide-to="3"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="image/headers/Products/GameConsoles/Header1.jpg">
					</div>

					<div class="item">
						<img src="image/headers/Products/GameConsoles/Header2.jpg">
					</div>

					<div class="item">
						<img src="image/headers/Products/GameConsoles/Header3.jpg" >
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<img src="image/headers/Products/GameConsoles/Header4.jpg">

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
		<div class="col-md-3" style="padding-top:5px;">

			<div class="list-group">
				<ul class="nav nav-pills nav-stacked black">

					<li class="active"><a href="#t1" class="list-group-item" data-toggle="tab"data-toggle="tab">Playstation Consoles</a></li>
					<li><a href="#t2" class="list-group-item" data-toggle="tab">XBOX Consoles</a></li>
					<li><a href="#t3" class="list-group-item" data-toggle="tab">Playstation Games</a></li>
					<li><a href="#t4" class="list-group-item" data-toggle="tab">PSP Games</a></li>
					<li><a href="#t5" class="list-group-item" data-toggle="tab">PC Games</a></li>
				</ul>
			</div>

			<div class="text-center" style="padding-top:5px;">
				<h2 class="ChangeFONT">Available for</h2>
				<a href="#" class="social-icon">
					<ion-icon name="logo-playstation"></ion-icon>
				</a>
				<a href="#" class="social-icon">
					<ion-icon name="game-controller-outline"></ion-icon>
				</a>
				<a href="#" class="social-icon">
					<ion-icon name="logo-windows"></ion-icon>
				</a>


				<a href="#" class="social-icon">
					<ion-icon name="logo-xbox"></ion-icon>
				</a>


			</div>
		</div>

		




		
	</div>

	

	<!--PLAYSTATIONS--> 
	<div class="tab-content">


		<div class="tab-pane fade in active" id="t1">
			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="page-header"><h1><b>Playstations</b></h1></div>
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#P1" data-toggle="modal">
						<img src="image/gameconsoles/PLAYSTATION/P1.png"style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Playstation 2</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#P2" data-toggle="modal">
						<img src="image/gameconsoles/PLAYSTATION/P2.png"style="width: 100%;">
						<div class="caption">
							<p class="text-center"><b>Playstation 3</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#P3" data-toggle="modal">
						<img src="image/gameconsoles/PLAYSTATION/P3.webp"style="width: 100%;">
						<div class="caption">
							<p class="text-center"><b>Playstation 4</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#P4" data-toggle="modal">

						<img src="image/gameconsoles/PLAYSTATION/P4.webp"style="width: 100%;">
						<div class="caption">
							<p class="text-center"><b>Playstation 5</b></p>
						</div>

					</div>
				</div>
			</div>

			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>

		<!--XBOX-->
		<div class="tab-pane fade" id="t2">
			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="page-header"><h1><b>XBOX Consoles</b></h1></div>
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#xbox1" data-toggle="modal">
						<img src="image/gameconsoles/XBOX/xbox1.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Xbox Series S - Gilded Hunter Bundle</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#xbox2" data-toggle="modal">
						<img src="image/gameconsoles/XBOX/xbox2.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Xbox Series X</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#xbox3" data-toggle="modal">
						<img src="image/gameconsoles/XBOX/xbox3.jpg" style="width: 100%;">
						<div class="caption" class="thumbnail" data-target="#xbox1" data-toggle="modal">
							<p class="text-center"><b>Xbox Series X (Certified Refurbished)</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#xbox4" data-toggle="modal">
						<img src="image/gameconsoles/XBOX/xbox4.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Xbox Series S</b></p>
						</div>

					</div>
				</div>

			</div>

			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!--Playstation Games -->
		<div class="tab-pane fade" id="t3">
			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="page-header"><h1><b>Playstation Games</b></h1></div>
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG1" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg1.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Ghost of Tsukiyama</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG2" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg2.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed Unity</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG3" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg3.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Marvel's Spider-Man</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG4" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg4.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed Syndicate</b></p>
						</div>

					</div>
				</div>

			</div>

			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG5" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg5.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>God of War: Ragnarok</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG6" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg6.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Call of Duty: Modern Warfare 2</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG7" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg7.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Watchdogs: Legion</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PG8" data-toggle="modal">
						<img src="image/gameconsoles/PSGAMES/psg8.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Spider-Man: Miles Morales</b></p>
						</div>

					</div>
				</div>

			</div>
			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!--PSP GAMES-->
		<div class="tab-pane fade" id="t4">
			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="page-header"><h1><b>PSP Games</b></h1></div>
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP1" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP1.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Tekken 6</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP2" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP2.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Daxter</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP3" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP3.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>God of War: Ghost of Sparta</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP4" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP4.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed: Bloodlines</b></p>
						</div>

					</div>
				</div>

			</div>

			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP5" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP5.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Socom Us Navy Seals Fireteam Bravo 3</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP6" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP6.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Spider-Man 3</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP7" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP7.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Metal Gear Solid: Peace Walker</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#PSP8" data-toggle="modal">
						<img src="image/gameconsoles/PSPGAMES/PSP8.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Resistance Retribution</b></p>
						</div>

					</div>
				</div>

			</div>
			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>

		<!--PC Games-->
		<div class="tab-pane fade" id="t5">
			<div class="container ChangeFONT" style="padding-top:10px;">
				<div class="page-header"><h1><b>PC Games</b></h1></div>
				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#pcgame1" data-toggle="modal">
						<img src="image/gameconsoles/PC/pcgame1.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed: Rebellion</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#pcgame2" data-toggle="modal">
						<img src="image/gameconsoles/PC/pcgame2.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed: Origins</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#pcgame3" data-toggle="modal">
						<img src="image/gameconsoles/PC/pcgame3.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed: Mirage</b></p>
						</div>

					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail" class="thumbnail" data-target="#pcgame4" data-toggle="modal">
						<img src="image/gameconsoles/PC/pcgame4.jpg" style="width: 100%;">
						<div class="caption" >
							<p class="text-center"><b>Assassin's Creed Black Flag</b></p>
						</div>

					</div>
				</div>

			</div>

			<div class="text-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>

	</div>
	


	<?php

	include 'includes/footer.php';
	?>
</body>
</html>