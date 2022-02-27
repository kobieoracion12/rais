<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Secretary | Home</title>
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
    <div class="col p-5 text-center">
      <div class="card shadow-sm">
        <div class="card-body">
          
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 ps-5 py-4">
                <h1>100</h1>
                <small>Pending Document Approval</small>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 ps-5 py-4">
              <h1>20</h1>
              <small>Approved Documents</small>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 ps-5 py-4">
              <h1>1</h1>
              <small>Denied Documents</small>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>




</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
