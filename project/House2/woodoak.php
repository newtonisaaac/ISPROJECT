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
			<span style="padding-left: 65px">REAL ESTATE</span>
			<div id="menu">
			 	<a href="#">Home</a> &nbsp;
			 	<a href="#">About Us</a> &nbsp;
				<a href="#">Contact</a>
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
		</div>
	<div id="arrow-right" class="arrow"></div>
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
	<div style="background-color: #ecf0f1; width: 100%px;">
	<h2 style="font-family: Times New Roman; text-align: left; color: black;padding-left: 18px">WOODOAK</h2>
	<p style="padding-left: 18px">
		Kilimani<br/>
		Studio1 & 2 Bedroom Apartments<br/>
		From Kshs 7.95M<br/>
	</p>
		<div>
		<h2 style="font-family: Helvetica; text-align: left; color: #f0932b;padding-left: 18px">About Woodoak</h2>
		
		
		<p style="text-align: left; font-size: 15px; padding-left: 18px;padding-right: 18px">
			Woodoak sets the new standar of extraordinary hotel-inspired living where ownership perks are second to none. It is located on wood Avenue which is accessible from Argwings Kodhek Road and Chania Avenue which is next to Adlife Plaza. Woodoak offers a unique combination of studio with amenities such as swimming pool, gym, sauna and restaurant to create a vibrant blend of quality living and unparalleled luxury.

		</p>
	
	<h2 style="font-family: Helvetica; text-align: left; color: #f0932b;padding-left: 18px;padding-right: 18px">Residences</h2>
	

		<p style="text-align: left; font-size: 15px; padding-left: 18px;padding-right: 18px">
			All residences have fully fitted interiors finished and furnishing starndards. Woodoak not only provides free living to thse who opt to live but also boosting returns for all investors who are looking for rent out units.<br/><br/>
			Studio Apartment:
			<ul>
				<li>Ample storage and closet space</li>
				<li>Recessed entrance</li>
				<li>Large windows</li>
				<li>Modern Kitchen with Dining</li>
			</ul>
			<p style="padding-left: 18px">
			1 bedroom apartment:
		</p>
			<ul>
				<li>Entarnce lobby</li>
				<li>Private balcony</li>
				<li>open concept kitchen, dining area and lounge</li>
				<li>Bedroom with ample closet space</li>
				<li>Access to balcony from lounge and bedroom</li>
				<li>Large windows</li>
			</ul>
			<p style="padding-left: 18px">
			2 bedroom apartment:
		</p>
			<ul>
				<li>Open concept kitchen, dining area and lounge</li>
				<li>Large windows with maximum flow of light</li>
				<li>Private balcony</li>
				<li>two bedrroms with ample closet space and large windows</li>
				<li>Master bedroom</li>
				<li>Spacious Lounge</li>

			</ul>


		</p>

		<h2 style="font-family: Helvetica; text-align: left; color: #f0932b;padding-left: 18px">Amenities & Provisions</h2>

			<p style="text-align: left; font-size: 15px; padding-left: 18px">
				Residents have full access to various services to exceed the most demanding expectations. Woodoak presents an intricate mix of modern-day luxuries such as:
				<ul>
					<li>Swimming pool</li>
					<li>Residents Lounge</li>
					<li>Fully Equipped Gym</li>
					<li>Sauna and Stream rooms</li>
					<li>Restaurant</li>
					<li>Conference Room</li>
					<li>Roof Terrace</li>
					<li>lands caped Gardens</li>
				</ul>


			</p>
		</div>
		

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
