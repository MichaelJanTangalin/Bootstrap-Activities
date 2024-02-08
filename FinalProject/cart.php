<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="includes/style/myStyle.css">
	<link rel="icon" type = "image/png" href="image/icon.png">
	<title>Peaky Shoppers</title>

	<?php
	include 'includes/style/bootstrap.php';
	include 'includes/navbar.php';
	include 'includes/modals.php';
	?>
	<style>
		
		
		

		body {
			background: #f0f1f5;
			min-height: 100vh;
		}

		.cart-wrap {
			padding: 40px 0;
			font-family: 'Segoe UI', sans-serif;
		}
		.main-heading {
			font-size: 19px;
			margin-bottom: 20px;
		}
		.table-cart table {
			width: 100%;
		}
		.table-cart thead {
			border-bottom: 1px solid #e5e5e5;
			margin-bottom: 5px;
		}
		.table-cart thead tr th {
			padding: 8px 0 18px;
			color: #484848;
			font-size: 15px;
			font-weight: 400;
		}
		.table-cart tr td {
			padding: 40px 0 27px;
			vertical-align: middle;
		}
		.table-cart tr td:nth-child(1) {
			width: 52%;
		}
		.table-cart tr td:nth-child(2) {
			width: 26%;
		}
		.table-cart tr td:nth-child(3) {
			width: 13.333%;
		}

		.cart-totals {
			border-radius: 5px;
			background: white;
			padding: 25px;
		}



		.cart-totals h3 {
			font-size: 19px;
			color: #3c3c3c;
			letter-spacing: 1px;
			font-weight: 500;
		}



		.cart-totals table {
			width: 100%;
		}




		.cart-totals table tr th,
		.cart-totals table tr td {
			width: 50%;
			padding: 3px 0;
			vertical-align: middle;
		}



		.cart-totals table tr td:last-child {
			text-align: right;
		}





		.cart-totals table tr td.subtotal {
			font-size: 20px;
			color: black;
		}


		.cart-totals table tr td.price-total {   
			font-size: 20px;
			font-weight: 600;
			color: green;
		}
		.btn-cart-totals {
			text-align: center;
			margin-top: 20px;

		}
		


	</style>
</head>
<body>

	<div class="cart-wrap" style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="main-heading"><h3>My Cart</h3></div>
					<div class="table-cart">
						<table>
							<thead>
								<tr>
									<th>Product</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							
								<tr>
									<td>
										<h3>Your cart is Empty</h3>
									</td>
								</tr>
							
						</table>
					</div>
					<!-- /.table-cart -->
				</div>
				<!-- /.col-lg-8 -->
				<div class="col-lg-4">
					<div class="cart-totals">
						<h3>Price Details</h3>
						<form action="#" method="get" accept-charset="utf-8">
							<table>
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td class="subtotal">&#8369 <?php echo number_format(0, 2)?></td>
									</tr>
									<tr>
										<td>Delivery Charges</td>
										<td class="text-success"><b>FREE</b></td>
									</tr>
									<tr>
										<td><h4>Amount Payable</h4></td>
										<td class="price-total">&#8369 <?php echo number_format(0, 2)?></td>
									</tr>
								</tbody>
							</table>
							<div class="btn-cart-totals">
								<a href="#" class="btn btn-danger btn-block" title="">Proceed to Checkout</a>
							</div>

						</form>
						<!-- /form -->
					</div>
					<!-- /.cart-totals -->
				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>
	</div>


	<?php

	include 'includes/footer.php';
	?>

</body>
</html>