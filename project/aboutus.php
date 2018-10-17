<!DOCTYPE html>
<html>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="  sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>BALMCONSULT</title>
</head>
<body>
	<div class="wrap">
		<div class="headermm" id="nav">
			<div id="wrapper">
				<span>BalmConsult</span><br/>
			</div>
			<span style="padding-left: 65px">Rhumba Estate</span>
			<div id="menu">
				<a href="login.php">Admin</a> &nbsp;
				<a href="customer.php">Guest</a> &nbsp;
				<a href="sign.php">Sign up</a> &nbsp;
			 	<a href="index.php">Home</a> &nbsp;
			 	<a href="aboutus.php">About Us</a> &nbsp;
				<a href="contact.php">Contact</a>
			</div>
		</div>
		<div id="slider">
			<div class="slide slide1">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<script>
		var nav= document.getElementById('nav');
		window.onscroll= function(){
			if (window.pageYOffset>100) {
				nav.style.background= '#1e272e';
				nav.style.boxShadow= "0px 2px 2px #7f8c8d";
			}
			else{
				nav.style.background= "transparent";
				nav.style.boxShadow= "none";
			}
		}
	</script>
	<div class="grid_8" style="background-color: #ecf0f1">
		<center>
		<h4 class="page_title" style="color: #f0932b;">About Rhumba Estate</h4>

		</center>
		<p>we are currently located jst next to nyali beach in mombasa</p>
	<footer style="background-color: #1e272e">
		<section class="box">
			<div class="boxes" style="color: #ffffff;">
				<h3 style="color: #7f8c8d">BALMCONSULT LTD</h3><br/><br/>
				P.O Box 23231- 10100
				Ole Sangale Road Madaraka,<br/>
				Nairobi, Kenya.<br/><br/>
				<i class="fas fa-phone-volume fa-1x"></i> &nbsp; Office: +254 716 046648<br/><br/>
				<i class="fas fa-globe fa-1x"></i> &nbsp; Email: balmconsult@gmail.com
			</div>
			<div class="boxes" style="color: #ffffff;">
				<h3 style="color: #7f8c8d">Find Us Here</h3>
				<i class="fab fa-facebook fa-3x"></i><br/><br/>
				<i class="fab fa-instagram fa-3x"></i><br/>
			</div>
		</section>
		<hr/>
		<p style="text-align: center; padding-bottom: 30px; color: #ffffff;">
			Copyright<i class="far fa-copyright"></i>
			<?php
				echo date('Y');
			?> 
			BalmConsult LTD. All Rights Reserved.
		</p>
	</footer>
</body>
</html>