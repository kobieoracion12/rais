<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Department | Account</title>
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
          
          <h4 class="m-3">My Account</h4>

            <div class="m-3">
              <label for="acc-no" class="form-label">Account #</label>
              <input type="text" class="form-control" name="acc-no" disabled><br>

              <div class="row">
                <div class="col-6">
                  <label for="acc-first" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="acc-first"><br>
                </div>

                <div class="col-6">
                  <label for="acc-last" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="acc-last"><br>
                </div>
              </div>

              <div class="row">
                <div class="col-4">
                  <label for="acc-email" class="form-label">Email Address</label>
                  <input type="text" class="form-control" name="acc-email"><br>
                </div>

                <div class="col-4">
                  <label for="acc-mobile" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control" name="acc-mobile"><br>
                </div>

                <div class="col-4">
                  <label for="acc-bday" class="form-label">Birth Date</label>
                  <input type="date" class="form-control" name="acc-bday"><br>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-4">
                  <label for="acc-email" class="form-label">Username</label>
                  <input type="text" class="form-control" name="acc-email"><br>
                </div>

                <div class="col-4">
                  <label for="acc-pwd" class="form-label">Password</label>
                  <input type="password" class="form-control" name="acc-pwd"><br>
                </div>

                <div class="col-4">
                  <label for="acc-priv" class="form-label">Privilege</label>
                  <input type="text" class="form-control" name="acc-priv" disabled>
                </div>

                <button type="submit" name="set-deadline" class="btn btn-primary mt-4">Update</button>
            </div>

            <!-- View Modal -->
            <form method="post" action="#">
              <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Set Deadline</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                      <div class="m-3">
                        <label for="add-form" class="form-label">Department</label>
                        <input type="text" class="form-control" name="add-form" disabled><br>

                        <label for="add-form" class="form-label">Attached Document</label>
                        <input type="file" class="form-control" name="add-form" disabled><br>

                        <label for="add-desc" class="form-label">Description</label>
                        <textarea class="form-control" rows="5" name="add-desc" disabled></textarea><br>

                        <hr>

                        <label for="add-form" class="form-label">Set Deadline</label>
                        <input type="date" class="form-control" name="add-form"><br>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="set-deadline" class="btn btn-primary">Set Deadline</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Modal -->
            <form method="post" action="#">
              <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                      Are you sure you want to delete this?
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="delete-file" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
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
