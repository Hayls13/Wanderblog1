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
echo "start session ";

$error=''; // Variable To Store Error Message


if(isset($_POST['enter'])) {
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Please fill in all fields";
        echo $error;
    }
}

//set up variables
$fname = htmlentities($_POST['fname']);
$lname = htmlentities($_POST['lname']);
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['pword']);
//$userType = $_POST['userType'];


        $email = stripslashes($email);
        $password = stripslashes($password);
        $fname = stripslashes($fname);
        $lname = stripslashes($lname);

$query = "INSERT INTO register(First_Name,Last_Name, email, pword)
              VALUES ('$fname', '$lname', '$email', '$password')";
$result = $db->query($query);
echo " query ";

if(isset($result)) {
    $rows = $result->fetch_array();
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['pword'] = $password;

    if (count($rows) > 0) {
        echo "your information has been registered, you will be verified shortly";
    } else {
        echo "error";
    }
}


$result->close();
?>







