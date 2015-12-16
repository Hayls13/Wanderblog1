<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<?php

?>

<head>
    <meta charset="UTF-8">
    <title>Wanderblog</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/carousel.js"></script>


</head>
<body>


<div id="header">
<h2>WANDERBLOG</h2>

<ul id="mymenu">
    <li><button id="popup" >Login</button></li>
    <li><a href="adventures.php">Search</a></li>
    <li><button id="popup" >Register</button></li>
</ul>
</div>

    <div id="popup">

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
            <form>
                    <input type="radio" name="usertype" value="reader" checked> Reader
                    <input type="radio" name="usertype" value="author"> Author
                </form>
            <br><input type="submit" value="Submit">
        </form>
    </div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="adv1">
            <a href="#">Click here to view this adventure</a>
            <a href="#">Click here to see more adventures</a>
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="adv2">
            <a href="#">Click here to view this adventure</a>
            <a href="#">Click here to see more adventures</a>
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="adv3">
            <a href="#">Click here to view this adventure</a>
            <a href="#">Click here to see more adventures</a>
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="adv4">
            <a href="#">Click here to view this adventure</a>
            <a href="#">Click here to see more adventures</a>
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="adv5">
            <a href="#">Click here to view this adventure</a>
            <a href="#">Click here to see more adventures</a>
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



