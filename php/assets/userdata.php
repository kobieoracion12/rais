<?php
include_once "database.php";

$username = $_SESSION["username"];

$sql = mysqli_query($config, "SELECT * FROM accounts WHERE username = '$username'");

while($rows = mysqli_fetch_array($sql)) {
	$_SESSION['user-id'] = $rows['acc_no'];
	$_SESSION['first'] = $rows['first_name'];
	$_SESSION['last'] = $rows['last_name'];
	$_SESSION['email'] = $rows['email_address'];
	$_SESSION['mobile'] = $rows['mobile_number'];
	$_SESSION['bday'] = $rows['birth_date'];
	$_SESSION['username'] = $rows['username'];
	$_SESSION['priv'] = $rows['acc_priv'];
}

$id = $_SESSION['user-id'];

?>
