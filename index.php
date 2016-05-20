<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<?php

?>

<head>
    <meta charset="UTF-8">
    <title>Wanderblog</title>

    <!--CSS and JS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="/carousel.js"></script>
    <script src="/jquery.js"></script>


</head>
<body>


<div id="header">
<h2>WANDERBLOG</h2>

    <!--top menu-->
<ul id="mymenu">
    <li><button id="popup" >Login</button></li>
    <li><a href="adventures.php">Search</a></li>
    <li><button id="popup" >Register</button></li>
</ul>
</div>

    <div id="popup">
        <!--code for the popout login box-->
        <form action="login.php" id="form" method="post" name="login">
            <img id="close" src="https://placeholdit.imgix.net/~text?txtsize=6&txt=50%C3%9750&w=50&h=50" onclick="div.hide()">
            <h2>Login</h2>
            <hr>
            <input id="email" name="email" placeholder="email" type="text">
            <input id="password" name="password" placeholder="password" type="password">
            <br><input type="submit" value="enter">
            <span><?php echo $error; ?></span>
        </form>
    </div>


    <div id="popupr">
        <!--code for the popout register box-->
        <form action="register.php" id="form" method="post" name="login">
            <img id="close" src="https://placeholdit.imgix.net/~text?txtsize=6&txt=50%C3%9750&w=50&h=50" onclick="div.hide()">
            <h2>Register</h2>
            <hr>
            <label for="fname" class="ui-hidden-accessible">First name:</label>
            <input id="fname" name="fname" placeholder="first name" type="text"><br>
            <label for="lname" class="ui-hidden-accessible">Last name:</label>
            <input id="lname" name="lname" placeholder="last name" type="text"><br>
            <label for="email" class="ui-hidden-accessible">Email address:</label>
            <input id="email" name="email" placeholder="email" type="text"><br>
            <label for="pswd" class="ui-hidden-accessible">Password:</label>
            <input id="pword" name="pword" placeholder="password" type="password">
                <br>
                    <label class="reader">
                        <input type="radio" name="usertype" value="reader" checked> Reader
                    </label>
                    <label class="author">
                        <input type="radio" name="usertype" value="author"> Author
                    </label>

            <br><input type="submit" value="enter">
        </form>
    </div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="adv1" src="photos/london.JPG" alt="adv1">
            <div class="container">
            <a href="#">Click here to view this adventure</a>
        </div>
    </div>

        <div class="item">
            <img class="adv2" src="photos/cambodia.JPG" alt="adv2">
                 <div class="container">
                     <a href="#">Click here to view this adventure</a>
                 </div>
        </div>

        <div class="item">
            <img class="adv3" src="photos/valencia.jpg" alt="adv3">
                <div class="container">
                  <a href="#">Click here to view this adventure</a>
                 </div>
        </div>

        <div class="item">
            <img class="adv4" src="photos/turkey.jpg" alt="adv4">
                <div class="container">
                 <a href="#">Click here to view this adventure</a>
                </div>
        </div>

        <div class="item">
            <img class="adv5" src="photos/bangkok.JPG" alt="adv5">
                <div class="container">
                   <a href="#">Click here to view this adventure</a>
                </div>
        </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

</body>
</html>



