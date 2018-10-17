<!DOCTYPE html>
<html>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="  sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>BALMCONSULT</title>
</head>
<body>
	<div>
		<div class="headermm" id="nav">
			<div id="wrapper">
				<span>BalmConsult</span><br/>
			</div>
			<span style="padding-left: 65px">REAL ESTATE</span>
			<div id="menu">
				<a href="login.php">Login</a> &nbsp;
				<a href="customer.php">Guest</a> &nbsp;
				<a href="sign.php">Sign up</a> &nbsp;
			 	<a href="index.php">Home</a> &nbsp;
			 	<a href="#">About Us</a> &nbsp;
				<a href="contact.php">Contact</a>
			</div>
		</div>
		<div>
			<img src="pic12.jpeg" height="550px" width="100%" alt="" style="padding-left: 2px; padding-right: 5px">
		</div>	
	</div>
<?php
	include('contactconne.php');
 ?>
 <div id="sssw">
	<h2 id="sss">Fill in the Details Below</h2>
	<?php include('errors.php'); ?>
	<form action="contact.php" method="POST">

			

		<input type="text" name="name" style="height: 35px" size="50" placeholder="Your Name"/><br/><br/>
		<input type="text" name="email" style="height: 35px" size="50" placeholder="Email Address"/><br/><br/>
		<input type="text" name="phonenumber" style="height: 35px" size="50" placeholder="phonenumber"/><br/><br/>
		<textarea type="text" style="height: 70px; width: 300px" name="message" placeholder="Your Message"></textarea><br/><br/>
		<input type="submit" name="reg" value="Submit" style="background-color: #f0932b;
															  border: 1px solid #00508D;
															  font-size: 15px;
															  color: #FFFFFF;
															  padding: 5px;
															  margin-top: 3px;
															  margin-bottom: 3px;
															  border-radius: 7px;"></br></br></br></br>
	</form>
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
