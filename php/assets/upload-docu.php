<?php
include_once("database.php");
include_once("session.php");
include_once("userdata.php");

if(isset($_POST["upload"])) {

	$id = $_SESSION['user-id'];
	$dept = $_SESSION['priv'];
	$description = $_POST['add-desc'];
	$status = 'Pending';

	$statement = $config -> prepare("INSERT INTO documents (acc_no, department_origin, description, status) VALUES (?,?,?,?)");
	$statement -> bind_param("isss", $id, $dept, $description, $status);

	if($statement -> execute()) {
		header("Location: ../admin/add-document.php?documentuploaded");
	}
	else {
		header("Location: ../admin/add-document.php?uploadfailed");
		//echo "Error updating record: " . $config->error;
	}

	mysqli_close($config);
}

if(isset($_POST["dept_upload"])) {

	$id = $_SESSION['user-id'];
	$dept = $_SESSION['priv'];
	$description = $_POST['add-desc'];
	$status = 'Pending';

	$statement = $config -> prepare("INSERT INTO documents (acc_no, department_origin, description, status) VALUES (?,?,?,?)");
	$statement -> bind_param("isss", $id, $dept, $description, $status);

	if($statement -> execute()) {
		header("Location: ../department/add-document.php?documentuploaded");
	}
	else {
		header("Location: ../department/add-document.php?uploadfailed");
		//echo "Error updating record: " . $config->error;
	}

	mysqli_close($config);
}

?>

?>

