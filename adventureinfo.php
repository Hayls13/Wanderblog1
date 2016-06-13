<?php

include ("adventures.php");

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);



$title = $row['title'];


echo "test";

echo "<p>" . $title . "</p>";

?>

