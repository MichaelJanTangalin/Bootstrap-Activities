<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<title>Portfolio</title>

	<style>
		section{
			width: 100;
			height: 50vw;
			padding: 50px
		}

		.cl_white{
			color: white;
		}

		img{
			width: 300px;
			transition: opacity is ease-in-out;
		}

		img:hover{
			opacity: .10;
		}

		.social-icon {
			color: #aaaaaa;
			transition: colo 0.2;
		}

		.social-icon:hover {
			color: #333333;
		}

		ion-icon{
			width: 50px;
			height: 50px;
		}

		.col-text{
			-webkit-column-count: 3;
		}


		.badges{
			width: 20vw;
			height: 20vw;
		}

		.panelSize{
			height: 200px;
		}
	</style>
	
</head>

<body data-spy="scroll" data-target=".navbar">

	<nav class="navbar navbar-inverse navbar-fixed-bottom">

		<ul class="nav navbar-nav">
			<li class="nav-link active"><a href="#home">Home</a></1i>
				<li class="nav-link active"><a href="#work">What I Do</a></1i>
					<li class="nav-link active"><a href="#about">About Me</a></1i>
						<li class="nav-link active"><a href="#contact">Contact Me</a></1i>
						</ul>
					</nav>

					<section id="home" style="background: url(images/header.jpg);background-size: 100% 100%;" class="cl_white text-center">
						

						<img src="images/EM.jpg" height="300" width="300" class="img-circle" >

						
						<h1><b>Hi!, I'm Michael Jan R. Tangalin</b></h1>
						<h4>Welcome to my Portfolio, The Life of a Programmer</h4>
						<h4 class="text-muted">"The Jack of All Trades, Master of None"</h4>
						
											

						<a href="https://www.facebook.com/" class="social-icon">
							<ion-icon name="logo-facebook"></ion-icon>
						</a>

						<a href="https://www.linkedin.com/in/michael-jan-tangalin-86657b229/" class="social-icon">
							<ion-icon name="logo-linkedin"></ion-icon>
						</a>

						<a href="https://github.com/Master-kyoya?tab=repositories" class="social-icon">
							<ion-icon name="logo-github"></ion-icon>
						</a>

						<a href="https://www.google.com/" class="social-icon">
							<ion-icon name="logo-google"></ion-icon>
						</a>


						<br><br>
						<a href="#contact"><button class="btn btn-primary btn-md">Contact Me</button></a>
					</section>

					<section id="work" class="container">
						<div class="page-header">
							<h1 class="text-center">My Works</h1>
						</div>
						<div class="text-center">

							<img src="images/WORKS/4.png" class="img-thumbnail"/>
							<img src="images/WORKS/3.jpg" class="img-thumbnail"/>
							<img src="images/WORKS/6.png" class="img-thumbnail"/>
							<img src="images/WORKS/1.png" class="img-thumbnail"/>
							<img src="images/WORKS/2.png" class="img-thumbnail"/>
							<img src="images/WORKS/5.jpg" class="img-thumbnail"/>

						</div>



					</section>

					<section id="about" class="container">
						<div class="page-header">
							<h2 class="text-center">My Skills & Experiences</h2>
						</div>

						<div class="col-text">
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						</div><br><br>

						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h4>PHP Programmer</h4>
									</div>
									<div class="panel-body">
										<img src="images/php.gif" class="center-block panelSize">
										<p class="lead text-center">I Do PHP Programming</p>
									</div>
									<div class="panel-footer">
										<h6 class="text-muted">Copyright © 2022: Michael Jan Tangalin</h6>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h4>WEB Designer</h4>
									</div>
									<div class="panel-body">
										<img src="images/css.gif" class="center-block panelSize">
										<p class="lead text-center">I Do CSS Bootsrap Designing</p>
									</div>
									<div class="panel-footer">
										<h6 class="text-muted">Copyright © 2022: Michael Jan Tangalin</h6>
									</div>


								</div>
							</div>		
						</section>

						<br>

						<div class="container">

							<div class="panel-group" id="myaccordion">
								<div class="panel panel-danger">
									<div class="panel-heading">
										<h4>
											<a href="#colap1" data-toggle="collapse" data-parent="#myaccordion"><h4 class="text-center">My Certifications</h4></a>
										</h4>
									</div>

									<div class="collapse panel-collapse" id="colap1">
										<div class="panel-body">
											<div class="page-header">
												<h2 class="text-center">Oracle Certified</h2>
											</div>

											<div class="text-center">
												<a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=0806B7D6D6EA167ECE5FFFD2040DD090F10CDC1380973641CEC37ADDB7CAC89B"><img src="images/BADGES/OCI.jpg" class="img-thumbnail badges"/></a>
												<a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=11517B9454F84268851D828EB630251784DB561EE0843513A6D790E01EFD0DCE"><img src="images/BADGES/OAD.jpg" class="img-thumbnail badges"/></a>
												<a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=605AD6795E7D95E8795759ABC95DCD70C22B3D3BD85DAFF35FFBD4C38A47FAC7&fbclid=IwAR1z-vRcOwLnUIaR22FBaDVOgSgtBx94KP7EwG0JdjksnEA6-w26cY2-5ZA"><img src="images/BADGES/ODCM.jpg" class="img-thumbnail badges"/></a>
												<a href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=11517B9454F84268851D828EB630251784DB561EE0843513A6D790E01EFD0DCE"><img src="images/BADGES/OCD.jpg" class="img-thumbnail badges"/></a>
											</div>

										</div>


											<div class="panel-footer">
												<h6 class="text-muted">Copyright © 2021: Michael Jan Tangalin</h6>
											</div>
									</div>
								</div>
							</div>
						</div>



						<section id="contact" style ="background: url(images/contact.webp);background-size: 100% 100%;">


							
							
							


							<form class="col-md-5 col-md-offset-4">
								<div style="container">
									<h2 class="text-center"><b>Contact Me</b></h2>
									<br><br>
								</div>
								
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" placeholder="Enter Your Name" type="text"/>
								</div>
								<div class=" form-group">
									<label>E-mail</label>
									<input class="form-control" placeholder="Enter Your E-mail" type="email"/>
								</div>
								<div class=" form-group">
									<label>Subject</label>
									<input class="form-control"  placeholder="Subject" type="text"/>
								</div>
								<div class="form-group">
									<label>Comment</label>
									<textarea class="form-control rows-10" placeholder="Comment"></textarea>
								</div>



								<div class="form-group">

									<input class="btn btn-primary btn-block" type="submit"/>
								</div>


								<div class="text-center">
									<a href="https://www.facebook.com/">
										<ion-icon name="logo-facebook"></ion-icon>
									</a>

									<a href="https://www.linkedin.com/in/michael-jan-tangalin-86657b229/">
										<ion-icon name="logo-linkedin"></ion-icon>
									</a>

									<a href="https://github.com/Master-kyoya?tab=repositories">
										<ion-icon name="logo-github"></ion-icon>
									</a>

									<a href="https://www.google.com/">
										<ion-icon name="logo-google"></ion-icon>
									</a>
								</div>
							</form>

						</div>

					</section>







	</body>
</html>