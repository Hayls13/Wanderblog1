<!DOCTYPE HTML>
<html lang="en">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<?php

error_reporting(E_ALL);

include ("adventures.php");

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);


$sql_query = "SELECT * FROM adventure";
$result = $db->query($sql_query);


$title = $row['title'];





?>

<?php
while($row = $result->fetch_array()) {
    echo "<h1>" . $title . "</h1>";
}
?>

<div id="advinfo">

</div>