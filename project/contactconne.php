<?php


	
	$name = "";
	$email = "";
	$subject = "";
	$phonenumber = "";
	$errors = array();

	
	$db = mysqli_connect('localhost','root','','ispro');



	if(isset($_POST['reg'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$message = $_POST['message'];


		if (empty($name)){
			array_push($errors, "name is required");

		}
		if (empty($email)){
			array_push($errors, "email is required");

		}
		if (empty($phonenumber)){
			array_push($errors, "phonenumber is required");

		}

		if (empty($message)){
			array_push($errors, "message is required");

		}


		if(count($errors) == 0) {
		$sql= "INSERT INTO people(name, email, subject, message) VALUES($name, $email, $subject, $message)";
		mysqli_query($db, $sql);


		$to='tonny@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phonenumber."\n"."Message: ".$message."\n". "Left the following message: "."\n\n".$message;
		$headers= "From: ".$email;
		$nummm='0796655411';
		$message2="hello, ".$name."\n".". We have received your message and we will contact you shortly.\n"."Fell free to reach us through the following number: ".$nummm;

		if (!mysqli_query($db, $sql)) {
			die('Something went wrong!');
		}

		if (mail($to , $subject, $message, $headers)) {
			echo "Sent Successfully! Thank you"." ".$name."We will contact you shortly!";
		}else {
			echo "Something went wrong!";
		}

		if (mail($email, $subject, $message2, $headers)) {
			echo "Sent successfully";

		}else{
			echo "something went wrong!";
		}




	}





}






?>