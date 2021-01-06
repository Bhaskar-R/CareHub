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
                    <button class="dropdown-item" type="button">Token status</button>
                    <a href=""><button class="dropdown-item" type="button">Change Password</button></a>
                    <a href="logout.php"><button class="dropdown-item" type="button">Sign out</button></a>
                </div>
            </div>
       <?php  } ?>
        </div>
    </nav>
    <br><br><br>
    <div class="contactus-container">
        <section class="contactus">
            <div class="wrap">
                <div class="contactform">
                    <div class="contactformlt">
                        <div class="con-getintouch">
                            <h1>Get in Touch</h1>
                            <p>You can contact us any way that is convenient for you 24/7 Email or Phone. You can also
                                use
                                aquick contact form below
                                or visit our office personally.</p>
                            <p>We would be happy to answer your questions.</p>
                        </div>
                        <form>
                            <div class="contactCont">
                                <label>First Name</label>
                                <input class="firstNme" type="text">
                            </div>
                            <div class="contactCont">
                                <label>Last Name</label>
                                <input class="firstNme" type="text">
                            </div>
                            <div class="contactCont2">
                                <label>Phone</label>
                                <input class="firstNme1" type="text">
                            </div>
                            <div class="messageArea">
                                <label>Message</label>
                                <textarea></textarea>
                            </div>
                            <div class="submitBtn">
                                <a href="mailto:rhhospitalsoffical@gmail.com">Submit</a>
                            </div>
                        </form>
                    </div>
                    <div class="contactformRt">
                        <div class="addHead">
                            <h3>Address</h3>
                            <div class="title-line"></div>
                            <div class="addCont">
                                <span><img src="images/location.png"></span>
                                <p>Wadakanda OMR,</p>
                                <p>Kelambakkam Chennai,</p>
                                <p>Tamil Nadu 603123</p>
                            </div>
                        </div>
                        <div class="addHead">
                            <h3>Phones</h3>
                            <div class="title-line"></div>
                            <div class="addCont">
                                <span><img src="images/mobile.png"></span>
                                <p><span style="padding-left: 9px;"> 9848022338</span></p>
                            </div>
                        </div>
                        <div class="addHead">
                            <h3>E-mail</h3>
                            <div class="title-line"></div>
                            <div class="addCont">
                                <span><img src="images/mail.png"></span>
                                <p><a class="mail" style="padding-left: 9px;"
                                        href="mailto:rhhospitalsofficial@gmail.com">rhhospitalsofficial@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="addHead">
                            <h3>Get Social</h3>
                            <div class="title-line"></div>
                            <div class="addCont">
                                <ul>
                                    <li>
                                        <a style="padding:0 5px" href="#"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a style="padding:0 5px" href=" #"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a style="padding:0 5px" href=" #"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a style="padding:0 5px" href=" #"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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