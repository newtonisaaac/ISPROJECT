<!DOCTYPE html>
<html>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="  sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PROPERTIES</title>
</head>
<body>
	<div>
		<div class="headermm" id="nav">
			<div id="wrapper">
				<span>Rhumba Properties</span><br/>
			</div>
			<span style="padding-left: 65px">Houses and other properties</span>
			<div id="menu">
				<a href="login.php">Admin</a> &nbsp;
				<a href="customer.php">Guest</a> &nbsp;
				<a href="sign.php">Sign up</a> &nbsp;
			 	<a href="index.php">Home</a> &nbsp;
			 	<a href="aboutus.php">About Us</a> &nbsp;
				<a href="contact.php">Contact</a>
			</div>
		</div>
		<div>
			<img src="pic12.jpeg" height="550px" width="100%" alt="" style="padding-left: 2px; padding-right: 5px">
		</div>	
	</div>
<?php
include('connect.php');

	
 
 ?>
 <div id="sssw">
	<h2 id="sss">Fill in the Details Below</h2>
	<form method="post" action="details.php">
		<!-- dispaly validation errors here -->
		<?php  include('errors.php'); ?>
		
		<input type="text" name="property_name" style="height: 35px" size="50" placeholder="property_name"><br/><br/>

		<input type="text" name="property_type" style="height: 35px" size="50" placeholder="property_type"><br/><br/>
		
	

	</br>

	    <input type="radio" name="Sold"><a>SOLD</a>
	&nbsp;
		<input type="radio" name="unsold"><a>UNSOLD</a>
	</br></br>

		<input type="text" name="owner_name" style="height: 35px" size="50" placeholder="Sold_to"><br/><br/>


		<input type="text" name="occupation" style="height: 35px" size="50" placeholder="occupation"><br/><br/>

		<input type="text" name="amount" style="height: 35px" size="50" placeholder="amount_paid"><br/><br/> 



		<button type="submit" name="Add" class="btn" style="padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;  ">Add</button>

</br></br>

</br></br>
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