<?php
	session_start();

	$first_name = "";
	$last_name = "";
	$House_number = "";
	$phone_number = "";
	$email = "";
	$rent = "";
	$electricity_bill = "";
	$water_bill = "";
	$errors = array();

	//connect to the database

	$db = mysqli_connect('localhost','root','','ispro');

	//details concerning tenants
	if(isset($_POST['Add'])) {
		$first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$House_number = ($_POST['House_number']);
		$phone_number = ($_POST['phone_number']);
		$email = ($_POST['email']);
		$rent = ($_POST['rent']);
		$electricity_bill = ($_POST['electricity_bill']);
		$water_bill = ($_POST['water_bill']);

		//ensure that form fileds are filled properly

		if (empty($first_name)){
			array_push($errors, "first_name is required");

		}
		if (empty($last_name)){
			array_push($errors, "last_name is required");

		}
		if (empty($House_number)){
			array_push($errors, "House_number is required");

		}
		if (empty($phone_number)) {
			array_push($errors, "phone_number is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($rent)) {
			array_push($errors, "rent is required");
		}
		if (empty($electricity_bill)) {
			array_push($errors, "electricity_bill is required");
		}
		if (empty($water_bill)) {
			array_push($errors, "water_bill is required");
		}

		if(count($errors) == 0) {
			$sql = "INSERT INTO tenantspayments (first_name, last_name, House_number, phone_number, email, rent, electricity_bill, water_bill) VALUES ('$first_name','$last_name','$House_number','$phone_number','$email','$rent','$electricity_bill','$water_bill')";
			mysqli_query($db, $sql);
			$_SESSION['first_name'] = $first_name;
			$_SESSION['last_name'] = $last_name;
			$_SESSION['House_number'] = $House_number;
			$_SESSION['phone_number'] = $phone_number;
			$_SESSION['email'] = $email;
			$_SESSION['rent'] = $rent;
			$_SESSION['electricity_bill'] = $electricity_bill;
			$_SESSION['water_bill'] = $water_bill;
			$_SESSION['success'] = "Added successfully";
			header('location: pay.php'); 



		}

	}
	//details concerning payments




	?>