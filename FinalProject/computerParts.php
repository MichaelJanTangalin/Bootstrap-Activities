<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Hardware Zone</title>

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
							<img src="image/headers/Products/Parts/Header1.jpg">
						</div>

						<div class="item">
							<img src="image/headers/Products/Parts/Header2.jpg" >
							
						</div>

						<div class="item">
							<img src="image/headers/Products/Parts/Header3.jpg" >
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="image/headers/Products/Parts/Header4.jpg" >

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

					<li class="active"><a href="#t1" class="list-group-item" data-toggle="tab"data-toggle="tab">Motherboards</a></li>
					<li><a href="#t2" class="list-group-item" data-toggle="tab">RAM Memory</a></li>
					<li><a href="#t3" class="list-group-item" data-toggle="tab">Processors</a></li>
					<li><a href="#t4" class="list-group-item" data-toggle="tab">Graphics Card</a></li>
					<li><a href="#t5" class="list-group-item" data-toggle="tab">Monitor</a></li>
					<li><a href="#t6" class="list-group-item" data-toggle="tab">Keyboard</a></li>
					<li><a href="#t7" class="list-group-item" data-toggle="tab">Mouse</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!--MotherBoards-->
	<div class="tab-content">
	
	
	<div class="tab-pane fade in active" id="t1">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Motherboard</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#mobo1" data-toggle="modal">
					<img src="image/parts/Motherboards/mobo1.png">
					<div class="caption" >
						<p class="text-center"><b>GIGABYTE Z790 GAMING X AX GAMING MOTHERBOARD (LGA 1700)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#mobo2" data-toggle="modal">
					<img src="image/parts/Motherboards/mobo2.png">
					<div class="caption">
						<p class="text-center"><b>GIGABYTE Z690I AORUS ULTRA PLUS (LGA1700) MOTHERBOARD DDR5 WIFI6</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#mobo3" data-toggle="modal">
					<img src="image/parts/Motherboards/mobo3.png">
					<div class="caption">
						<p class="text-center"><b>ASUS ROG STRIX Z790-F GAMING WIFI 4*DDR5 WIFI6+BT (LGA 1700) MOTHERBOARD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#mobo4" data-toggle="modal">

					<img src="image/parts/Motherboards/mobo4.png">
					<div class="caption">
						<p class="text-center"><b>GIGABYTE B660 GAMING X AX DDR4 with Thermal Guard, 2.5GbE Gaming LAN, WIFI 6 802.11ax</b></p>
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

	<!--MEMORY-->
	<div class="tab-pane fade" id="t2">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>RAM Memory</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ram1" data-toggle="modal">
					<img src="image/parts/RAM/RAM1.png">
					<div class="caption" >
						<p class="text-center"><b>G.SKILL TRIDENT Z5 32GB (2X16GB) DDR5-5600MHZ SILVER CL40-40-40-89 1.20V RAM | DESKTOP MEMORY F5-5600J4040C16GX2-TZ5S</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ram2" data-toggle="modal">
					<img src="image/parts/RAM/RAM2.png">
					<div class="caption" >
						<p class="text-center"><b>G.SKILL TRIDENT Z5 32GB (2X16GB) DDR5-5600MHZ BLACK CL36-36-36-89 1.20V RAM | DESKTOP MEMORY F5-5600J3636C16GX2-TZ5K</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ram3" data-toggle="modal">
					<img src="image/parts/RAM/RAM3.png">
					<div class="caption" >
						<p class="text-center"><b>G.SKILL TRIDENT Z5 RGB 32GB 2X16 DDR5 5600MHZ F5-5600J4040C16GX2-TZ5RK | DESKTOP MEMORY</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ram4" data-toggle="modal">
					<img src="image/parts/RAM/RAM4.webp">
					<div class="caption" >
						<p class="text-center"><b>G.SKILL RIPJAWS S5 32GB (2X16GB) DDR5-5200MHZ BLACK CL40-40-40-83 1.10V RAM | DESKTOP MEMORY F5-5200J4040A16GX2-RS5K</b></p>
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

	<!--Processors-->
	<div class="tab-pane fade" id="t3">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Processors</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU1" data-toggle="modal">
					<img src="image/parts/Processors/CPU1.webp">
					<div class="caption" >
						<p class="text-center"><b>AMD Ryzen 9 5900x Processor</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU2" data-toggle="modal">
					<img src="image/parts/Processors/CPU2.webp">
					<div class="caption" >
						<p class="text-center"><b>AMD Ryzen 3 3200G Processor with Vega 8 Graphics</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU3" data-toggle="modal">
					<img src="image/parts/Processors/CPU3.webp">
					<div class="caption" >
						<p class="text-center"><b>AMD Ryzen 5 3600 3.6 GHz Six-Core AM4 Processor</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU4" data-toggle="modal" >
					<img src="image/parts/Processors/CPU4.webp">
					<div class="caption" >
						<p class="text-center"><b>AMD Ryzen 7 5700G 3.8GHz Processor</b></p>
					</div>

				</div>
			</div>

		</div>


		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU5" data-toggle="modal">
					<img src="image/parts/Processors/CPU5.webp">
					<div class="caption" >
						<p class="text-center"><b>Intel i3-10100F 3.60Ghz Processor</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU6" data-toggle="modal">
					<img src="image/parts/Processors/CPU6.webp">
					<div class="caption" >
						<p class="text-center"><b>Intel Core i9 12900K Desktop Processor BX8071512900K</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU7" data-toggle="modal">
					<img src="image/parts/Processors/CPU7.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Intel i3-10100F 3.60Ghz Processor Core i5 12th Gen Alder</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#CPU8" data-toggle="modal">
					<img src="image/parts/Processors/CPU8.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Intel Core i7-10700KF</b></p>
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






		<!--Graphic Cards-->
		<div class="tab-pane fade" id="t4">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Graphics Card</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#VC1" data-toggle="modal">
					<img src="image/parts/VideoCard/VC1.webp">
					<div class="caption" >
						<p class="text-center"><b>MSI RTX 4080 GAMING X TRIO 16GB GRAPHICS CARD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VC2" data-toggle="modal">
					<img src="image/parts/VideoCard/VC2.webp">
					<div class="caption" >
						<p class="text-center"><b>GIGABYTE RTX 4080 EAGLE OC 16GB GDDR6X GV-N4080EAGLE-OC-16GD GRAPHICS CARD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VC3" data-toggle="modal">
					<img src="image/parts/VideoCard/VC3.webp">
					<div class="caption" data-target="#VC1" data-toggle="modal">
						<p class="text-center"><b>GIGABYTE RX 6650 XT EAGLE 8GB GV-R665XTEAGLE-8GD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VC4" data-toggle="modal">
					<img src="image/parts/VideoCard/VC4.webp">
					<div class="caption" >
						<p class="text-center"><b>Gigabyte AERO 16 YE5-94US949HP</b></p>
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

		<!--Monitor-->
		<div class="tab-pane fade" id="t5">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Monitors</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Monitor1" data-toggle="modal">
					<img src="image/parts/Monitor/Monitor1.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ASUS VG258QR 24.5" TN 165HZ 1920X1080 0.5MS GAMING MONITOR</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Monitor2" data-toggle="modal">
					<img src="image/parts/Monitor/Monitor2.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>LG 27GP850-B 27IN ULTRAGEAR NANO IPS 144HZ 2560X1440 1MS GSYNC GAMING MONITOR</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Monitor3" data-toggle="modal">
					<img src="image/parts/Monitor/Monitor3.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>MSI MODERN MD271CPW WHITE 27" CURVE LED VA 75HZ 1080P HDMI DP USB-C SPKR VESA</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Monitor4" data-toggle="modal">
					<img src="image/parts/Monitor/Monitor4.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>OPEN 27CH2 27" IPS 75HZ 1920X1080 4MS VGA HDMI</b></p>
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

		<!--Keyboards-->
		<div class="tab-pane fade" id="t6">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Keyboards</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Keyboard1" data-toggle="modal">
					<img src="image/parts/Keyboard/Keyboard1.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>LOGITECH G715 TKL WIRELESS GAMING KEYBOARD GX RED LINEAR OFF-WHITE</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Keyboard2" data-toggle="modal">
					<img src="image/parts/Keyboard/Keyboard2.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>HAVIT HV-KB435L TKL RGB BACKLIT MECHANICAL GAMING KEYBOARD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Keyboard3" data-toggle="modal">
					<img src="image/parts/Keyboard/Keyboard3.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>AULA F3287 WIRED TKL 80% COMPACT 87KEYS WHITE&GREY KEYCAPS MECHANICAL GAMING KEYBOARD</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Keyboard4" data-toggle="modal">
					<img src="image/parts/Keyboard/Keyboard4.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ASUS ROG STRIX FLARE II NX BLUE SWITCH CLICKY & TACTILE MECHANICAL GAMING KEYBOARD XA08 STRIX FLARE II/NXBL/US</b></p>
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

		<!--Mouse-->
		<div class="tab-pane fade" id="t7">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Mouse</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Mouse1" data-toggle="modal">
					<img src="image/parts/Mouse/Mouse1.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>AULA F810 RGB LIGHTWEIGHT HONEYCOMB SHELL WIRED GAMING MOUSE</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Mouse2" data-toggle="modal">
					<img src="image/parts/Mouse/Mouse2.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>HAVIT HV-MS1002 RGB BACKLIT GAMING MOUSE</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Mouse3" data-toggle="modal">
					<img src="image/parts/Mouse/Mouse3.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>STEELSERIES AEROX 3 WIRELESS 2022 SNOW 62608</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Mouse4" data-toggle="modal">
					<img src="image/parts/Mouse/Mouse4.webp" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>HAVIT HV-MS1003 RGB BACKLIT GAMING MOUSE</b></p>
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

</div>



	<?php

		include 'includes/footer.php';
	?>
</body>
</html>