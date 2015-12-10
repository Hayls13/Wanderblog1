<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wanderblog</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="bootstrap/bootstrap.min.js"></script>
    <script src="JS/actions.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div id="abc">

<div id="header">
<h2>WANDERBLOG</h2>

<ul id="mymenu">
    <li><a href="adventures.php">Search</a></li>
    <li><button id="popup" onclick="div_show()">Login</button></li>

    <div id="popuplogin">

        <form action="authors.php" id="form" method="post" name="login">
            <img id="close" src="https://placeholdit.imgix.net/~text?txtsize=6&txt=50%C3%9750&w=50&h=50" onclick="div_hide()">
            <h2>Login</h2>
            <hr>
            <input id="email" name="email" placeholder="email" type="text">
            <input id="pword" name="pword" placeholder="password" type="text">
            <a href="actions.js: check_empty()" id="submit">Enter</a>
        </form>
    </div>
</ul>
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
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="Chania">
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="Chania">
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="Chania">
        </div>

        <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=100&txt=1200%C3%97800&w=1200&h=800" alt="Chania">
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
</div>
<?php

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

if($db->connect_errno){
    die('Connectfailed['.$db->connect-error.']');
}
else echo "<p> Connection sucessful</p>";

?>

</body>
</html>



