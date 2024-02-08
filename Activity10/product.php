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
		#related{
			width: 350px;
			height: 180px;
		}

		.thumbnail img:hover{
			opacity: .9;
		}



	</style>
	
</head>
<body>
	<aside class="col-md-4">
		<h4 class="text-center">Games On Promo</h4>
		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/SMTB.jpg" style="width: 80px; height: 112px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 1,995.00</h4>
							<h4>Spider-Man: Miles Morales</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>BUY 1 TAKE 1</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>

		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/RDDTB.jpg" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 5,784.72</h4>
							<h4>Red Dead Redemption 2</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>BUY 1 TAKE 1</p>
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
						<p class=list-group-item-text>BUY 1 TAKE 1</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>

		</div>

		<div class="col-md-10 col-md-offset-1">
			<div class="list-group">
				<a href="product.php" class="list-group-item" style="padding: 0; margin: 0;">
					<div class="col-md-3" style="padding: 0; margin: 0;">
						<img src="image/ACMirageTB.jpg" style="width: 80px; height: 100px;">
					</div>

					<div class="col-md-9">
						<div class="list-group-item-heading">
							<h4>&#8369 3,754.66</h4>
							<h4>Assassin's Creed: Mirage</h4>
							<div class="clearfix"></div>
						</div>
						<p class=list-group-item-text>BUY 1 TAKE 1</p>
					</div>
					<div class="clearfix"></div>
				</a>
			</div>

		</div>
	</aside>


	<header class="col-md-8">
		<div class="col-md-12">
			<div class="thumbnail">

				<div class="carousel slide" data-ride="carousel" id="c1"> 
					<ol class="carousel-indicators">
						<li data-target="#c1" data-slide-to="0" class="active"></li>
						<li data-target="#c1" data-slide-to="1"></li>
						<li data-target="#c1" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/ACM.jpg" style="width: 100%;">
						</div>
						<div class="item">
							<img src="image/ACMHEADER.jpg" style="width: 100%;">
						</div>

						<div class="item">
							<iframe width="100%" height="462" src="https://www.youtube.com/embed/x55lAlFtXmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>

						<a href="#c1" data-slide="prev" class="left carousel-control">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a href="#c1" data-slide="next" class="right carousel-control">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>

					</div>
			</div>


				<div class="caption">
					<h4 class="pull-right">&#8369 3,754.66</h4>
					<h4><a href="product.php">Assassin's Creed: Mirage</a></h4>


					<p align="justify">Assassin's Creed: Mirage is an action-adventure, stealth game intended to be reminiscent of older Assassin's Creed titles, being more linear and story-focused and reducing the number of role-playing elements present in recent installments in the series. The game is set principally in Baghdad, which is divided into four districts, but also features Alamut, the fortress headquarters of the Hidden Ones. Parkour, close-quarter combat, and stealth are core elements of the gameplay. Mirage also marks the return of the "Black Box" assassination missions from Assassin's Creed Unity and Assassin's Creed Syndicate, in which players have to explore the environment to find different ways to reach and eliminate their targets. As a Hidden One, Basim will have a large arsenal of weapons and tools at his disposal, including the signature Assassin Hidden Blade and smoke bombs.</p>

					<div class="text-center">
						<button class="btn btn-primary btn-md" data-target="#buy_me" data-toggle="modal" style="margin-bottom : 10px;">Buy Now</button>
						<button class="btn btn-default btn-md" data-target="#buy_me" data-toggle="modal" style="margin-bottom : 10px;">
							<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
						</div>

					</div>
				</div>
			</div>
		</header>

		<div class="col-md-8 col-md-offset-4">
			<div class="col-md-12">
				<div class="well">
					<div class="pull-left">
						<h4>Product Ratings: 
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>

						</h4>
					</div>
					<div class="text-right">
						<button href="#" data-target="#myComment" data-toggle="modal" class="btn btn-primary">Leave a Comment</button>
					</div>
				</div>

				<div class="well">
					<span class="lead"><img src="image/dp2.jpg" height="40" width="40" class="img-circle"> Thom** She**y </span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="pull-right">3 days ago</span><hr>
					<p>“The one minute. The soldier’s minute. In a battle, that’s all you get. One minute of everything at once. And anything before is nothing. Everything after, nothing. Nothing in comparison to that one minute.”</p>

					<div class="text-right">
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button>
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span></button>
					</div>
				</div>

				<div class="well">
					<span class="lead"><img src="image/dp1.jpg" height="40" width="40" class="img-circle"> The Jo*** </span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
					<span class="pull-right">3 days ago</span><hr>
					<p>“Smile, because it confuses people. Smile, because it’s easier than explaining what is killing you inside.”</p>

					<div class="text-right">
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button>
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span></button>
					</div>
				</div>

				<div class="well">
					<span class="lead"><img src="image/COCOY.jpg" height="40" width="40" class="img-circle"> B***Ma***r*9
					</span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="pull-right">68 days ago</span><hr>
					<p>Very Easy to Use</p>

					<div class="text-right">
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span></button>
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span></button>
					</div>
				</div>

				<div class="well">
					<span class="lead"><img src="image/me.jpg" height="40" width="40" class="img-circle"> Mi*** </span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
					<span class="pull-right">99 days ago</span><hr>
					<p>Sana all my pera....</p>

					<div class="text-right">
						<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></button>
							<button href="#" data-target="#Login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</div>
					<div class="pull-right">
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
				</div>
			</div>

			<div class="container" style="padding-top: 1500px;">
				<div class="page-header"><h3 class="text-center">Related Products</h3></div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="image/CB2072.jpg" style="width: 100%;" id="related">
						<div class="caption">
							<h4 class="pull-right">&#8369 1,395.00</h4>
							<h4><a href="product.php">Cyberpunk</a></h4>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail">
						<img src="image/ACM.jpg" style="width: 100%;" id="related">
						<div class="caption">
							<h4 class="pull-right">&#8369 3,754.66</h4>
							<h4><a href="product.php">AC: Mirage</a></h4>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail">
						<img src="image/header1.jpg" style="width: 100%;" id="related">
						<div class="caption">
							<h4 class="pull-right">&#8369 5,784.72</h4>
							<h4><a href="product.php">COD: MW2</a></h4>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="thumbnail">
						<img src="image/BATMAN.jpg" style="width: 100%;" id="related">
						<div class="caption">
							<h4 class="pull-right">&#8369 950.00</h4>
							<h4><a href="product.php">Batman</a></h4>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							<p class="text-center"><a data-target="#buy_me" data-toggle="modal" class="btn btn-primary btn-block" role="button">Buy Now</a></p>
						</div>
					</div>
				</div>

			</div>

			<footer class="">
			<div class="container">
				<p class="text-center text-muted" style="padding: 10px;">Copyright © <script>document.write(new Date().getFullYear());</script>: Michael Jan Tangalin</p>
			</div>
		</footer>

		</body>



		</html>