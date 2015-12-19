<?php

/*
  $sql = "INSERT INTO register VALUES ('$firstname','$lastname', '$email', '$password', '$usertype');
 if ($result = $db->query($sql)){
  echo "<p> Registration sent for verification</p>";

*/

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
echo "start session";

$error=''; // Variable To Store Error Message

    if (isset($_POST['email']) && isset($_POST['password'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
        echo "<br>";
        echo "<a href='index.php'>" . "Click here to try again" . "</a>";
    }


//if (empty($_POST['username']) || empty($_POST['password'])) {
//$error = "Email or Password is invalid";


//if(empty($_POST) === false){
//    $required_fields = array('username','pword','pword_again','first_name','email');
//    echo ;
//}



?>





