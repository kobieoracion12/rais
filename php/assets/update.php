<?php
require_once 'database.php';
 
  if(isset($_POST['update_profile'])){
    
    $id = $_POST['acc-no'];
    $firstname = $_POST['acc-first'];
    $lastname = $_POST['acc-last'];
    $email = $_POST['acc-email'];
    $mobile = $_POST['acc-mobile'];
    $birthdate = $_POST['acc-bday'];
    $username = $_POST['acc-user'];

    $sql = "UPDATE accounts SET first_name = '$firstname', last_name ='$lastname', email_address = '$email', mobile_number ='$mobile', birth_date ='$birthdate', username = '$username' WHERE acc_no = '$id'";

    $result = mysqli_query($config, $sql);

    if($result) {
        header ('location: ../secretary/accounts.php?dataupdated');
    } else {
        header ('location: ../secretary/accounts.php?errorupdating');
        //echo "Error updating record: " . $config->error;
    }
    mysqli_close($config);
}

?>

