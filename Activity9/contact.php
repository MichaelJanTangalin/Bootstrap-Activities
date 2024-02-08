<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/stylekoto.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		* {
		  box-sizing: border-box;
		  margin: 0;
		  padding: 0;
		}


		.section {
		  position: relative;
		  width: 900px;
		  max-width: 80%;
		  border: 2px solid #333;
		  border-top: none;
		  text-align: center;
		  margin: 60px auto;
		}

		.section h1 {
		  position: relative;
		  margin-top: -14px;
		  display: inline-block;
		  letter-spacing: 4px;
		}

		.top-border{
		  position: absolute;
		  height: 2px;
		  width: 24%;
		  background-color: #333;
		}

		.right {
		  right: 0;
		}

		.left {
		  left: 0;
		}

		@media (max-width: 685px) {
		.top-border {	
		  width: 18%;
			}
		}

		.section p {
		  width: 61%;
		  margin: 20px auto 40px auto;
		  line-height: 30px;
		}

		.section a {
		  outline: 0;
		  display: inline-block;
		  padding: 20px;
		  margin-bottom: 40px;
		  width: 440px;
		  max-width: 80%;
		  background-color: #333;
		  color: #fff;
		  font-size: 22px;
		  letter-spacing: 3px;
		  transition: all 0.3s ease 0s;
		  -moz-transition: all 0.3s ease 0s;
		  -webkit-transition: all 0.3s ease 0s;
		}

		.section a:hover {
		  background-color: green;
		}

		.section a:link, .section a:visited, .section a:link:hover, .section a:visited:hover {
		  text-decoration: none;
		  color: #fff;
		}

		@media (max-width: 500px) {
		  .top-border {	
		    display: none;
		  }
		  .section {
		  border-top: 2px solid #333;
		  }
		  .section h1 {
		    margin: 20px 6px;
		  }
		}

		.btn-Green {
			background-color: green;
			color: white;
		}

		.btn-default1{
			background-color: silver;
			color: white;
		}

	</style>

	
</head>
	<body style="background: silver;">
		<?php
			include 'includes/navbar.php';

		?>

		<header style="background: url(image/header.gif);">
			<div class="text-center">
				<h1><b class="text-success">HACK</b>BLOG</h1>
				<div class="lead">Welcome to Hacking History</div>
			</div>			
		</header>

		<div class="section">
		  <div class="top-border left"></div>
		  <div class="top-border right"></div>
		  <h1 class="text-center">REACH US</h1>
		  <div class="text-center">
		  	<br>
		  	<img src="image/Anonymous.png" width="200px" height="200px">
		  	<h3>We are Legion, We are Anonymous</h3>
		  </div>
		  <br>
		    <a href="#FORM" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#FORM">CONTACT US</a>
		</div>

		<div class="modal fade" id="FORM">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header"><h1>Contact Us</h1></div>
							<div class="modal-body">
								<form>
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
							</form>

							</div>
							<div class="modal-footer">
								<form>
									<button type="button" class="btn btn-default1" data-dismiss="modal" aria-label="close">Close</button>
	        						<button type="submit" class="btn btn-Green">Submit</button>
	        					</form>
							</div>
						</div>
					</div>
				</div>
		

		
		<?php
			include 'includes/navbarBottom.php';

		?>
	</body>
		


</html>