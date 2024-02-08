<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Mobile Zone</title>

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
			color: #007bff;
			transition: colo 0.2;
		}

		.social-icon:hover {
			color: #333333;
		}

		ion-icon{
			width: 30px;
			height: 30px;
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
			<div class="col-md-9">
				<div class="carousel slide" data-ride="carousel" id="c1"> 
					<ol class="carousel-indicators">
						<li data-target="#c1" data-slide-to="0" class="active"></li>
						<li data-target="#c1" data-slide-to="1"></li>
						<li data-target="#c1" data-slide-to="2"></li>
						<li data-target="#c1" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/headers/Products/Cellphones/Header1.jpg" >
						</div>

						<div class="item">
							<img src="image/headers/Products/Cellphones/Header2.jpg">
							
						</div>

						<div class="item">
							<img src="image/headers/Products/Cellphones/Header3.jpg" >
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="image/headers/Products/Cellphones/Header4.jpg">

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

					<li class="active"><a href="#t1" class="list-group-item" data-toggle="tab"data-toggle="tab">ROG Phones</a></li>
					<li><a href="#t2" class="list-group-item" data-toggle="tab">Vivo Phones</a></li>
					<li><a href="#t3" class="list-group-item" data-toggle="tab">Xiaomi Phones</a></li>
					<li><a href="#t4" class="list-group-item" data-toggle="tab">Samsung Phones</a></li>
					<li><a href="#t5" class="list-group-item" data-toggle="tab">Sony Phones</a></li>
					<li><a href="#t6" class="list-group-item" data-toggle="tab">Iphone Mobiles</a></li>
					<li><a href="#t7" class="list-group-item" data-toggle="tab">Nokia Phones</a></li>
				</ul>
			</div>
		</div>
	</div>

	
	<!--ROG SERIES--> 
	<div class="tab-content">
	
	
	<div class="tab-pane fade in active" id="t1">
		<div class="container ChangeFONT" >
			<div class="page-header"><h1><b>ROG Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE1" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ROG Phone 5s</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE2" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG2.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 5s Pro</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE3" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG3.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 6</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE4" data-toggle="modal">

					<img src="image/cellphones/ROGPhones/ROG4.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 6D</b></p>
					</div>

				</div>
			</div>
		</div>

		<div class="container ChangeFONT">
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE5" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG5.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ROG Phone 6 BATMAN Edition</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE6" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG6.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 6 Diablo Immortal Edition</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE7" data-toggle="modal">
					<img src="image/cellphones/ROGPhones/ROG7.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 5 Ultimate</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROGPHONE8" data-toggle="modal">

					<img src="image/cellphones/ROGPhones/ROG8.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Phone 6D Ultimate</b></p>
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

	<!--Vivo Phones-->
	<div class="tab-pane fade" id="t2">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Vivo Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#VP1" data-toggle="modal">
					<img src="image/cellphones/VivoPhones/VP1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivo Y02s</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VP2" data-toggle="modal">
					<img src="image/cellphones/VivoPhones/VP2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivo T1x</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VP3" data-toggle="modal">
					<img src="image/cellphones/VivoPhones/VP3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivo X80</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VP4" data-toggle="modal">
					<img src="image/cellphones/VivoPhones/VP4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivo V25</b></p>
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

	<!--Xiaomi Phones -->
	<div class="tab-pane fade" id="t3">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Xiaomi Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#XP1" data-toggle="modal">
					<img src="image/cellphones/XiaomiPhones/XP1.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>POCO X4 PRO</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#XP2" data-toggle="modal">
					<img src="image/cellphones/XiaomiPhones/XP2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>POCO X3 PRO</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#XP3" data-toggle="modal">
					<img src="image/cellphones/XiaomiPhones/XP3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>POCO X3 GT</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#XP4" data-toggle="modal">
					<img src="image/cellphones/XiaomiPhones/XP4.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>REDMI NOTE 11</b></p>
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

		<!--SAMSUNG PHONES-->
		<div class="tab-pane fade" id="t4">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Samsung Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#SP1" data-toggle="modal">
					<img src="image/cellphones/SamsungPhones/SP1.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Galaxy A04e</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#SP2" data-toggle="modal">
					<img src="image/cellphones/SamsungPhones/SP2.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Galaxy Z Fold4</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#SP3" data-toggle="modal">
					<img src="image/cellphones/SamsungPhones/SP3.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Galaxy A13</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#SP4" data-toggle="modal">
					<img src="image/cellphones/SamsungPhones/SP4.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Galaxy Z Flip4</b></p>
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

		<!--Sony Phones-->
		<div class="tab-pane fade" id="t5">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Sony Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Sony1" data-toggle="modal">
					<img src="image/cellphones/SonyPhones/Sony1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Xperia PRO 512GB, HDMI input, 360° antenna, 6.5” 4K 120Hz HDR OLED, 5G
</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Sony2" data-toggle="modal">
					<img src="image/cellphones/SonyPhones/Sony2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Xperia 1 IV 512GB, bright 6.5” 4K 120Hz HDR OLED, 4K 120fps HDR video, true optical zoom, 5G</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Sony3" data-toggle="modal">
					<img src="image/cellphones/SonyPhones/Sony3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Xperia 1 IV 512GB, bright 6.5” 4K 120Hz HDR OLED, 4K 120fps HDR video, true optical zoom, 5G</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Sony4" data-toggle="modal" >
					<img src="image/cellphones/SonyPhones/Sony4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Xperia PRO-I 512GB, 1” (1.0-type) image sensor camera w/ 4K 120fps and dual aperture, 5G</b></p>
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

		<!--Iphone Mobiles-->
		<div class="tab-pane fade" id="t6">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Iphone Mobiles</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Iphone1" data-toggle="modal">
					<img src="image/cellphones/Iphones/Iphone1.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>iPhone 14 Pro</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Iphone2" data-toggle="modal">
					<img src="image/cellphones/Iphones/Iphone2.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>iPhone 14</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Iphone3" data-toggle="modal">
					<img src="image/cellphones/Iphones/Iphone3.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>iPhone 13</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Iphone4" data-toggle="modal">
					<img src="image/cellphones/Iphones/Iphone4.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>iPhone SE</b></p>
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

		<!--Nokia Phones-->
		<div class="tab-pane fade" id="t7">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Nokia Phones</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Nokia1" data-toggle="modal">
					<img src="image/cellphones/Nokiaphones/Nokia1.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Nokia X30 5G</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Nokia2" data-toggle="modal">
					<img src="image/cellphones/Nokiaphones/Nokia2.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Nokia C2 2nd Edition</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Nokia3" data-toggle="modal">
					<img src="image/cellphones/Nokiaphones/Nokia3.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Nokia C21</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Nokia4" data-toggle="modal">
					<img src="image/cellphones/Nokiaphones/Nokia4.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Nokia 7.2</b></p>
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

</div>

	<?php

		include 'includes/footer.php';
	?>
</body>
</html>