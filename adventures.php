<!DOCTYPE HTML>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db= new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

include("db_connect.php");


$sql_query = "SELECT * FROM adventures ";
$result = $db->query($sql_query);

echo $result;

while($row = $result->fetch_array()){
    echo "<p>" . $row['title'] . "</p>";
}


$result->close();
    $db->close();

?>



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
    <li><a href="index.php">Home</a></li>
    <!--when click script an action that will sort from highest to lowest votes-->
    <li><form action="adventures.php">
            Search Adventures:
            <input type="search" name="googlesearch">
            <input type="submit">
        </form>
    </li>
</ul>

<?php


