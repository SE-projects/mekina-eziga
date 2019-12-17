<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

/*	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$city = mysqli_real_escape_string($conn, $_POST['City']);
	$p_num = mysqli_real_escape_string($conn, $_POST['pnum']);
	$c_name = mysqli_real_escape_string($conn, $_POST['cname']); */

    $Dealer_ID = mysqli_real_escape_string($conn, $_POST['D_ID']);
	$c_name = mysqli_real_escape_string($conn, $_POST['cname']);
	$delivery_option = mysqli_real_escape_string($conn, $_POST['d_opt']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$rating = mysqli_real_escape_string($conn, $_POST['rating']);
	$office_no = mysqli_real_escape_string($conn, $_POST['of_no']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	

	//Error handlers
	//Check for empty fields
	if (empty($c_name) || empty($delivery_option) || empty($email) || empty($office_no) || empty($city)) {
		header ("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $selivery_option) || !preg_match("/^[a-zA-Z]*$/", $city)) {
			header ("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header ("Location: ../signup.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM Dealer WHERE Dealer_ID='$D_ID'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header ("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO Dealer (dealer_id, shop_name, email, office_number, city, delivery_option, rating) VALUES ('$Dealer_ID', '$c_name', '$email','$office_no','$city','$delivery_option','Unrated');";
					mysqli_query($conn, $sql);
					header ("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}


} else {
	header ("Location: ../signup.php");
	exit();
}