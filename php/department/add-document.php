<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department | Document</title>
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
          <a href="add-document.php" class="nav-link text-white">
            <i class="fa-solid fa-plus mx-1"></i>
            Add Document
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
          
          <h4 class="m-3">Add Documents</h4>

          <form method="post" action="#" class="p-4">
            <label for="add-form" class="form-label">Select Department</label>
            <select class="form-select" name="add-dept">
              <option selected>Select Department</option>
              <option value="Engineering">Engineering's Office</option>
              <option value="Treasury">Treasury Office</option>
              <option value="Mayor">Mayor's Office</option>
            </select><br>

            <label for="add-form" class="form-label">Attach Document</label>
            <input type="file" class="form-control" name="add-form"><br>

            <label for="add-desc" class="form-label">Description</label>
            <textarea class="form-control" rows="5" name="add-desc"></textarea><br>

            <input type="submit" name="add-button" class="btn btn-primary w-100">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>




</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
