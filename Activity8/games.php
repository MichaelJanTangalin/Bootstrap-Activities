<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Photo Gallery</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style/css/lightbox.css">
	<script src="style/js/lightbox.js"></script>

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


	<div class="container" >

			<div class="page-header">
				<h3 class="text-center"><b>Video Games Zone</b></h3>
			</div>

			<div style="padding-bottom: 60px;">
				

				<div class="row">
					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames1.jpg" data-lightbox="gallery" data-title="Watch Dogs" class="thumbnail">
							<img src="image/VideoGames/VideoGames1.jpg">
						</a>




					</div>

					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames2.jpg" data-lightbox="gallery" data-title="God of War" class="thumbnail">
							<img src="image/VideoGames/VideoGames2.jpg">
						</a>



					</div>


					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames3.jpg" data-lightbox="gallery" data-title="Assassin's Creed: Jacob Frye & Evie Frye" class="thumbnail">
							<img src="image/VideoGames/VideoGames3.jpg">
						</a>



					</div>

					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames4.jpg" data-lightbox="gallery" data-title="Watchdogs: Legion" class="thumbnail">
							<img src="image/VideoGames/VideoGames4.jpg">
						</a>



					</div>

					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames5.jpg" data-lightbox="gallery" data-title="Call of Duty: Task Force 101" class="thumbnail">
							<img src="image/VideoGames/VideoGames5.jpg">
						</a>



					</div>

					<div class="col-md-4">
						<a href="image/VideoGames/VideoGames6.jpg" data-lightbox="gallery" data-title="Assassin's Creed: Ezio Auditore" class="thumbnail">
							<img src="image/VideoGames/VideoGames6.jpg">
						</a>

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