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
		<h2 style="padding:20px 0;">OUR POPULAR PACKS</h2>
    <div class="doctors-container">
        <div class=" wrap2" style="width: 90%; display: inline-block;">
            <div id="example1">
                <div>
                    <img src="images/file.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Comprehensive body check up for men</h4>
                <p class="classified">Category: General body checkup</p>
                <p class="classified1">Get your entire body checked up
                </p>
                <a href="test.php">
                    <button class="btn btn-outline-primary">BUY</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/file.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Comprehensive body check up for women</h4>
                <p class="classified">Category: General body checkup</p>
                <p class="classified1">Get your entire body checked up
                </p>
                <a href="test.php">
                    <button class="btn btn-outline-primary">BUY</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/file.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Comprehensive Fitness check up </h4>
                <p class="classified">Category: Fitness</p>
                <p class="classified1">Get to your know your fitness levels
                </p>
                <a href="test.php">
                    <button class="btn btn-outline-primary">BUY</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/file.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Comprehensive body check up for couple</h4>
                <p class="classified">Category: general body checkup for couples</p>
                <p class="classified1">Get your entire body checked up
                </p>
                <a href="test.php">
                    <button class="btn btn-outline-primary">BUY</button>
                </a>
            </div>

            <div id="example1">
                <div>
                    <img src="images/file.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Comprehensive blood Composition test</h4>
                <p class="classified">Category:Blood Test</p>
                <p class="classified1">Get your complete report and composition
                </p>
                <a href="test.php">
                    <button class="btn btn-outline-primary">BUY</button>
                </a>
            </div>
        </div>
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

</html>
