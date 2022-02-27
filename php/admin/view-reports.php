<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Home</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../../css/solid.css">
</head>
<body>

<div class="container-fluid">
  <div class="row flex-nowrap">

    <!-- Sidebar -->
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white text-start bg-dark" style="width: 280px; height: 100vh;">
      <ul class="nav nav-pills flex-column mb-auto mt-5">
        <li class="nav-item mb-1">
          <a href="index.php" class="nav-link text-white">
            <i class="fa-solid fa-gauge mx-1"></i>
            Dashboard
          </a>
        </li>

        <hr>

        <li class="mb-1">
          <a href="add-document.php" class="nav-link text-white">
            <i class="fa-solid fa-plus mx-1"></i>
            Add Document
          </a>
        </li>

        <li class="mb-1">
          <a href="create-deadline.php" class="nav-link text-white">
            <i class="fa-solid fa-calendar mx-1"></i>
            Create Deadline
          </a>
        </li>

        <li class="mb-1">
          <a href="view-reports.php" class="nav-link text-white">
            <i class="fa-solid fa-file-lines mx-1"></i>
            View Reports
          </a>
        </li>

        <hr>

        <li class="mb-1">
          <a href="notifications.php" class="nav-link text-white">
            <i class="fa-solid fa-bell mx-1"></i>
            Notifications
          </a>
        </li>

        <hr>

        <li class="mb-1">
          <a href="sec-accounts.php" class="nav-link text-white">
            <i class="fa-solid fa-user mx-1"></i>
            Secretary Accounts
          </a>
        </li>

        <li class="mb-1">
          <a href="dept-accounts.php" class="nav-link text-white">
            <i class="fa-solid fa-user mx-1"></i>
            Department Accounts
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
        <div class="card-body p-4">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th scope="col">Acc #</th>
                <th scope="col">Docu #</th>
                <th scope="col">File Name</th>
                <th scope="col">Description</th>
                <th scope="col" >Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>




</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
