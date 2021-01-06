<?php 
include_once 'includes/dbh.php';
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
	<link rel="icon" href="images/hc.ico">
	<script src="https://kit.fontawesome.com/a79bc33f35.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Fresca&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded&display=swap" rel="stylesheet">
	<title>Random Hospital</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="images/hc.png" alt="Hospital-Logo" width="76px">
            Random Hospital
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
            <?php if (!isset($_SESSION['user']))
            { ?>
            <form class="form-inline pr-2">
                <a href="login.php"><button class="btn btn-outline-success " type="button">SIGN IN</button></a>
                <a href="signup.php"><button class="btn btn-outline-success " type="button">SIGN UP</button></a>
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
                    <?php if ($_SESSION['user']=="patient")
                    { ?>
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
	<?php 
	if (!isset($_GET['user']))
	{
	 ?>
	


	  	<form method="GET">
		<div id="example4">
			<label>Select the User</label>
			<p></p>
			<select class="custom-select d-block w-100" id="User" required name="user">
				<option value="">Choose...</option>
				<option  value="doctor">Doctor</option>
				<option  value="patient">Patient</option>
				<option  value="staff">Staff</option>
			</select>
			<br>
			<p></p>
			<input class="btn btn-outline-primary" type="submit" value="Submit" name="typesubmit">
		</div>
	</form>

	<?php 
}
	  if (isset($_GET['typesubmit']) && !isset($_GET['user']))
	{
		echo "<script>alert('you have to select an option')</script>";
	}
	else if (isset($_GET['typesubmit']) && isset($_GET['user']))
	{
		$type=$_GET['user'];
		form:
		?>
	<form method="POST">
		<div id="example1">
			<label>Username</label>
			<input class="form-control" type="text" name="luser">
			<p></p>
			<label>Password</label>
			<input class="form-control" type="password" name="lpassword">
			<br>
			<p></p>
			<input class="btn btn-outline-primary" type="submit" value="Login" name="lsubmit">
		</div>
	</form>
	<?php
}?>
	<a href="forgot.php">Forgot Password</a>
<?php 

	if (isset($_POST['lsubmit']))
	{
		$password=$_POST['lpassword'];
		$username=$_POST['luser'];
		$sql="SELECT username FROM $type where username='$username' ;";
		$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if (!($resultcheck>0))
			{
				echo "<script>alert('invalid username')</script>";
			}
			else
			{
				$sql1="SELECT PASSWORD FROM $type WHERE USERNAME='$username'";
				$result1=mysqli_query($conn,$sql1);
				$resultcheck1=mysqli_num_rows($result1);
				$pwd=mysqli_fetch_assoc($result1);
				$pwd2=$pwd['PASSWORD'];
				if ($pwd2!=$password)
				{
					echo "<script>alert('incorrect password')</script>";
				}
				else
				{
					echo "<script>alert('You have been signed in successfully')</script>";
					if (!isset($_SESSION))
{
session_start();
}
					$_SESSION['username']=$username;
					$_SESSION['user']=$type;
					echo("<script>window.location = 'index.php';</script>");
				}
			}
	}
	 ?>
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

<?php  ?>
</body>
</html>