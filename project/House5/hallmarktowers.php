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
			 	<a href="index.php">Home</a> &nbsp;
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
	<div style="background-color: #ecf0f1; width:100%px;">
	<h2 style="font-family: Times New Roman; text-align: left; color: black; padding-left: 18px">HALLMARK TOWERS</h2>
	<p style="padding-left: 18px">
		Central Business District<br/>
		Office and Confrence Rooms<br/>
		From Kshs 6.95M<br/>
	</p>
	<div>
		<h2 style="font-family: Helvetica; text-align: left; color: #f0932b; padding-left: 18px;">About HallMark</h2>
		
		
		<p style="text-align: left; padding-left: 18px; padding-right: 18px;">
			We offer ideal home setting and eastpointe complements fine taste with a touch of simplicity. It is located only a few minutes away from Nairobi town. It is also well seasoned with artistic blend of design and space.Eastpoint enojys close proximity to recreational activities such as sports, wildlife and museums visiting.
		</p>
	
	<h2 style="font-family: Helvetica; text-align: left; color: #f0932b; padding-left: 18px">Residences</h2>
	

		<p style="text-align: left; padding-left: 18px; padding-right: 18px;">
			The apartments compose a spaciuos lounge, modern kitchen and two to three bedrooms. The decor comprises of stone and paint exteriors, ceramic tile flooring, granite work tops for the kitchen and MDF wardrobes.<br/>
			For the two bedroom apartment consist of:
			<ul>
			<li>A comfortable lounge.</li>
			<li>Bedrooms with MDF warddrobes.</li>
			<li> Modern open plan kitchen with granite worktops and MDF cabinetry.</li>
			<li>Ceramic Tiles.</li>
			<li>Large windows.</li>
		</ul>
		<p style="text-align: left; padding-left: 18px">

			Three bedroom apartments:
		</p>
			<ul>
			<li>Master en-suite.</li>
			<li>Bedrooms with well-sized wardrobes.</li>
			<li>Spacious lounge.</li>
			<li>Open-plan kitchen.</li>
		</ul>

		</p>


		<h2 style="font-family: Helvetica; text-align: left; color: #f0932b; padding-left: 18px">Amenities & Provisions</h2>
		

			<p style="text-align: left; padding-left: 18px; padding-right: 18px;">

				Eastpoint has amenities including swimming pools and a garden, an ultra madern gym and stream bath that give off a lush lifestyle. other amenities and provision offered are:
				<ul>
					<li>panoramic lift</li>
					<li>Ample parking</li>
					<li>Borehole</li>
					<li>24 hr CCTV security</li>
					<li>Satelite dish</li>
					<li>Electric fencing</li>
					<li>Standby generator incase of blackout</li>
					<li>Underground 400,000 litre storage tank</li>
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
