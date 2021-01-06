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
    <div class="container">
        <div class="py-5">
            <img src="images/doctors.png" alt="" width="200px">
            <br><br>
            <h1>DOCTORS</h1>
            <br>
            <p class="lead" style="width: 75%; display: inline-block;">WE IN INDIA ONLY PRAY FOR TWO PEOPLE ONE IS GOD
                AND THE OTHER IS DOCTOR,BUT WE BELIEVE
                BOTH ARE ONE.</p>
            <br>
            <h4 style="text-align:left"> KNOW US :</h4>
            <br>
            <p>Our motto <strong>PATIENT FIRST</strong> has been so motivating and the friendly and peaceful
                atmosphere that we establish has been our key feature to success.We welcome the
                patients with abright smile that tell them that<strong> WE ARE HERE FOR YOU</strong> have
                been soothening the mental condition of the patients and that is where our half of the treatment is
                done, rest is taken care by our professionals.</p>
            <br><br><br><br>
            <h2>Come Meet Our Experts</h2>
        </div>
    </div>
    <div class="doctors-container">
        <div class=" wrap2" style="width: 90%; display: inline-block;">
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Dileep</h4>
                <p class="classified">Chairman</p>
                <p class="classified1">MPhil Clinical Neurology, PGIBAMS (RCI LICENSED) PhD Clinical Neurology
                    (Scholar),Netherlands
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Bhaskar</h4>
                <p class="classified">Chairman</p>
                <p class="classified1">MPhil Clinical Cardiology, PGIBAMS (RCI LICENSED) PhD Clinical Cardiology
                    (Scholar),USA
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Kasi</h4>
                <p class="classified">Chairman</p>
                <p class="classified1">MPhil Clinical Nephrology, PGIBAMS (RCI LICENSED) PhD Clinical Nephrology
                    (Scholar),Canada
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Hemanth</h4>
                <p class="classified">Senior Doctor</p>
                <p class="classified1">MPhil Clinical Orthopaedics, PGIBAMS (RCI LICENSED) PhD Clinical Orthopaedics
                    (Scholar),China
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Lokesh</h4>
                <p class="classified">Senior Doctor</p>
                <p class="classified1">MPhil Clinical Obstetrics, PGIBAMS (RCI LICENSED) PhD Clinical Obstetrics
                    (Scholar),Netherlands
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Naveen</h4>
                <p class="classified">Doctor</p>
                <p class="classified1">MPhil Clinical Radiology, PGIBAMS (RCI LICENSED) PhD Clinical Radiology
                    (Scholar),USA
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
            <div id="example1">
                <div>
                    <img src="images/icons/doctor-avatar.png" alt="" width="70px" style="padding-bottom: 10px;">
                </div>
                <h4 class="h4">Mr.Khana</h4>
                <p class="classified">Doctor</p>
                <p class="classified1">MPhil Clinical Urology , PGIBAMS (RCI LICENSED) PhD Clinical Urology
                    (Scholar),Canada
                </p>
                <a href="appointment.php">
                    <button class="btn btn-outline-primary">BOOK APPOINTMENT</button>
                </a>
            </div>
        </div>
    </div>
    <br>
    <a href="#">
        <button class="btn btn-secondary">View More</button>
    </a>
    <br><br><br><br>
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