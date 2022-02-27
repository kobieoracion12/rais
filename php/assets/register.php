<?php

	require_once("database.php");

	// Check button is NOT is clicked
	if(!isset($_POST['submit'])) {
		header('location: sign-up.php');
		exit();
	}

	// Go on
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
	$bday = $_POST['bday'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirm_password'];
	$priv = 'Department';
	$regdate = $_POST['date_registered'];

	$sql = "INSERT INTO accounts (first_name, last_name, email_address, mobile_number, birth_date, username, password, acc_priv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

	$stmt = mysqli_stmt_init($config);

	if (!mysqli_stmt_prepare($stmt,$sql))
	{
		header('location: sign-up.php?error=servererror');
		exit();
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "sssisssss", $fname, $lname, $email, $mobile_no, $bday, $username, $password, $privilege);
		
		mysqli_stmt_execute($stmt);

		header('location: ../../index.php?accountregistered');
		exit();
}