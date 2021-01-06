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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" href="images/hc.ico">
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Fresca&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded&display=swap" rel="stylesheet">
	<title>Random Hospital</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<?php
include_once 'includes/dbh.php';

?>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">
			<img src="images/hc.png" alt="Hospital-Logo" width="76px">
			Random Hospital
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mx-auto">
				<li class="nav-list px-2">
					<a class="nav-link" href="index.php">HOME</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="doctors.php">DOCTORS</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="index.php#careers">CAREERS</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="index.php#donate">DONATE</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="index.php#healthtips">HEALTH TIPS</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="index.php#about-us">ABOUT US</a>
				</li>
				<li class="nav-list px-2">
					<a class="nav-link" href="contact-us.php">CONTACT US</a>
				</li>
			</ul>
			<?php if (!isset($_SESSION['user'])) { ?>
				<form class="form-inline pr-2">
					<a href="login.php"><button class="btn btn-outline-success " type="button">SIGN IN</button></a>
					<a href="signup.php"><button class="btn btn-outline-success " type="button">SIGN UP</button></a>
				</form>
			<?php } else {
			?>
				<div class="dropdown">
					<button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						PROFILE
					</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
						<a href="#"><button class="dropdown-item" type="button">Your profile</button></a>
						<?php if ($_SESSION['user'] == "patient") { ?>
							<a href="includes/images/healthrecord.php"><button class="dropdown-item" type="button">Health records</button></a>
							<a href="includes/images1/labreport.php"><button class="dropdown-item" type="button">Lab records</button></a>
						<?php } ?>
						<a href="tokenstatus.php"><button class="dropdown-item" type="button">Token status</button></a>
						<a href="forgot.php"><button class="dropdown-item" type="button">Change Password</button></a>
						<a href="logout.php"><button class="dropdown-item" type="button">Sign out</button></a>
					</div>
				</div>
			<?php  } ?>
		</div>
	</nav>
	<br><br><br><br>
	<br>
	<form method="POST">
		<div class="col-md-4 mb-3" style="text-align: center; display: inline-block;">
			<label>DEPARTMENT</label>
			<br>
			<select name="department" class="custom-select d-block w-100" id="state">
				<option value="">Select an option</option>
				<option value="CARDIOLOGY">CARDIOLOGY</option>
				<option value="NEUROLOGY">NEUROLOGY</option>
				<option value="ENT">ENT</option>
				<option value="NEPHROLOGY"> NEPHROLOGY</option>
				<option value="GYNAECOLOGY"> GYNAECOLOGY</option>
				<option value="OBSTETRICS"> OBSTETRICS</option>
				<option value="ORTHOPAEDICS">ORTHOPAEDICS</option>
				<option value="RADIOLOGY"> RADIOLOGY</option>
				<option value="UROLOGY"> UROLOGY</option>
				<option value="DERMATOLOGY">DERMATOLOGY</option>
			</select>
		</div>
		<br>
		<div class="col-md-4 mb-3" style="text-align: center; display: inline-block;">
			<label>DOCTOR</label>
			<br>
			<input class="custom-select d-block w-100" type="text" name="search" placeholder="Search" style="text-align: center; display: inline-block;">
		</div>
		<br>
		<div class="col-md-4 mb-3" style="text-align: center; display: inline-block;">
			<label>TIME SLOT</label>
			<select name="slot" class="custom-select d-block w-100" id="state">
				<option value=8>Select an option</option>
				<option VALUE=9>9:00 AM - 10:00 AM</option>
				<option VALUE=10>10:00 AM - 11:00 AM</option>
				<option VALUE=11>11:00 AM - 12:00 PM</option>
				<option VALUE=12>12:00 AM - 1:00PM</option>
				<option VALUE=13>1:00 AM - 2:00 PM</option>
				<option VALUE=14>2:00 AM - 3:00 PM</option>
				<option VALUE=15>3:00 AM - 4:00 PM</option>
				<option VALUE=16>4:00 AM - 5:00 PM</option>
				<option VALUE=17>5:00 AM - 6:00 PM</option>
				<option VALUE=18>6:00 AM - 7:00 PM</option>
				<option VALUE=19>7:00 AM - 8:00 PM</option>
			</select>
		</div>
		<br>
		<button class="btn btn-outline-primary" type="submit" name="submit">SEARCH</button>
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$sql = "";
		$department = $_POST['department'];
		$slot = $_POST['slot'];
		$search = $_POST['search'];
		if ($_POST['slot'] == 8 && $_POST['department'] == "" && empty($_POST['search'])) {
			$sql = "SELECT * FROM doctor ;";
		} elseif ($_POST['slot'] == 8 && $_POST['department'] == "" && !empty($_POST['search'])) {
			$search = $_POST['search'];
			$sql = "SELECT * FROM doctor where fname like '%" . $search . "%' or lname like '%" . $search . "%';";
		} else if ($_POST['slot'] == 8 && $_POST['department'] != "" && empty($_POST['search'])) {
			$department = $_POST['department'];
			$sql = "SELECT * FROM doctor where branch='$department';";
		} else if (($_POST['slot'] != 8) && ($_POST['department'] == "") && (empty($_POST['search']))) {
			$slot = $_POST['slot'];
			$sql = "SELECT * FROM doctor where otime='$slot:00';";
		} else if (($_POST['slot'] != 8) && ($_POST['department'] != "") && (empty($_POST['search']))) {
			$slot = $_POST['slot'];
			$sql = "SELECT * FROM doctor where otime='$slot:00' and branch='$department;'";
		} else if (($_POST['slot'] != 8) && ($_POST['department'] == "") && (!empty($_POST['search']))) {
			$slot = $_POST['slot'];
			$sql = "SELECT * FROM doctor where otime='$slot:00' and (fname like '%" . $search . "%' or lname like '%" . $search . "%');";
		} else if (($_POST['slot'] == 8) && ($_POST['department'] != "") && (!empty($_POST['search']))) {
			$slot = $_POST['slot'];
			$sql = "SELECT * FROM doctor where branch='$department' and (fname like '%" . $search . "%' or lname like '%" . $search . "%');";
		} else if (($_POST['slot'] != 8) && ($_POST['department'] != "") && (!empty($_POST['search']))) {
			$slot = $_POST['slot'];
			$sql = "SELECT * FROM doctor where otime='$slot:00' and branch='$department' and (fname like '%" . $search . "%' or lname like '%" . $search . "%');";
		}
		$result = mysqli_query($conn, $sql);
		$resultrow=mysqli_num_rows($result);
		if ($resultrow>0)
		{
		while ($row = mysqli_fetch_assoc($result)) {
	?>
			<div id="example1">
				<div>
					<?php
					if ($row['gender'] == "m") { ?>

						<img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
					<?php  } else {
					?>
						<img src=" images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">

					<?php } ?>
				</div>
				<h4 class="h4"><?php echo $row['fname'] . " " . $row['lname']; ?></h4>
				<p class="classified"><?php echo $row['branch']; ?></p>
				<p class="classified1"><?php echo "appointment slot <br> " . $row['otime'] . " - " . $row['ctime']; ?>
				</p>
				<?php

				?>
				<form action="appointment1.php" method="POST">
					<button class="btn btn-outline-primary" name="appointment" value=<?php echo $row['username']; ?>>BOOK APPOINTMENT</button>
				</form>
			</div>
	<?php
		}
		}
		else
		{
		    ?>
		    <br>
		    <br>
		    <br>
		    <h2 text-align:center>
		    <?php
		    echo "No Search results found. Try again!";
		    ?>
		    </h2>
		    <?php
		}
	}
	?>
	<div>
		<?php

		?>

	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>