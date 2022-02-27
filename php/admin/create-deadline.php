<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Deadline</title>
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
    <div class="col p-5 text-start">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          
          <h4 class="m-3">Create Deadline</h4>

          <div class="p-4"> 

            <!-- Table -->
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Document #</th>
                  <th scope="col">Department</th>
                  <th scope="col">File Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Date Submitted</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mayor's Office</td>
                  <td>resolution.pdf</td>
                  <td>Please check for approval</td>
                  <td>February 27, 2022</td>
                  <td>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                      <i class="fa-solid fa-eye"></i>
                    </button>

                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      <i class="fa-solid fa-trash"></i>
                    </button>
                  </td>
                </tr>
                
              </tbody>
            </table>

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
