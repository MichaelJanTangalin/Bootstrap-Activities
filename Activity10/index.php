<!DOCTYPE html>
<html>
<head>
	<title>E-commerce</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
	</style>

</head>
<body>

	<aside class="col-md-4">
		<h4 class="text-center"><b>Games On Sale</b></h4>
		
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/ACMIRAGETB.jpg" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 3,754.66</h4>
							<h4>Assassin's Creed: Mirage</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>50% Discount</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>

		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/RDDTB.JPG" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 5,784.72</h4>
							<h4>Red Dead Redemption II</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>50% Discount</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
			
		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/GOWTB.jpg" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 1,733.92</h4>
							<h4>God of War: Ragnarok</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>50% Discount</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
			
		</div>

		

		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/WDTB.jpg" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 1,155.75</h4>
							<h4>Watchdogs</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>50% Discount</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>
			
		</div>
	</aside>

	<header class="col-md-8">
		<div class="carousel slide" data-ride="carousel" id="c1"> 
			<ol class="carousel-indicators">
				<li data-target="#c1" data-slide-to="0" class="active"></li>
				<li data-target="#c1" data-slide-to="1"></li>
				<li data-target="#c1" data-slide-to="2"></li>
				<li data-target="#c1" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="image/header1.jpg">
					<div class="carousel-caption">
						<h1><b>NOW AVAILABLE</b></h1>
						<p></p>
					</div>
				</div>

				<div class="item">
					<img src="image/header2.jpg">
					<div class="carousel-caption">
						<h1><b>NOW AVAILABLE</b></h1>
					</div>
				</div>

				<div class="item">
					<img src="image/header3.jpg">
					<div class="carousel-caption">
						<h1><b>NOW AVAILABLE</b></h1>
					</div>
				</div>

				<div class="item">
					<img src="image/header4.jpg">
					<div class="carousel-caption">
						<h1><b>NOW AVAILABLE</b></h1>
					</div>
				</div>
			</div>

			<a href="#c1" data-slide="prev" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>

			<a href="#c1" data-slide="next" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</header>

	<div class="container" style="padding-top: 500px;">
		<div class="page-header"><h3 class="text-center"><b>New Release</b></h3></div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/header4.jpg" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 1,039.54</h4>
					<h4><a href="product.php">Tekken 8</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/TheLastOfUs.jpg" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 1,155.75</h4>
					<h4><a href="product.php">The Last of Us II</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>

			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/GodOfWar.jpg" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 1,733.92</h4>
					<h4><a href="product.php">God Of War: Ragnarok</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/DMC.png" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 2,311.96</h4>
					<h4><a href="product.php">Devil May Cry 5</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/header1.jpg" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 5,784.72</h4>
					<h4><a href="product.php">Call Of Duty: MW2</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/ACHistory.jpg" style="width: 100%;">
				<div class="caption">
					<h4 class="pull-right">&#8369 6,695.00</h4>
					<h4><a href="product.php">Assassin's Creed History</a></h4>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					
				</div>
				<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
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
						<li class="page-item"><a class="page-link" href="#">7</a></li>
						<li class="page-item"><a class="page-link" href="#">8</a></li>
						<li class="page-item"><a class="page-link" href="#">9</a></li>
						<li class="page-item"><a class="page-link" href="#">10</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		<footer class="">
			<div class="container">
				<p class="text-center text-muted" style="padding: 10px;">Copyright © <script>document.write(new Date().getFullYear());</script>: Michael Jan Tangalin</p>
			</div>
		</footer>

	</div>

</body>



</html>