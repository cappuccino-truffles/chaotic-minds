<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaotic Minds</title>
    <link rel="shortcut icon" type="image" href="Icon/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">

    <!--CSS PART-->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main_bg {
            background-image: url(Images/book1.jpg);
            max-width: 1280px;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .form {
            width: 650px;
        }

        .form-text {
            text-align: center;
            margin: 0 0 40px 0;
        }

        .form-text h1 span img {
            display: inline-block;
            margin: 0 10px;
        }

        .form-text h1 {
            color: #fff;
            font-family: 'Volkhov', serif;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .main-form div {
            margin: 10px 10px;
            width: 300px;
            display: inline-block;
        }

        .main-form div input {
            width: 100%;
            font-family: 'Volkhov', serif;
            background: none;
            border: 1px solid #ffca00;
            font-size: 20px;
            color: #fff;
            outline: none;
            padding: 3px 0 3px 10px;
            margin-top: 10px;
        }

        .main-form div span {
            width: 100%;
            font-family: 'Volkhov', serif;
            color: #fff;
            font-size: 25px;
        }

        #submit {
            width: 100%;
            text-align: center;
        }

        #submit input {
            font-family: 'Volkhov', serif;
            width: 200px;
            background-color: yellow !important;
            color: black !important;
            transition: all 0.3s;
        }

        #submit input:hover {
            font-family: 'Volkhov', serif;
            width: 200px;
            background-color: black !important;
            color: #fff !important;
        }

        #submit input:active {
            font-size: 19px;
            background-color: rgb(46, 20, 5) !important;
            color: #fff !important;
        }

        @media screen and (max-width: 710px) {
            .main-form {
                text-align: center;
            }
        }
    </style>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span><img src="Icon/book_now.jpg" alt=""></span>BOOK NOW <span><img src="Icon/book_now.jpg"
                        alt=""></span></h1>
        </div>
        <div class="main-form">
            <form action="php/booking_details.php" method="post">
                <div>
                    <span>FULL NAME: </span>
                    <input type="text" name="t1" id="name" required>
                </div>
                <div>
                    <span>E-MAIL: </span>
                    <input type="email" name="t2" id="mail" required>
                </div>
                <div>
                    <span>PHONE NO.: </span>
                    <input type="tel" pattern="[0-9]{10}" name="t3" id="phone" required>
                </div>
                <div>
                    <span>NO. OF PATRONS: </span>
                    <select name="t4" id="people" required>
                        <option value="">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>

                </div>
                <div>
                    <span>DATE: </span>
                    <input type="date" name="t5" id="date" required>
                </div>
                <div>
                    <span>TIME: </span>
                    <input type="time" name="t6" id="time" required>
                </div>
                <div id="submit">
                    <input type="submit" name="s1" value="SUBMIT" id="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>