<?php
if (!isset($_SESSION))
{
session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" href="../images/hc.ico">
	<script src="https://kit.fontawesome.com/a79bc33f35.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Fresca&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded&display=swap" rel="stylesheet">
	<title>Random Hospital</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="../images/hc.png" alt="Hospital-Logo" width="76px">
            Random Hospital
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto">
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.php">HOME</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.htmldoctors.php">DOCTORS</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.html#careers">CAREERS</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.html#donate">DONATE</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.html#healthtips">HEALTH TIPS</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.html#about-us">ABOUT US</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="../index.html#contact-us.php">CONTACT US</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION['user']))
            { ?>
            <form class="form-inline pr-2">
                <a href="../login.php"><button class="btn btn-outline-success " type="button">SIGN IN</button></a>
                <a href="../signup.php"><button class="btn btn-outline-success " type="button">SIGN UP</button></a>
            </form>
        <?php }
        else {
            ?>
                           <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PROFILE
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Your profile</button>
                    <?php if ($_SESSION['user']=="patient" || $_SESSION['user']=="staff")
                    { 
                        if ($_SESSION['user']=="patient") {?>
                    <a href="../includes/images/healthrecord.php"><button class="dropdown-item" type="button">Health records</button></a>
                <?php } ?>
                    <a href="../includes/images1/labreport.php"><button class="dropdown-item" type="button">Lab records</button></a>
                <?php } ?>
                    <a href="../tokenstatus.php"><button class="dropdown-item" type="button">Token status</button></a>
                    <a href="../forgot.php"><button class="dropdown-item" type="button">Change Password</button></a>
                    <a href="../logout.php"><button class="dropdown-item" type="button">Sign out</button></a>
                </div>
            </div>
       <?php  } ?>
        </div>
    </nav>
    <br><br><br><br>
<?php
include_once 'dbh.php';
$user=$_GET['user'];


if ($user=="patient"){
		if (!isset($_GET['signup']))
		{
	?>

	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 order-md-1">
				<form action="data.php" method="POST">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="UserName">UserName</label>
							<input type="text" class="form-control" id="firstName" name="pusername" placeholder="username" required>
							<div class="invalid-feedback">
								Valid User Name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="lastName" name="ppassword" placeholder="password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">First name</label>
							<input type="text" class="form-control" id="firstName" name="pfirstname"
								placeholder="firstname" required>
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Last name</label>
							<input type="text" class="form-control" id="lastName" name="plastname"
								placeholder="lastname" required>
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4 mb-3">
							<label for="country">Gender</label>
							<select class="custom-select d-block w-100" id="country" name="pgender" required>
								<option value="">Choose</option>
								<option value="m">Male</option>
					  	<option value="f">Female</option>
					  	<option value="o">Other</option>
							</select>
							<div class="invalid-feedback">
								Please select a Gender.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="age">Age</label>
							<input type="number" class="form-control"  name="page" placeholder="age" required>
							<div class="invalid-feedback">
								Valid Age is required.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="mobile">Mobile</label>
							<input type="number" class="form-control" name="pmobile" placeholder="mobile" required>
							<div class="invalid-feedback">
								Mobile No. is required.
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="email">Email </label>
						<input type="email" class="form-control" id="email" name="pemail" placeholder="Email" required>
						<div class="invalid-feedback">
							Please enter a valid email address.
						</div>
					</div>
					<button class="btn btn-primary" name="psubmit" type="submit">Sign up</button>
				</form>
			</div>
		</div>
	</div>
<?php }
	else if ($_GET['signup']=="empty")
	{
		echo "<script>alert('you have to fill all fields')</script>";
		echo("<script>window.location = 'actualsignup.php?user=patient';</script>");
	}
} ?>
<?php if ($user=="doctor"){ 
	if (!isset($_GET['signup']))
		{
			?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 order-md-1">
				<form action="data.php" method="POST">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="UserName">UserName</label>
							<input type="text" class="form-control" id="firstName" name="dusername"
								placeholder="username" required>
							<div class="invalid-feedback">
								Valid User Name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="lastName" name="dpassword"
								placeholder="password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">First name</label>
							<input type="text" class="form-control" id="firstName" name="dfirstname"
								placeholder="firstname" required>
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Last name</label>
							<input type="text" class="form-control" id="lastName" name="dlastname"
								placeholder="lastname" required>
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>
					</div>

					<div class="row">
							<div class="col-md-4 mb-3">
							<label for="country">Gender</label>
							<select class="custom-select d-block w-100" id="country" name="dgender" required>
								<option value="">Choose</option>
								<option value="m">Male</option>
					  	<option value="f">Female</option>
					  	<option value="o">Other</option>
							</select>
							<div class="invalid-feedback">
								Please select a Gender.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="age">Age</label>
							<input type="number" class="form-control" name="dage" placeholder="age" required>
							<div class="invalid-feedback">
								Valid Age is required.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="mobile">Mobile</label>
							<input type="number" class="form-control" name="dmobile" placeholder="mobile" required>
							<div class="invalid-feedback">
								Mobile No. is required.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="email">Email </label>
							<input type="email" class="form-control" id="email" name="demail" placeholder="Email"
								required>
							<div class="invalid-feedback">
								Please enter a valid email address.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="department">Department </label>
							<input type="text" class="form-control" name="branch" placeholder="Department" required>
							<div class="invalid-feedback">
								Please enter a valid department.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="opening-time">Opening-Time </label>
							<input type="time" class="form-control"  name="otime"  required>
							<div class="invalid-feedback">
								Please enter a valid Opening-Time
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="Closing-time">Closing-Time </label>
							<input type="time" class="form-control" name="ctime"  required>
							<div class="invalid-feedback">
								Please enter a valid Closing-Time.
							</div>
						</div>
					</div>
					<button class="btn btn-primary" name="dsubmit" type="submit">Sign up</button>
				</form>
			</div>
		</div>
	</div>
	<?php }
	else if ($_GET['signup']=="empty")
	{
		echo "<script>alert('you have to fill all fields')</script>";
		echo("<script>window.location = 'actualsignup.php?user=doctor';</script>");
	}
} ?>
	<?php if ($user=="staff"){ 
	if (!isset($_GET['signup']))
		{
			?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 order-md-1">
				<form action="data.php" method="POST">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="UserName">UserName</label>
							<input type="text" class="form-control" id="firstName" name="susername" placeholder="username" required>
							<div class="invalid-feedback">
								Valid User Name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="lastName" name="spassword" placeholder="password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">First name</label>
							<input type="text" class="form-control" id="firstName" name="sfirstname"
								placeholder="firstname" required>
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Last name</label>
							<input type="text" class="form-control" id="lastName" name="slastname"
								placeholder="lastname" required>
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4 mb-3">
							<label for="country">Gender</label>
							<select class="custom-select d-block w-100" id="country" name="sgender" required>
								<option value="">Choose</option>
								<option value="m">Male</option>
					  	<option value="f">Female</option>
					  	<option value="o">Other</option>
							</select>
							<div class="invalid-feedback">
								Please select a Gender.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="age">Age</label>
							<input type="number" class="form-control"  name="sage" placeholder="age" required>
							<div class="invalid-feedback">
								Valid Age is required.
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="mobile">Mobile</label>
							<input type="number" class="form-control" name="smobile" placeholder="mobile" required>
							<div class="invalid-feedback">
								Mobile No. is required.
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="email">Email </label>
						<input type="email" class="form-control" id="email" name="semail" placeholder="Email" required>
						<div class="invalid-feedback">
							Please enter a valid email address.
						</div>
					</div>
					<button class="btn btn-primary" name="ssubmit" type="submit">Sign up</button>
				</form>
			</div>
		</div>
	</div>
	<?php }
	else if ($_GET['signup']=="empty")
	{
		echo "<script>alert('you have to fill all fields')</script>";
		echo("<script>window.location = 'actualsignup.php?user=staff';</script>");
	}
} ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>

