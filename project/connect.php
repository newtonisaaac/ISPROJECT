<?php
	session_start();

	$first_name = "";
	$last_name = "";
	$Occupation = "";
	$phone_number = "";
	$Age = "";
	$House_number = "";
	$email = "";
	$DOB = "";
	$errors = array();

	//connect to the database

	$db = mysqli_connect('localhost','root','','ispro');

	//details concerning tenants
	if(isset($_POST['Add'])) {
		$first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$Occupation = ($_POST['Occupation']);
		$phone_number = ($_POST['phone_number']);
		$Age = ($_POST['Age']);
		$House_number = ($_POST['House_number']);
		$email = ($_POST['email']);
		$DOB = ($_POST['DOB']);

		//ensure that form fileds are filled properly

		if (empty($first_name)){
			array_push($errors, "first_name is required");

		}
		if (empty($last_name)){
			array_push($errors, "last_name is required");

		}
		if (empty($Occupation)){
			array_push($errors, "Occupation is required");

		}
		if (empty($phone_number)) {
			array_push($errors, "phone_number is required");
		}
		if (empty($Age)) {
			array_push($errors, "Age is required");
		}
		if (empty($House_number)) {
			array_push($errors, "House_number is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($DOB)) {
			array_push($errors, "DOB is required");
		}

		if(count($errors) == 0) {
			$sql = "INSERT INTO tenantdetails (first_name, last_name, Occupation, phone_number, Age, House_number, email, DOB) VALUES ('$first_name','$last_name','$Occupation','$phone_number','$Age','$House_number','$email','$DOB')";
			mysqli_query($db, $sql);
			$_SESSION['first_name'] = $first_name;
			$_SESSION['last_name'] = $last_name;
			$_SESSION['Occupation'] = $Occupation;
			$_SESSION['phone_number'] = $phone_number;
			$_SESSION['Age'] = $Age;
			$_SESSION['House_number'] = $House_number;
			$_SESSION['email'] = $email;
			$_SESSION['DOB'] = $DOB;
			$_SESSION['success'] = "Added successfully";
			header('location: details.php'); 



		}

	}
	//details concerning payments




	?>