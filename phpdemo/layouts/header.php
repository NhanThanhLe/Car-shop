<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.container .row {
			min-height: 1000px;
		}
	</style>
</head>
<body>

	<!-- header -->
	<!-- Grey with black text -->
	<header style="background-color: gray;">
	<nav class="navbar navbar-expand-sm navbar-dark">
	  <div class="container">
	  	<ul class="navbar-nav">
	  		<li>
	  			<A HREF="index.php"> <img src=" Pic/nice-car-logo.png" width="120"></A>
	  		</li>
	  	</ul>
	  	<ul class="nav justify-content-end">
		    <li>
		      <a href="index.php">
				<button type="button" class="btn">
					Home <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
		      <a href="index.php">
				<button type="button" class="btn">
					Shop <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
		      <a href="report.php">
				<button type="button" class="btn">
					Report <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
			<a href="buy.php">
				<button type="button" class="btn">
					Cart <span class="badge badge-light"></span>
				</button>
			</a>
		</li>
		<li>
			<a href="logout.php">
				<button type="button" class="btn">
					Logout <span class="badge badge-light"></span>
				</button>
			</a>
		</li>
	 </ul>		
<?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
foreach ($cart as $item) {
	$count += $item['num'];
}
?>
</header>