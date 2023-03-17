<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaotic Minds</title>
    <link rel="shortcut icon" type="image" href="Icon/logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- bootstrap link -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font -->

    <!--CSS FOR REVIEWS SECTION-->
    <style>
        .img-text {
            width: 100%;
            height: 300px;
            display: block;
            text-align: center;
            padding: 40% 5%;
            background: #262626;
            color: #fff;
            border-radius: 15px;
        }

        .img-text h2 {
            font-size: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .img-text p {
            font-size: 14px;
        }

        .single-box {
            position: relative;
            margin-bottom: 30px;
        }

        .img-area {
            position: absolute;
            width: 100px;
            height: 100px;
            border: 5px solid #3fff;
            overflow: hidden;
            top: 15px;
            left: 125px;
            border-radius: 50%;
        }

        .img-area img {
            width: 100%;
        }

        .carousel-indicators {
            left: 0;
            top: auto;
            bottom: -50px;
        }

        .carousel-indicators li {
            background: #000;
            border-radius: 50%;
            width: 15px;
            height: 15px;
        }

        .carousel-indicators .active {
            background: #161863;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_SESSION['status'])) {
        echo "<script>alert('Table Booked Successfully!')</script>";
        unset($_SESSION['status']);
    }
    if (isset($_SESSION['contact_status'])) {
        echo "<script>alert('Message Sent Successfully!')</script>";
        unset($_SESSION['contact_status']);
    }
    ?>

    <div id="cantainer-background">
        <nav class="navbar navbar-expand-md" id="navbar-color">
            <!-- Brand -->
            <a class="navbar-brand" href="#" id="logo-color"><i><img src="Images/logo.png" alt=""></i>Chaotic Minds</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span><i><img src="Icon/logo.png" alt="" id="menu-color"></i></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="first">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Snapshots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            <div class="content">
                <h1>DELICIOUS OF</h1>
                <h2>PARADISE!</h2>
                <div id="btn1"><a href="book.php"><button>BOOK NOW</button></a></div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="best-card">
            <div class="row">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img class="card-image-top" src="Images/food.jpg" alt="">
                        <div class="card-img-overlay">
                            <h1 class="card-title">INDIAN</h1>
                            <p class="card-text">Relish the Tastes of India!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img class="card-image-top" src="Images/chowmin.jpg" alt="">
                        <div class="card-img-overlay">
                            <h1 class="card-title">CHINESE</h1>
                            <p class="card-text">The Flavor of Chinese Culture!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img class="card-image-top" src="Images/pasta.jpg" alt="" height="230px">
                        <div class="card-img-overlay">
                            <h1 class="card-title">ITALIAN</h1>
                            <p class="card-text">The Home of Pasta, Pizza and Pastries!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HISTORY -->

    <div class="container" style="margin-top: 50px;">
        <div class="card-content">
            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <h1 style="text-align: center;">TASTE AT ITS BEST</h1>
                    <p class="history"
                        style="text-align: center; line-height: 30px; letter-spacing: 3px; margin-top: 30px;">We have
                        served the tastes of royalty since 1985. Our traditional menu is definitely going to create
                        chaos in your mind while you decide which cuisine to choose! Once you try our multi-national
                        cuisine, you'll never skip the next occasional meal at our restaurant. Here, you'll get whatever
                        you want, be it Italian, Chinese, or Indian itself! The smell is going to attract you to our
                        multi-national cuisine spot! Our exotic ambience will allow you to visit this place over and
                        over again. Thus, we welcome you all to create chaos in your minds in this Chaotic Mind!</p>
                    <p class="history"
                        style="text-align: center; line-height: 30px; letter-spacing: 3px; margin-top: 30px;">Even if
                        your family members have different culinary preferences, the main course may certainly have a
                        combination of all of your favorites. Therefore, grab a range of flavors here. You may choose
                        from a variety of delicious meals, including Indian, Chinese, Mexican, Italian, Thai, and
                        numerous others. The beverage corner and the dessert corner are indeed examples of some
                        distinctive areas in our restaurant. We provide our patrons with the option to add any flavors
                        they like to their drinks. Also, we let them choose the flavors for their desserts!</p>
                    <p class="history"
                        style="text-align: center; line-height: 30px; letter-spacing: 3px; margin-top: 30px;">Be hasty!
                        Come as soon as you can to the Chaotic Minds restaurant. As we allow you to choose from the
                        tantalizing cuisine, whether it be the refreshments, the confections, or the main meal, we are
                        willing to deal with your mind chaos.</p>

                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img class="card-image-top" src="Images/img.jpg" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="banner">
            <h1>EXCITING OFFERS!<span class="change-content"></span></h1>
            <h2>ON YOUR FIRST VISIT</h2>
            <h2>20% OFF</h2>
            <div id="btn2"><a href="book.php"><button>Book Now</button></a></div>
        </div>
    </div>

    <!--REVIEWS SECTION-->
    <div>
        <h1 style="text-align: center; margin-top: 3%;"><b>SEE WHAT OUR PATRONS SAY!</b></h1>
    </div>
    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/trisha.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>TRISHA CHATTERJEE</h2>
                                            <p>Without a doubt, this restaurant serves the best Italian food in town. I
                                                had a good supper here. Wonderful hospitality and service.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/anvi.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>ANVI DHAR</h2>
                                            <p>Incredible experience I had while eating dinner here. The ambiance in
                                                this venue is incredible, and the food is also top-notch.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/arnav.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>ARNAV SARKAR</h2>
                                            <p>The dessert section of this restaurant was my personal favourite. I
                                                enjoyed eating my personalised smoothie with all of my preferred
                                                toppings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/aniket.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>ANIKET CHAKRABORTY</h2>
                                            <p>I tried both Chinese and kebab food, and I can honestly say that today's
                                                lunch was the best one I've ever eaten..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/amyara.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>AMYARA DAS</h2>
                                            <p>In relation to the price, the food was plentiful and absolutely tasty!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="Images/akash.jpg" alt=""></div>
                                        <div class="img-text">
                                            <h2>AKASH MUKHERJEE</h2>
                                            <p>I am really eager to return here for my next occasional supper. The
                                                atmosphere has a pleasant energy. And the cuisine is simply outstanding!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12  text-center">
                    <div class="icon">
                        <span><a href="https://www.facebook.com/aminiarestaurant/"><i
                                    class="fa-brands fa-square-facebook fa-3x"></i></a></span>
                        <span><a href="https://www.instagram.com/AminiaRestaurant/"><i
                                    class="fa-brands fa-square-instagram fa-3x"></i></a></span>
                        <span><a href="https://twitter.com/aminia_mughlai"><i
                                    class="fa-brands fa-square-twitter fa-3x"></i></a></span>
                        <span><a href="https://in.linkedin.com/company/aminiarestaurant"><i
                                    class="fa-brands fa-linkedin fa-3x"></i></a></span>
                    </div>
                    <div class="foot">
                        <a href="home.php">Home</a>
                        <a href="gallery.php">Snapshots</a>
                        <a href="menu.php">Menu</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                    <div class="copyright">
                        &copy; Copyright Chaotic Minds. All Rights Reserved
                    </div>
                </div>

            </div>
        </div>
    </footer>

</body>

</html>