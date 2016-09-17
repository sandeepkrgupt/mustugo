<!DOCTYPE html>
<html>
<head>
	<title>Opan Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--script src="https://code.jquery.com/jquery-3.1.0.min.js"></script-->
	<script>
	$(document).ready(function(){
		$('#register').click(function(){
		   $('#model-login').modal('hide');
		   $('#model-reg').modal('hide'); 
		   $('body').css('padding-right','0px');
	});
		$('#cancel').click(function(){
			$('#model-reg').modal('hide');
			$('body').css('padding-right','0px');
		});
	});
</script>
</head>
<body class="scrollbar" id="style-6">
	<header>
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="row ">
					<div class="col-md-4 shadow"><a href="index.php">
					<img src="images/logo.png" class="logo">
					<span class="left-shift">must<b class="u">U</b>go</span></a></div>
					<div class="col-md-4"><input type="search" class="form-control" placeholder="Enter City Name"><a href="#"><i class="fa fa-search"></i></a></div>
					<div class="col-md-4 pull-right"><span><img src="images/user.png" alt="..." class="owner-image img-responsive"></span><span><a href=".bs-example-modal-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-share-alt-square" aria-hidden="true"></i></a></span>
					</div>
				</div>
			</div>
		</nav>	
	</header>
	<!-- Navigation -->
	<div class="scrollbar1" id="style-7">
  <!-- Nav tabs -->
	  <ul class="nav nav-tabs force-overflow" role="tablist" style="display: block; position: relative; width: 1600px;">
	    <li role="presentation"><a href="delhi.php">Delhi</a></li>
	    <li role="presentation"><a href="mumbai.php">Mumbai</a></li>
	    <li role="presentation"><a href="Kolkatta.php">Kolkatta</a></li>
	    <li role="presentation"><a href="Ahmedabad.php">Ahmedabad</a></li>
	    <li role="presentation"><a href="bangalore.php">Bangalore</a></li>
	    <li role="presentation"><a href="#Chennai">Chennai</a></li>
	    <li role="presentation"><a href="#Hyderadad">Hyderadad</a></li>
	    <li role="presentation"><a href="#Luncknow">Luncknow</a></li>
	    <li role="presentation"><a href="#Varanasi">Varanasi</a></li>
	    <li role="presentation"><a href="#Jaipur">Jaipur</a></li>
	    <li role="presentation"><a href="#Noida">Noida</a></li>
	    <li role="presentation"><a href="#Pune">Pune</a></li>
	    <li role="presentation"><a href="#Kanpur">Kanpur</a></li>
	    <li role="presentation"><a href="#Indore">Indore</a></li>
	    <li role="presentation"><a href="#Bhopal">Bhopal</a></li>
	    <li role="presentation"><a href="#Patna">Patna</a></li>
	    <li role="presentation"><a href="#Agra">Agra</a></li>
	    <li role="presentation"><a href="#Chandigarh">Chandigarh</a></li>
	    <li role="presentation"><a href="#Ludhiyana">Ludhiyana</a></li>
	    <li role="presentation"><a href="#Nagpur">Nagpur</a></li>
	  </ul>
  <!-- Tab panes -->
	</div>
	<!-- End -->
	<div class="container">
		<div class="row">
		<div class="col-md-6"></div>
			<div class="col-md-6 text-right">
				<input type="search" class="form-control" placeholder="Enter Locality(Area) / Food Name"><a href="#"><i class="fa fa-search"></i></a>
			</div>
			<div class="col-md-12 text-right"><h5>Somewhere you find something Awesome. Let that be known to whole world, Upload and share.<i class="fa fa-users"></i></h5></div>
		</div>
	</div>
	<div class = "container">
	<?php include ('include/shop-table.php');?>
	</div>
	<div class = "container">
	<?php include ('include/shop-table2.php');?>
	</div>
	<div class = "container">
	<?php include ('include/shop-table.php');?>
	</div>
	<div class = "container">
	<?php include ('include/shop-table2.php');?>
	</div>
	<div class = "container">
	<?php include ('include/shop-table.php');?>
	</div>
	<div class="container-fluid">
	<?php include ('include/pagination.php');?>
	</div>
	<footer>
		<div class="container-fluid">
			<div class="row"><p class="text-center">All Right Reserved.&copy;must<b class="footer-u">U</b>go.com<p></div>
		</div>
	</footer>
	<?php include ('include/login-popup.php'); ?>
	<?php include ('include/register-popup.php'); ?>
	<?php include ('include/like-popup.php'); ?>
</body>
</html>