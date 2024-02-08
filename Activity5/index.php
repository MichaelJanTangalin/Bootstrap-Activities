<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activity 5</title>
</head>
	<body>
		<h1 class="container-fluid">Activity 5</h1>
		<hr>
		<br>

		<div class="container">
			<ul class="list-inline">
				<li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some Content here in popover">Top</a></li>
				<li><a href="#" data-toggle="popover" data-placement="bottom" title="Bottom popover" data-trigger="focus"data-content="Some Content here in popover">Bottom</a></li>
				<li><a href="#" data-toggle="popover" data-placement="left" title="Left popover" data-trigger="hover"data-content="Some Content here in popover">Left</a></li>
				<li><a href="#" data-toggle="popover" data-placement="right" title="Right popover" data-content="Some Content here in popover">Right</a></li>
			</ul>

			<ul class="list-inline">
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="right" title="Right Tool Tip">Right</a></li>
			</ul>
		</div>

		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
				$('[data-toggle="popover"]').popover();
			});
		</script>

		<hr>
		<br>
		<div class="container">
			<div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px;">
				<ol class="carousel-indicators">
					<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
					<li data-target="#mycarousel" data-slide-to="1"></li>
					<li data-target="#mycarousel" data-slide-to="2"></li>
					
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="../images/image1.jpg" width="1000px">
						<div class="carousel-caption">
							<h3>My First Pic</h3>
							<p>Welcome to my first Pic...</p>
						</div>
					</div>

					<div class="item">
						<img src="../images/image2.jpg" width="1000px">
						<div class="carousel-caption">
							<h3>My Second Pic</h3>
							<p>Welcome to my Second Pic...</p>
						</div>
					</div>

					<div class="item">
						<img src="../images/image3.jpg" width="1000px">
						<div class="carousel-caption">
							<h3>My Third Pic</h3>
							<p>Welcome to my Third Pic...</p>
						</div>
					</div>

					<a href="#mycarousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a href="#mycarousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>

		<br>
		<hr>
		<div class="container">
			<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times;</button>
									<h4>This is my Modal Header</h4>

								</div>
								<div class="modal-body">
									<p>This is modal content</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Close</button>
								</div>
					</div>
				</div>
			</div>		
		</div>


		<br>
		<br>
		</hr>
		
	</body>

</html>