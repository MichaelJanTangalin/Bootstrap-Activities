<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Photo Gallery</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<style>

		.headerPic{
			width: 1000px;
			height: 500px;
		}

		.thumbnail img{
			width: 350px;
			height: 200px;
		}


	</style>

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container">

			<a href="index.php">
				<div class="navbar-header">
					<div class="navbar-brand"><b>W</b>allpaper<b>Z</b>one</div>
				</div>
			</a>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="anime.php">Animes</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="games.php">Video Games</a></li>
			</ul>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="carousel slide" data-ride="carousel" id="slider">
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
						<li data-target="#slider" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="image/Header1.jpg" class="headerPic">
						</div>

						<div class="item">
							<img src="image/Header2.jpg" class="headerPic">
						</div>

						<div class="item">
							<img src="image/Header3.jpg" class="headerPic">
						</div>

						<div class="item">
							<img src="image/Header4.jpg" class="headerPic">
						</div>
					</div>

					<a href="#slider" data-slide="prev" class="left carousel-control">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a href="#slider" data-slide="next" class="right carousel-control">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>

				</div>
			</div>
		</div>

<div class="page-header">
			<h3 class="text-center"><b>Photo Gallery</b></h3>
		</div>

		<div style="padding-bottom: 50px;">
			

		<div class="row">
			<div class="col-md-4">
				<a href="#m1" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home1.jpg">
				</a>

				<div class="modal fade" id="m1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Avengers: Endgame</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home1.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 1
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="col-md-4">
				<a href="#m2" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home2.jpg">
				</a>

				<div class="modal fade" id="m2">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Peaky Blinders</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home2.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 2
							</div>
						</div>
					</div>
				</div>

			</div>


			<div class="col-md-4">
				<a href="#m3" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home3.jpg">
				</a>

				<div class="modal fade" id="m3">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Call of Duty: Modern Warfare</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home3.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 3
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<a href="#m4" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home4.jpg">
				</a>

				<div class="modal fade" id="m4">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Tokyo Ghoul S1</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home4.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 4
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<a href="#m5" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home5.jpg">
				</a>

				<div class="modal fade" id="m5">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Shingeki no Kyojin</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home5.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 5
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<a href="#m6" data-toggle="modal" class="thumbnail">
					<img src="image/Home/Home6.jpg">
				</a>

				<div class="modal fade" id="m6">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h4>Assassin's Creed</h4></div>
							<div class="modal-body">
								<img src="image/Home/Home6.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">
								Page 6
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
		

		<footer class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="container">
				<p class="text-center text-muted" style="padding: 10px;">Copyright © 2022: Michael Jan Tangalin</p>
			</div>
		</footer>


	</div>
</body>
</html>