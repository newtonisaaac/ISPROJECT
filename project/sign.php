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
				<span>Rhumba Estate</span><br/>
			</div>
			<span style="padding-left: 65px">REAL ESTATE</span>
			<div id="menu">
				<a href="login.php">Login</a> &nbsp;
				<a href="customer.php">Guest panel</a> &nbsp;
				<a href="sign.php">Admin panel</a> &nbsp;
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
include('server.php');

	
 
 ?>
 <div id="sssw">
	<h2 id="sss">Fill in the Details Below</h2>
	<form method="post" action="sign.php">
		<!-- dispaly validation errors here -->
		<?php  include('errors.php'); ?>
		
		<input type="text" name="username" style="height: 35px" size="50" placeholder="username" value ="<?php echo $username; ?>"><br/><br/>

		<input type="text" name="email" style="height: 35px" size="50" placeholder="email" value="<?php echo $email; ?>"><br/><br/>
		
		<input type="password" name="password_1" style="height: 35px" size="50" placeholder="Password"><br/><br/>

	</br>

		<input type="password" name="password_2" style="height: 35px" size="50" placeholder="Confirm Password"><br/><br/>

		<button type="submit" name="register" class="btn" style="padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;  ">Register</button>

</br></br>
<p>Already a member? <a href="login.php">log in</p>
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
