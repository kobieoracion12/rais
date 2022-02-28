<?php
  include_once("../assets/session.php");
  include_once("../assets/userdata.php");
?>

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
    <div class="col p-5 text-start">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          
          <h4 class="m-3">Add Documents</h4>

          <?php
            if(isset($_GET['documentuploaded'])) {
              echo '<div class="alert alert-success text-center m-4" role="alert">
                    Document uploaded
                    </div>';
            }

            if(isset($_GET['uploadfailed'])) {
              echo '<div class="alert alert-danger text-center m-4" role="alert">
                    Error uploading report
                    </div>';
            }

          ?>

          <form method="post" action="../assets/upload-docu.php" class="p-4 pt-2">
            <label for="add-dept" class="form-label">Department</label>
            <input type="text" class="form-control" name="add-dept" value="<?php echo $_SESSION['priv']?>" disabled><br>

            <label for="add-file" class="form-label">Attach Document</label>
            <input type="file" class="form-control" name="add-file"><br>

            <label for="add-desc" class="form-label">Description</label>
            <textarea class="form-control" rows="5" name="add-desc"></textarea><br>

            <input type="submit" name="upload" id="upload" class="btn btn-primary w-100">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>




</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
