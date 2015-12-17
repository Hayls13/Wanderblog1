<?php
include ('session.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);
if ($db->connect_errno) {
    die('connection failed :'.$db->connect_error);
}
else {
    echo "<p> Connection sucessful</p>";
}

session_start(); // Starting Session
echo "<p> starting session</p>";
$error=''; // Variable To Store Error Message


echo $error;


?>