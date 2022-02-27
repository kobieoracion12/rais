<?php
  include_once("../assets/session.php");
  include_once("../assets/userdata.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Secretary | Account</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../../css/solid.css">
</head>
<body>

<div class="container-fluid">
  <div class="row flex-nowrap">

    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white text-start bg-dark" style="width: 280px; height: 100vh;">
      <ul class="nav nav-pills flex-column mb-auto mt-5">
        <li class="nav-item mb-1">
          <a href="index.php" class="nav-link text-white">
            <i class="fa-solid fa-gauge mx-1"></i>
            Dashboard
          </a>
        </li>

        <li class="mb-1">
          <a href="review-document.php" class="nav-link text-white">
            <i class="fa-solid fa-file mx-1"></i>
            Review Document
          </a>
        </li>

        <li class="mb-1">
          <a href="notifications.php" class="nav-link text-white">
            <i class="fa-solid fa-bell mx-1"></i>
            Notifications
          </a>
        </li>

        <li class="mb-1">
          <a href="accounts.php" class="nav-link text-white">
            <i class="fa-solid fa-user mx-1"></i>
            My Account
          </a>
        </li>

        <hr>

        <li class="mb-1">
          <a href="../assets/logout.php" class="nav-link text-white">
            <i class="fa-solid fa-right-from-bracket mx-1"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="col p-5 text-start">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          
          <h4 class="m-3">My Account</h4>

            <form method="post" action="../assets/update.php">
              <div class="m-3">
                <label for="acc-no" class="form-label">Account #</label>
                <input type="text" class="form-control" name="acc-no" id="acc-no" value="<?php echo $_SESSION['user-id'] ?>" disabled><br>

                <div class="row">
                  <div class="col-6">
                    <label for="acc-first" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="acc-first" id="acc-first" value="<?php echo $_SESSION['first']?>"><br>
                  </div>

                  <div class="col-6">
                    <label for="acc-last" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="acc-last" id="acc-last" value="<?php echo $_SESSION['last']?>"><br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-4">
                    <label for="acc-email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="acc-email" id="acc-email" value="<?php echo $_SESSION['email']?>"><br>
                  </div>

                  <div class="col-4">
                    <label for="acc-mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="acc-mobile" id="acc-mobile" value="<?php echo $_SESSION['mobile']?>"><br>
                  </div>

                  <div class="col-4">
                    <label for="acc-bday" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" name="acc-bday" id="acc-bday" value="<?php echo $_SESSION['bday']?>"><br>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-4">
                    <label for="acc-user" class="form-label">Username</label>
                    <input type="text" class="form-control" name="acc-user" id="acc-user" value="<?php echo $_SESSION['username']?>"><br>
                  </div>

                  <div class="col-4">
                    <label for="acc-pwd" class="form-label">Change Password</label>
                    <input type="password" class="form-control" name="acc-pwd" id="acc-pwd"><br>
                  </div>

                  <div class="col-4">
                    <label for="acc-priv" class="form-label">Privilege</label>
                    <input type="text" class="form-control" name="acc-priv" value="<?php echo $_SESSION['priv']?>" disabled>
                  </div>

                  <button type="submit" name="update_profile" id="update_profile" class="btn btn-primary mt-4">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</body>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>
