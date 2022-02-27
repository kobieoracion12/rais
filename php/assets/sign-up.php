<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-min.css">
	<link rel="stylesheet" type="text/css" href="../../css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../../css/brands.css">
	<link rel="stylesheet" type="text/css" href="../../css/solid.css">
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col"></div>

			<div class="col-8" style="margin:4.8%">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<div class="card-body">
						<div class="container-fluid">
							<div class="row g-0">
								<div class="col g-0">
									<h4><b>Registration</b></h4><br>
								</div>
							</div>

							<?php
							if (isset($_GET['error'])) {

								if ($_GET['error'] == "notmatch") {
									echo '<div class="alert alert-danger" role="alert">
											Password does not match.
										</div>';
								}

								if ($_GET['error'] == "emptyfields") {
									echo '<div class="alert alert-danger" role="alert">
											All fields are required.
										</div>';
								}

								if ($_GET['error'] == "terms") {
									echo '<div class="alert alert-danger" role="alert">
										You did not agree to the Terms & Conditions.
									</div>';
								}

								if ($_GET['error'] == "filetype") {
									echo '<div class="alert alert-danger" role="alert">
											File type cannot be read.
										</div>';
								}
							}

							if (isset($_GET['msg'])) {

								if ($_GET['msg'] == "success") {
									echo '<div class="alert alert-success" role="alert">
											Registration successful!
										</div>';
								}
							}

							?>

							<form class="ps-4 pe-4 pb-4" method="POST" action="register.php" enctype="multipart/form-data">
								<div class="row g-0">
									<div class="col g-0" style="padding: 2%">
										<div class="container-fluid">
											<label for="first-input" class="form-label" style="float:left; font-weight: bold;">First Name</label><br>
											<input type="text" id="first-input" name="first_name" class="form-control form-style" placeholder="First Name" required><br>

											<label for="last-input" class="form-label" style="float:left; font-weight: bold;">Last Name</label><br>
											<input type="text" id="last-input" name="last_name" class="form-control form-style" placeholder="Last Name" required><br>

											<label for="email-input" class="form-label" style="float:left; font-weight: bold;">Email Address</label><br>
											<input type="email" id="email-input" name="email" class="form-control form-style" placeholder="example@email.com" required><br>

											
										</div>
									</div>

									<div class="col g-0" style="padding: 2%">
										<div class="container-fluid">
											<label for="number-input" class="form-label" style="float:left; font-weight: bold;">Mobile Number</label><br>
											<input type="number" id="number-input" name="mobile_no" class="form-control form-style" placeholder="09xxxxxxxxx" required><br>

											<label for="bday-input" class="form-label" style="float:left; font-weight: bold;">Birth Date</label><br>
											<input type="date" id="bday-input" name="bday" class="form-control form-style" placeholder="Birth Date" required><br>
										</div>
									</div>

									<hr>

									<div class="row g-0">
										<div class="col g-0" style="padding: 2%">
											<div class="container-fluid">
												<label for="user-input" class="form-label" style="float:left; font-weight: bold;">Username</label><br>
												<input type="text" id="user-input" name="username" class="form-control form-style" placeholder="Username" required><br>

												<label for="password-input" class="form-label" style="float:left; font-weight: bold;">Password</label><br>
												<input type="password" name="password" id="password-input" class="form-control form-style" placeholder="Password" required><br>

												<label for="password2-input" class="form-label" style="float:left; font-weight: bold;">Confirm Password</label><br>
												<input type="password" name="confirm_password" id="password2-input" class="form-control form-style" placeholder="Confirm Password" required><br>


											</div>
										</div>

										<div>
											<button type="submit" name="submit" class="btn btn-primary reg-submit btn-block">Register</button>
											<button type="button" class="btn btn-danger btn-block" onclick="window.location.href='../../index.php';">Cancel</button>
										</div>

									</div>

								</div>
						</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col"></div>
		</div>
	</div>

</body>

</html>