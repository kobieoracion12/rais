<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "rais";

	$config = mysqli_connect($host, $user, $pass, $db);
	if(mysqli_connect_errno()) {
		die("Failed to establish connection ".mysqli_connect_error());
	}

?>