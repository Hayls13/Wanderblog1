<?php


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



    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['userType'])) {
        $error = "Please fill in all fields";
        echo $error;
    }


htmlentities("<script>");



//set up variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$userType = $_POST['userType'];


        $email = stripslashes($email);
        $password = stripslashes($password);
        $fname = stripslashes($fname);
        $lname = stripslashes($lname);

$query = "INSERT INTO register(First_Name,Last_Name, email, pword, userType)
              VALUES ($fname, $lname, $email, $password, $userType)";
$result = $db->query($query);



while($row = $result->fetch_array()){
    echo "your information has been registered, you will be verified shortly";
}










