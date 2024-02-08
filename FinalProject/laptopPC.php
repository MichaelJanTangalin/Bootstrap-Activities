<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Computer Zone</title>

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
						<img src="image/headers/Products/Computers/Header1.jpg">
					</div>

					<div class="item">
						<img src="image/headers/Products/Computers/Header2.jpg">

					</div>

					<div class="item">
						<img src="image/headers/Products/Computers/Header3.jpg">
						<div class="carousel-caption">
						</div>
					</div>

					<div class="item">
						<img src="image/headers/Products/Computers/Header4.jpg">

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
					<li class="active"><a href="#t1" class="list-group-item" data-toggle="tab"data-toggle="tab">ROG Series</a></li>
					<li><a href="#t2" class="list-group-item" data-toggle="tab">Intel Series</a></li>
					<li><a href="#t3" class="list-group-item" data-toggle="tab">Desktop Series</a></li>
					<li><a href="#t4" class="list-group-item" data-toggle="tab">Lenovo Series</a></li>
					<li><a href="#t5" class="list-group-item" data-toggle="tab">ProArt Studio Book Series</a></li>
					<li><a href="#t6" class="list-group-item" data-toggle="tab">ZenBook Series</a></li>
					<li><a href="#t7" class="list-group-item" data-toggle="tab">VivaBook Series</a></li>
				</ul>
			</div>
		</div>
		

	</div>


	<!--ROG SERIES--> 
	<div class="tab-content">
	
	
	<div class="tab-pane fade in active" id="t1">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>ROG Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG1" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ROG Flow X16 (2022) <br>GV601RE-M5057X</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG2" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG2.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Flow Z13 (2022) <br>GZ301ZA-LD016W</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG3" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG3.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Strix SCAR 17 (2022) <br>G733ZS-KH030X</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG4" data-toggle="modal">

					<img src="image/laptops/ROGSeries/ROG4.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Zephyrus M16 (2022) <br>GU603ZE-K8045W</b></p>
					</div>

				</div>
			</div>
		</div>

		<div class="container ChangeFONT" >
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG5" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG5.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ROG G703 <br>G703GXR-EV025R</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG6" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG6.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Mothership <br>GZ700GX-AD027T</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG7" data-toggle="modal">
					<img src="image/laptops/ROGSeries/ROG7.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Zephyrus Duo 16 (2022) <br>GX650RW-LO113WS</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ROG8" data-toggle="modal">

					<img src="image/laptops/ROGSeries/ROG8.png" style="width: 100%;">
					<div class="caption">
						<p class="text-center"><b>ROG Zephyrus G14 (2022) <br>GA402RJ-L8034WS</b></p>
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

	<!--INTEL SERIES-->
	<div class="tab-pane fade" id="t2">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Intel Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Intel1" data-toggle="modal">
					<img src="image/laptops/IntelSeries/Intel1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>MSI Gaming GE76 12UGS-259 Raider</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Intel2" data-toggle="modal">
					<img src="image/laptops/IntelSeries/Intel2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>MSI Gaming GS77 12UGS-084 Stealth</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Intel3" data-toggle="modal">
					<img src="image/laptops/IntelSeries/Intel3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Razer Blade Pro 17 i7 10875H 16GB 512GB RTX207</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Intel4" data-toggle="modal">
					<img src="image/laptops/IntelSeries/Intel4.png" style="width: 100%;">
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

	<!--DESKTOP SERIES-->
	<div class="tab-pane fade" id="t3">
		<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Desktop Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Desktop1" data-toggle="modal">
					<img src="image/laptops/Desktops/Desktops1.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Skytech Eclipse Gaming PC Desktop - INTEL Core i9 13900K 3.0 GHz, NVIDIA RTX 4090, 1TB NVME Gen4 SSD, 32GB DDR5 RAM RGB, 1200W GOLD PCIE 5.0 PSU, 420mm AIO, 11 AC Wi-Fi, Windows 11 Home 64-bit</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Desktop2" data-toggle="modal">
					<img src="image/laptops/Desktops/Desktops2.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Skytech Chronos High-Performance PC Desktop INTEL Core i5 12600K 3.7 GHz, RTX 3070, 1TB NVME SSD, 16G DDR4 3200, 650W GOLD PSU, 240mm AIO, AC Wi-Fi, Windows 10 Home 64-bit</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Desktop3" data-toggle="modal">
					<img src="image/laptops/Desktops/Desktops3.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>IPASON - High-Performance Gaming desktop - AMD Ryzen 5 5600G 6 core 3.9GHz - 16GB(8*2) DDR4 3200MHz - 500GB M.2 NVMe - 550W PSU - 1TB Hard Disk Drive - Windows 10 home - WIFI - Gaming PC</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Desktop4" data-toggle="modal">
					<img src="image/laptops/Desktops/Desktops4.jpg" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Thermaltake LCGS Graphite 360 Gaming Desktop (AMD Ryzen 5 5600X 6-core, 16GB DDR4 3600MHz RGB Memory, 1TB NVMe M.2 SSD, 1TB Hard Disk Drive, NVIDIA GeForce RTX 3060, Win10 Home)</b></p>
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

		<!--Lenovo Series-->
		<div class="tab-pane fade" id="t4">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>Lenovo Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Lenovo1" data-toggle="modal">
					<img src="image/laptops/LenovoSeries/Lenovo1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Legion Slim 7i (16, Gen 7)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Lenovo2" data-toggle="modal">
					<img src="image/laptops/LenovoSeries/Lenovo2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ThinkPad E14 Gen 4 (14″ Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Lenovo3" data-toggle="modal">
					<img src="image/laptops/LenovoSeries/Lenovo3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Yoga 7i (14'', Gen 7)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Lenovo4" data-toggle="modal">
					<img src="image/laptops/LenovoSeries/Lenovo4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>IdeaPad Gaming 3 (16'', Gen 7)</b></p>
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

		<!--ProArt Studio Book Series-->
		<div class="tab-pane fade" id="t5">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>ProArt Studio Book Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#ProArt1" data-toggle="modal">
					<img src="image/laptops/ProArt/ProArt1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ProArt Studiobook Pro 16 OLED (W7600, 12th Gen Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ProArt2" data-toggle="modal">
					<img src="image/laptops/ProArt/ProArt2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Mini PC ProArt PA90</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ProArt3" data-toggle="modal">
					<img src="image/laptops/ProArt/ProArt3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ProArt Station PD5</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#ProArt4" data-toggle="modal">
					<img src="image/laptops/ProArt/ProArt4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>ProArt Display PA32UCG</b></p>
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

		<!--ZenBook Series-->
		<div class="tab-pane fade" id="t6">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>ZenBook Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#Zenbook1" data-toggle="modal">
					<img src="image/laptops/ZenBook/ZenBook1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Zenbook 17 Fold OLED <br>(UX9702)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Zenbook2" data-toggle="modal">
					<img src="image/laptops/ZenBook/ZenBook2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Zenbook Pro 14 Duo OLED <br>(UX8402)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Zenbook3" data-toggle="modal">
					<img src="image/laptops/ZenBook/ZenBook3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Zenbook Pro Duo 15 OLED <br>(UX582, 12th Gen Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#Zenbook4" data-toggle="modal">
					<img src="image/laptops/ZenBook/ZenBook4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Zenbook Pro 16X OLED <br>(UX7602)</b></p>
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

		<!--VivaBook Series-->
		<div class="tab-pane fade" id="t7">
			<div class="container ChangeFONT" style="padding-top:10px;">
			<div class="page-header"><h1><b>VivaBook Series</b></h1></div>
			<div class="col-md-3">
				<div class="thumbnail" data-target="#VivaBook1" data-toggle="modal">
					<img src="image/laptops/VivaBook/VivaBook1.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivobook Pro 14X OLED (N7401, 12th Gen Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VivaBook2" data-toggle="modal">
					<img src="image/laptops/VivaBook/VivaBook2.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivobook Pro 15X OLED (K6501, 12th Gen Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VivaBook3" data-toggle="modal">
					<img src="image/laptops/VivaBook/VivaBook3.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivobook Pro 14 OLED (K6400, 12th Gen Intel)</b></p>
					</div>

				</div>
			</div>

			<div class="col-md-3">
				<div class="thumbnail" data-target="#VivaBook4" data-toggle="modal">
					<img src="image/laptops/VivaBook/VivaBook4.png" style="width: 100%;">
					<div class="caption" >
						<p class="text-center"><b>Vivobook S 14 (M3402, AMD Ryzen 6000 series)</b></p>
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