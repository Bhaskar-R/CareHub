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
    <link rel="icon" href="images/hc.ico">
    <title>Random Hospital</title>
    <link rel="stylesheet" href="css/styles.css">
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
                    <button class="dropdown-item" type="button">Token status</button>
                    <a href=""><button class="dropdown-item" type="button">Change Password</button></a>
                    <a href="logout.php"><button class="dropdown-item" type="button">Sign out</button></a>
                </div>
            </div>
       <?php  } ?>
        </div>
    </nav>
    <br><br><br><br>
    <br>
<?php 
include_once 'includes/dbh.php';
if (isset($_SESSION['user']) && $_SESSION['user']=="patient")
{
	$username=$_SESSION['username'];
		$sql="SELECT * FROM token WHERE username='$username' limit 1; ";

		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);

		$token=$row['token'];

		$username=$row['username'];
		$dusername=$row['dusername'];
		$sql1="SELECT * FROM doctor WHERE username='$dusername'; ";
		$result1=mysqli_query($conn,$sql1);
		$row1=mysqli_fetch_assoc($result1);
		$totaltoken=$row1['token'];
		$otime=$row1['otime'];
		$ctime=$row1['ctime'];
		?>
		<body style="text-align: center;">
    <br><br><br><br><br>
    <h2>Time Slot:<?php echo "$otime - $ctime" ?></h2>
    <h2>Running Token : <?php if($row['present_token']>$totaltoken)
	{
		echo $totaltoken;
	}
	else
	{
		echo $row['present_token'];
	} ?></h2>
    <h2>Your Token : <?php echo $token; ?></h2>
		<?php 
}
else if (isset($_SESSION['user']) && $_SESSION['user']=="doctor")
{
	if (isset($_POST['change']))
	{
		$sqlz="SELECT * FROM token WHERE dusername='".$_SESSION['username']."' LIMIT 1;";
		$row5=mysqli_query($conn,$sqlz);
		$row6=mysqli_fetch_assoc($row5);
		$present=$row6['present_token']+1;
		$sqlx="UPDATE token set present_token='$present' where dusername='".$_SESSION['username']."' ;";
		mysqli_query($conn,$sqlx);

	}

	$sqla="SELECT * FROM token WHERE dusername='".$_SESSION['username']."' LIMIT 1;";

	$res1=mysqli_query($conn,$sqla);
	$row2=mysqli_fetch_assoc($res1);
	$sqlb="SELECT * FROM doctor WHERE username='".$_SESSION['username']."' ;";
	$row3=mysqli_query($conn,$sqlb);
	$row4=mysqli_fetch_assoc($row3);
	$totaltoken=$row4['token'];
	$otime=$row4['otime'];
	$ctime=$row4['ctime'];
			?>
			<body style="text-align: center;">
    <br><br><br><br><br>
    <h2>Time Slot:<?php echo "$otime - $ctime" ?></h2>
    <h2>Running Token : <?php if($row2['present_token']>$totaltoken)
	{
		echo $totaltoken;
	}
	else
	{
		echo $row2['present_token'];
	} ?></h2>
	<h2><?php echo $totaltoken; ?></h2>
		<?php

		?>
		<form method="POST">
			<button type="submit" name="change">next patient</button>
		</form>
		<?php 

}
else
{
	echo "<script>alert('only patient and doctors can access this page')</script>";
	echo("<script>window.location = 'index.php';</script>");
}

 ?>
</body>