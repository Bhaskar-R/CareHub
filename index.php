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
                    <a class="nav-link" href="#careers">CAREERS</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="#donate">DONATE</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="#healthtips">HEALTH TIPS</a>
                </li>
                <li class="nav-list px-2">
                    <a class="nav-link" href="#about-us">ABOUT US</a>
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
                <button class="btn btn-outline-primary dropdown-toggle drop-items" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PROFILE
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Your profile</button>
                    <?php if ($_SESSION['user']=="patient" || $_SESSION['user']=="staff")
                    { 
                        if ($_SESSION['user']=="patient") {?>
                    <a href="includes/images/healthrecord.php"><button class="dropdown-item" type="button">Health records</button></a>
                <?php } ?>
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
    <div id="main-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/doc-img.png" class="mx-auto d-block w-50" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/childrens.jpg" class="mx-auto d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/doctors_treating.jpg" class="mx-auto d-block w-50" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="buttons-section">
        <div class="buttons">
            <a href="appointment.php">BOOK AN APPOINTMENT</a>
            <a href="health_packs.php">BOOK A HEALTH CHECK</a>
            <a href="tokenstatus.php">TOKEN STATUS</a>
        </div>
    </section>
    <br><br><br><br><br><br>
    <div class="img-container" style="background-color :#588da8; padding:50px 0">
        <h2 class="top-dept" style="text-align: center;">OUR TOP DEPARTMENTS</h2>
        <hr>
        <div>
            <div style="display:inline-block;"><img class="icons-img" src="images/icons/cardiology.png" alt=""
                    width="75px">
                <br> CARDIOLOGY</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/neurology.png" alt=""
                    width="75px">
                <br>NEUROLOGY</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/gynaecology.png" alt=""
                    width="75px">
                <br>GYNAECOLOGY</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/obstetrics.png" alt=""
                    width="75px">
                <br>OBSTETRICS</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/orthopaedics.png" alt=""
                    width="75px">
                <br>ORTHOPAEDICS</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/radiology.png" alt=""
                    width="75px">
                <br>RADIOLOGY</div>
            <div style="display: inline-block;"><img class="icons-img" src="images/icons/urology.png" alt=""
                    width="75px">
                <br>UROLOGY</div>
        </div>
    </div>
    <div class="container-fluid " style="background-color: lightblue; padding:50px 0">
        <h2 class="why-reason" style="text-align: center;">WHY CHOOSE RANDOM HOSPITAL</h2>
        <hr>
        <div class="row m-0" style="padding: 40px 0;">
            <div class="col-md-3 px-5 " style="text-align: center;">
                <img src="images/experience.png" style="width: 100px; border-radius: 100%;">
                <h3 style="padding: 10px;">More experience</h3>
                <p>Every year, more than a million people come to Random Hospital for care. Our highly specialized
                    experts
                    are deeply experienced in treating rare and complex conditions.</p>
            </div>
            <div class="col-md-3 px-5" style="text-align: center;">
                <img src="images/answer.png" style="width: 100px; border-radius: 100%;">
                <h3 style="padding: 10px;">The right answers</h3>
                <p>Getting effective treatment depends on identifying the right problem. In a recent study, 88 percent
                    of patients who came to Random Hospital for a second opinion received a new or refined diagnosis.
                </p>
            </div>
            <div class="col-md-3 px-5 " style="text-align: center;">
                <img src="images/seamless.png" style="width: 100px; border-radius: 100%;">
                <h3 style="padding: 10px;">Seamless care</h3>
                <p>At Random Hospital, every aspect of your care is coordinated and teams of experts work together to
                    provide exactly the care you need. What might take months elsewhere can often be done in days here.
                </p>
            </div>
            <div class="col-md-3 px-5" style="text-align: center;">
                <img src="images/experience.png" style="width: 100px; border-radius: 100%;">
                <h3 style="padding: 10px;">Expertise</h3>
                <p>Random Hospital experts are some of the best in the world. In the News & World Report rankings of
                    top hospitals, Random Hospital is consistently ranked among the top hospitals in the nation.</p>
            </div>
        </div>
    </div>
    <div class="covid-research" style="background-color: #588da8; padding: 50px 0;">
        <div style="text-align: center;">
            <img src="images/icons/covid.png" alt="" width="210px" style="padding-bottom:25px;">
            <br>
            <h2 class="covid-res" style="text-align: center;">#COVID RESEARCH</h2>
            <hr>
        </div>
        <div style="text-align: center;">
            <p style="width: 70%; display: inline-block;">
                Random Hospital,as an institution has responded aggressively to the government’s call for a rapid
                response to defeat
                the coronavirus.In a matter of weeks,we has mobilized its entire operation to take on the virus, while
                making critical
                investments in research and participating in leadership roles at the local,state and federal levels.The
                hospital is now conducting at least seven clinical trials into potential treatment options; leading a
                national trial
                into the use of convalescent plasma to treat patients hospitalized with Covid-19; leveraging artificial
                intelligence to
                predict virus hot spots; studying health disparities among various populations; exploring paths toward a
                vaccine; and
                processing thousands of samples a day using serological and molecular tests.
            </p>
            <p style="width: 70%; display: inline-block;">
                “I don’t think it’s an exaggeration to say that if you can think of it, somebody is
                doing it,” said
                Dr.Dileep, an infectious disease specialist and chairman of random’s Covid-19 Research Task Force.
            </p>
            <br><br>
            <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/global-research-on-novel-coronavirus-2019-ncov"
                target="_blank">
                <button type="button" class="btn btn-primary" style="background-color: #00263B">KNOW MORE</button>
            </a>
        </div>
    </div>
    <div class="testimonial" style="background-color: lightblue; padding:50px 0 ; text-align:center;">
        <img src="images/testimonial.png" alt="" width="150px" style="padding-bottom:15px;">
        <h2 style="text-align: center">TESTIMONIALS</h2>
        <hr class="hybrid">
        <h3 style="color:lightslategray; padding: 15px 0 5px;">SUREKHA</h3>
        <div class="testimonial-row">
            <img class="smoking-img" src="images/female.jpg" alt="" style="width:30%; padding-top:10px;">
            <p style="width: 67%; display: inline-block; text-align: left;">My wife Surekha has a habit of smoking
                tobacco. Few months back, she was diagonalized with throat cancer. We come from a
                very poor background with only two bangles. We are daily wage workers. Only property left with us is
                those two bangles.
                we visited many hospitals and was in a situation of selling those two bangles but there was no use, then
                we got to know
                about random hospital, she was appointed and has under gone surgery. And to our miracle those two
                bangles have become
                six bangles and she is back on her feet and now she teases me that she is earning more than me.</p>
        </div>
        <h3 style="color:lightslategray; padding: 15px 0 5px;">BROTHERS</h3>
        <div class="testimonial-row2">
            <img class="heartattack-img" src="images/male.jpg" alt="" style="height: 210px">
            <p style="width: 60%; display: inline-block; text-align: left;">Iam from uganda. my brother has diagnosed a
                cardiac problem.i have visited almost every hospital in uganda.
                doctors told that they have to put a stent in his heart .but looking at the cost for the surgery i have
                got
                a cardiac attack.now after getting to know about random hospital both i and my brother undergone the
                stent
                to our hearts.now i reccommend anyone who wants stents at a low cost.</p>
        </div>
        <p id="careers"></p>
    </div>
    <div style="background-color: #588da8; padding: 50px 0;">
        <img src="images/careers.png" alt="" width="150px" style="padding-bottom:13px ;">
        <h2 style="text-align: center">CAREERS</h2>
        <hr class="hybrid">
        <p style="width: 75%; display: inline-block;">At random Hospital, we don't just work, we also
            learn as we do it and without a doubt have fun doing it! As a result of this, working at random Hospital is
            an experience one looks forward to rather than just a job one reports to every morning. This engaging and
            inclusive culture has boded well for the thousands of happy employees over the years will continue to do so
            for the many others. We will always work as a close knit team that thrives on healthy teamwork and the
            satisfaction of being there for one another. That’s why, when an employee joins us, it is like our family
            has a new addition. We have always believed in the power of the human potential and consider our employees
            to be our greatest assets. It is often said that, "An organisation is only as good as the people it keeps"
            and we believe every word of this. A large part of our success is thanks to our highly motivated workforce
            of 3000 people from diverse personal and professional backgrounds who get together in the medical and
            non-medical fields to effectively run this large network. Medical, Non-Medical Candidates willing to be part
            of our Mission for Vision.</p>
        <br><br>
        <p id="healthtips"></p>
        <a href="careers.php">
            <button type="button" class="btn btn-primary" style="background-color: #00263B">KNOW MORE</button>
        </a>
    </div>
    <div style="background-color:lightblue; padding: 50px 0;">
        <img src="images/healthtips.png" alt="" width="150px" style="padding-bottom: 15px;">
        <h2 style="text-align: center">HEALTH TIPS</h2>
        <hr class="hybrid">
        <div class="row m-0">
            <div class="col-md-4" style="text-align: center;">
                <img src="images/pregnancy.jpg" alt="" width="200px">
                <h5 style="padding-top: 15px;">Why is gaining a healthy amount of weight during pregnancy important?
                </h5>
                <p style="width: 70%;display: inline-block;padding-top: 15px;">Gaining an appropriate amount of weight
                    during pregnancy helps your baby grow to a healthy size. But
                    gaining too much or too little weight may lead to serious health problems for you and your baby.</p>
                <br>
                <a href="https://www.niddk.nih.gov/health-information/weight-management/healthy-eating-physical-activity-for-life/health-tips-for-pregnant-women"
                    target="_blank">
                    <button type="button" class="btn btn-primary" style="background-color: #00263B">KNOW MORE</button>
                </a>
            </div>
            <div class="col-md-4" style=" text-align: center;">
                <img src="images/diabetes.jpg" alt="" width="250px" style="padding-top: 15px;">
                <h5 style="padding-top: 23px;">Who is more likely to develop type 2 diabetes?</h5>
                <p style="width: 70%;display: inline-block;padding-top: 25px;">You are more likely to develop type 2
                    diabetes if you are age 45 or older, have a family history of diabetes, or are overweight. Physical
                    inactivity, race, and certain health problems such as high blood pressure also affect your chance of
                    developing type 2 diabetes.</p>
                <br>
                <a href="https://www.niddk.nih.gov/health-information/diabetes/overview/what-is-diabetes/type-2-diabetes"
                    target="_blank">
                    <button type="button" class="btn btn-primary" style="background-color: #00263B">KNOW MORE</button>
                </a>
            </div>
            <div class="col-md-4" style=" text-align: center;">
                <img src="images/ibs.jpg" alt="" width="205px">
                <h5 style="padding-top: 15px;">What are the symptoms and causes for Irritable Bowel Syndrome (IBS)?</h5>
                <p style="width: 70%;display: inline-block;padding-top: 15px;">The most common symptoms of irritable
                    bowel syndrome (IBS) are pain in your abdomen,changes in your bowel movements. These changes may be
                    diarrhea constipation or both depending on what type
                    of IBS you have.</p>
                <br>
                <a href="https://www.niddk.nih.gov/health-information/digestive-diseases/irritable-bowel-syndrome"
                    target="_blank">
                    <button type="button" class="btn btn-primary" style="background-color: #00263B">KNOW MORE</button>
                </a>
            </div>
        </div>
        <p id="donate"></p>
    </div>
    <div style="background-color: #588da8; padding: 50px 0;">
        <div class="row m-0">
            <div class="col-md-2 col-sm-12">

            </div>
            <div class="col-md-6 col-sm-12" style="display: inline-block; ">
                <h2 style="text-align: center">Donate</h2>
                <img src="images/box.png" alt="" width="100px">
                <p style="padding-top:8px ;">Donating to the causes you care about not only benefits the charities
                    themselves, it can be deeply
                    rewarding for you
                    too. Millions of people give to charity on a regular basis to support causes they believe in, as
                    well as for the
                    positive effect it has on their own lives..</p>
                <br>
                <a href="donate.php" target="_blank">
                    <button type="button" class="btn btn-primary" style="background-color: #00263B">DONATE</button>
                </a>

            </div>
            <div class="col-md-2 col-sm-12" style="display: inline-block;padding : 20px;border:2px solid;">
                <div class="col-md-12 col-sm-12 col-xs-4 no-padding">
                    <h2>
                        <span>60</span>
                        +
                    </h2>
                    <p style="display: inline-block;">LIVER TRANSPLANTS</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-4 no-padding">
                    <h2>
                        <span>75</span>
                        +
                    </h2>
                    <p style="display: inline-block;">HEART SURGERIES</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-4 no-padding">
                    <h2>
                        <span>2000</span>
                        +
                    </h2>
                    <p style="display: inline-block;">LIVES SAVED</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
            </div>
        </div>
        <p id="about-us"></p>
    </div>
    <div style="background-color:lightblue; padding: 50px 0;">
        <h2 style="text-align: center">ABOUT US</h2>
        <hr class="hybrid">
        <p style="width: 68%;display: inline-block">We as a institution believe that being healthy and a proper health
            care to an individual is the basic right
            that one deserves.For some a proper health treatment when required and at times very essential is still
            a dream when it comes to common people.matters become more worse when it come to Developing Nation like
            India which such a huge population and to keep up to the mark of health standards and advanced
            technologies in the sector of health is primarily important.This is the basic motto that our random
            hospital,Our chairman has decided that a affordable health care should be available.
            Starting from our chairman we have well professional and experienced set of people around us and maintain
            that standards in our services as well.</p>

    </div>
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
                <a class="navbar-brand" href="index.php">
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