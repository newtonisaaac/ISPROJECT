<?php
include('server.php');

//if user is not logged in, they cannot access this page

if(empty($_SESSION['username'])) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="  sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>RHUMBA ESTATE</title>
</head>
<body>
	<div class="wrap">
		<div class="headermm" id="nav">
			<div id="wrapper">
				<span>Rhumba Estate</span><br/>
			</div>
			<span style="padding-left: 65px">RHUMBA ESTATE</span>
			<div id="menu">
				<a href="login.php">Login</a> &nbsp;
				<a href="customer.php">Guest panel</a> &nbsp;
				<a href="sign.php">Admin panel</a> &nbsp;
			 	<a href="index.php">Home</a> &nbsp;
			 	<a href="aboutus.php">About Us</a> &nbsp;
				<a href="contact.php">Contact</a>
			</div>
		</div>
		<div id="arrow-left" class="arrow"></div>
		<div id="slider">
			<div class="slide slide1">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
			<div class="slide slide2">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
			<div class="slide slide3">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
			<div class="slide slide4">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
			<div class="slide slide5">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
			<div class="slide slide6">
				<div class="slide-content">
					<span></span>
				</div>
			</div>
		</div>
	<div id="arrow-right" class="arrow"></div>
	</div>

	<div class="content">
		<?php if (isset($_SESSION ['success'])): ?>
			<div class=" error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
				</h3>


			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<center>
			<P>Welcome <strong><?php echo $_SESSION['username']; ?></strong></P>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		</center>
		<?php endif ?>
		<a href="details.php">Tenant Details</a>
	</br></br>
		<a href="pay.php">Tenant Payments</a>
	</br></br>
		<a href="property.php">Properties Available</a>
		
	

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

		let sliderImages= document.querySelectorAll('.slide'),
			arrowLeft= document.querySelector('#arrow-left'),
			arrowRight= document.querySelector('#arrow-right'),
			current=0;

		function reset(){
			for (let i = 0; i < sliderImages.length; i++) {
				sliderImages[i].style.display = 'none';
			}
		}

		//initialize slider

		function startSlide(){
			reset();
			sliderImages[0].style.display= 'block';
		}

		//show prev

		function slideLeft(){
			reset();
			sliderImages[current-1].style.display= 'block';
			current--;
		}
		//show next
		function slideRight(){
			reset();
			sliderImages[current+1].style.display= 'block';
			current++;
		}

		//left arrow click
		arrowLeft.addEventListener('click', function(){
			if(current===0){
				current= sliderImages.length;
			}
			slideLeft();
		});

		//Right arrow click
		arrowRight.addEventListener('click', function(){
			if(current=== sliderImages.length- 1){
				current= -1;
			}
			slideRight();
		});

		startSlide();

	</script>

	<div>
		<h1 style="font-family: Helvetica; text-align: center; color: #f0932b;">RHUMBA ESTATE PROPERTIES</h1>
		<p style="text-align: center;">
			
		</p>
		<div class="imagesh">
			<a href="./House1/eastpointe.php"><img src="House1/House1.jpeg" height="350px" width="763px" alt="" style="padding-left: 20px; padding-right: 5px"></a>
			<a href="./House6/orchadcresent.php"><img src="House6/House6.jpeg" height="350px" width="535px" alt="" style="padding-right: 20px"></a>
			<a href="./House4/parkavenue.php"><img src="House4/House4.jpeg" height="320px" width="423px" alt="" style="padding-left: 30px; padding-right: 5px"></a>
			<a href="./House3/marimbatown.php"><img src="House3/House3.jpeg" height="320px" width="423px" alt="" style="padding-right: 30px"></a>
		
		</div>

	</div>
	<footer style="background-color: #1e272e">
		<section class="box">
			<div class="boxes" style="color: #ffffff;">
				<h3 style="color: #7f8c8d">BALMCONSULT LTD</h3><br/><br/>
				P.O Box 23231- 10100</br>
				NYALI, MOMBASA<br/>
				Nairobi, Kenya.<br/><br/>
				<i class="fas fa-phone-volume fa-1x"></i> &nbsp; Office: +254 716 046648<br/><br/>
				<i class="fas fa-globe fa-1x"></i> &nbsp; Email: balmconsult.co.ke
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