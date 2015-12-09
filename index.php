<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wanderblog</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <?PHP include 'db_connect.php';?>
</head>
<body>

<div id="header">
<h2>WANDERBLOG</h2>

<ul id="mymenu">
    <li><a href="adventures.php">Search</a></li>
    <li><a href="login.php">Login</a></li>
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

<?PHP
$query = "SELECT * FROM logins WHERE 1";
$result = $db->query($query);
    if(!$result){
        die('Nothing in result: ');
    }
echo db_connecterrno
    ?>
</body>
</html>


<?php
