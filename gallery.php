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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font -->
</head>

<body>
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
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="second">Snapshots</a>
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
    <!--GALLERY IMAGES-->
    <div class="container-fluid">
        <h1 class="text-center p-2" style="color: black; font-family: 'Kanit', sans-serif;">OUR SNAPSHOTS</h1>
        <div class="row">
            <div class="column">
                <img src="Images/res1.jpg" alt="Image">
                <img src="Images/res3.jpg" alt="Image">
                <img src="Images/continental.jpg" alt="Image">
                <img src="Images/res4.jpg" alt="Image">
                <img src="Images/pancakes2.jpg" alt="Image">
            </div>
            <div class="column">
                <img src="Images/des1.jpg" alt="Image">
                <img src="Images/gal6.jpg" alt="Image">
                <img src="Images/thai1.jpg" alt="Image">
                <img src="Images/des2.jpg" alt="Image">
                <img src="Images/pizza.jpg" alt="Image">
            </div>
            <div class="column">
                <img src="Images/butter_chicken2.jpg" alt="Image">
                <img src="Images/kebab3.jpg" alt="Image">
                <img src="Images/sushi.jpg" alt="Image">
                <img src="Images/res2.jpg" alt="Image">
                <img src="Images/meal.jpg" alt="Image">
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12  text-center">
                    <div class="icon">
                        <span><a href="https://www.facebook.com/aminiarestaurant/"><i class="fa-brands fa-square-facebook fa-3x"></i></a></span>
                        <span><a href="https://www.instagram.com/AminiaRestaurant/"><i class="fa-brands fa-square-instagram fa-3x"></i></a></span>
                        <span><a href="https://twitter.com/aminia_mughlai"><i class="fa-brands fa-square-twitter fa-3x"></i></a></span>
                        <span><a href="https://in.linkedin.com/company/aminiarestaurant"><i class="fa-brands fa-linkedin fa-3x"></i></a></span>
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