<!DOCTYPE HTML>
<html lang="en">

<title>Wanderblog</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="JS/actions.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Adventures </h1>
<ul>
    <li>filter by highest vote</li>
    <!--when click script an action that will sort from highest to lowest votes-->
    <li><form action="adventures.php">
            Search Adventures:
            <input type="search" name="googlesearch">
            <input type="submit">
        </form>
    </li>
</ul>

<?php
