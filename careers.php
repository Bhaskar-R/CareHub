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
                        <button class="dropdown-item" type="button">Your profile</button>
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
    <br><br><br>
    <div class="container">
        <div class="py-5">
            <img src="images/careers.png" alt="" width="200px">
            <br><br>
            <h1>CAREERS</h1>
            <br>
            <p class="lead">THE BEST WAY TO BUILD YOUR FUTURE IS TO CREATE IT.</p>
            <p style="float:right;">-Abrahim lincon</p>
            <br><br>
            <h3>WHY JOIN RANDOM HOSPITALS?</h3>
            <br>
            <p style="font-family:verdana">The engaging and inclusive culture has boded well for the thousands of
                happy
                employees over the years and will continue to do so for the many others.
                We always work as a close-knit team that thrives on healthy teamwork and the satisfaction of being
                there
                for one another.
                That’s why, when an employee joins us, it is like our family has a new addition. We have always
                believed
                in the power of human potential and consider our employees to be our greatest assets.
                It is often said that "An organisation is only as good as the people it keeps" and we believe every
                word
                of this.
                A large part of our success is thanks to our highly motivated workforce of 1000 people from diverse
                personal and professional backgrounds who get together in the medical
                and non-medical fields to effectively run this large hospital.</p>
        </div>
        <h3> LATEST OPENINGS</h3>
        <br>
        <div class="classified-container">
            <div class=" wrap2">
                <div id="example2">
                    <h4 class="h4">Deputy Manager</h4>
                    <p class="classified">NUEROLOGY</p>
                    <a href="contact-us.php">
                        <button class="btn btn-outline-primary">SUBMIT </button>
                    </a>
                </div>
                <div id="example2">
                    <h4 class="h4">Lab Technician</h4>
                    <p class="classified">Blood Testing Lab</p>
                    <a href="contact-us.php">
                        <button class="btn btn-outline-primary">SUBMIT </button>
                    </a>
                </div>
                <div id="example2">
                    <h4 class="h4">Chief Doctor </h4>
                    <p class="classified">PHYSCOLOGY</p>
                    <a href="contact-us.php">
                        <button class="btn btn-outline-primary">SUBMIT </button>
                    </a>
                </div>
                <div id="example2">
                    <h4 class="h4">Assistant Surgeon</h4>
                    <p class="classified">ORTHOPAEDICS</p>
                    <a href="contact-us.php">
                        <button class="btn btn-outline-primary">SUBMIT </button>
                    </a>
                </div>
                <div id="example2">
                    <h4 class="h4">HOD </h4>
                    <p class="classified">NUEROLOGY</p>
                    <a href="contact-us.php">
                        <button class="btn btn-outline-primary">SUBMIT </button>
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div style="background-color:#2b3645; padding: 25px 0 25px;">
        <div class="row m-0">
            <div class="col-1"></div>
            <div class="col-md-3 col-sm-12" style="text-align: left; display: inline-block;">
                <br><br><br>
                <img src="images/png/001-facebook.png" alt="" width="30px">
                <img src="images/png/005-instagram.png" alt="" width="30px">
                <img src="images/png/007-twitter.png" alt="" width="30px">
                <img src="images/png/002-youtube.png" alt="" width="30px">

            </div>
            <div class="col-5"></div>
            <div class="col-md-3 col-sm-12">
                <p style="color: aliceblue; text-align: left;font-size: 14px; "><span style="font-size: 20px;">Random
                        Hospital</span> <br>Wadakanda,OMR, <br>Kelambakkam,Chennai 603123 <br>Phone - 9848022338</p>
            </div>
        </div>
        <br>
        <div class="row m-0">
            <div class="col-md-8 col-sm-12">
                <p style="color: aliceblue;text-align: left; padding: 30px 0 0 40px;">Copyrights &copy; 2020 RANDOM
                    HOSPITAL</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <a class="navbar-brand" href="index.html">
                    <img src="images/hc.png" alt="Hospital-Logo" width=16%>
                    Random Hospital
                </a>
            </div>
        </div>
    </div>
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