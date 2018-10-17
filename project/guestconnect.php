<?php
	

	$username = "";
	$email = "";
	$password_1 = "";
	$password_2 = "";
	$address = "";
	$phone_number = "";
	$errors = array();

	//connect to the database

	$db = mysqli_connect('localhost','root','','ispro');

	//if the register button is clicked
	if(isset($_POST['register'])) {
		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password_1 = ($_POST['password_1']);
		$password_2 = ($_POST['password_2']);
		$address = ($_POST['address']);
		$phone_number = ($_POST['phone_number']);

		//ensure that form fileds are filled properly

		if (empty($username)){
			array_push($errors, "username is required");

		}
		if (empty($email)){
			array_push($errors, "email is required");

		}
		if (empty($password_1)){
			array_push($errors, "password is required");

		}
		if (empty($password_2)){
			array_push($errors, "password is required");

		}
		if (empty($address)){
			array_push($errors, "address is required");

		}
		if (empty($phone_number)){
			array_push($errors, "phone_number is required");

		}

		if ($password_1 != $password_2) {
			array_push($errors, "The two passowrds do not match");
		}
		


		if(count($errors) == 0) {
			$password = md5($password_1); //password encryption
			$sql = "INSERT INTO guest (username, email, password, address, phone_number) VALUES ('$username','$email','$password','$address','$phone_number')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logging successful";
			header('location: customerhome.php'); 



		}

	}
	//user login from login page
	if (isset($_POST['login'])) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		//ensure that form fileds are filled properly

		if (empty($username)){
			array_push($errors, "username is required");

		}
		if (empty($password)){
			array_push($errors, "password is required");

		}

		if (count($errors) == 0) {
			$password = md5($password); //password encryption
			$query = "SELECT * FROM guest WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

				//login user
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "login successful";
				header('location: customerhome.php');//redirect to homepage

			}else{
				array_push($errors,"wrong username/password combination" );
			}
		}

	}



	//logout
	if (isset($_GET["logout"])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');


	}

?>