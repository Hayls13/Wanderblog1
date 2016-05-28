<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<?php

?>

<head>
    <meta charset="UTF-8">
    <title>Wanderblog</title>

    <!--CSS and JS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="carousel.js"></script>
    <script src="jquery.js"></script>

</head>
<body>


<div id="header">
<h1>WANDERBLOG</h1>

    <!--top menu-->
<div id="mymenu">
<ul>
    <li><a href="adventures.php">Search</a></li>
    <li><form id="register" action="registerlanding.php" method="post" name="register">
            <button id="registerbtn">Register</button>
        </form></li>
    <li><form action="login.php" id="form" method="post" name="login">
        <input id="email" name="email" placeholder="email" type="text">
        <input id="password" name="password" placeholder="password" type="password">
        <input type="submit" value="enter">
        <span><?php echo $error; ?></span>
    </form></li>
</ul>
</div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="adv1" src="photos/london.JPG" alt="adv1">
    </div>

        <div class="item">
            <img class="adv2" src="photos/cambodia.JPG" alt="adv2">
        </div>

        <div class="item">
            <img class="adv3" src="photos/valencia.jpg" alt="adv3">
        </div>

        <div class="item">
            <img class="adv4" src="photos/turkey.jpg" alt="adv4">
        </div>

        <div class="item">
            <img class="adv5" src="photos/bangkok.JPG" alt="adv5">
        </div>
    </div>


    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    -->
</div>

</body>

<footer>
    <br>
    <p> Website created by Hayley Reid</p>
    <p> 2016 </p>
    <hr>
</footer>
</html>



