<?php
//include ('session.php');

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

    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Email or Password is invalid";
        }


// Define $username and $password
        $email = $_POST['email'];
        $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);
        //$email = mysqli_real_escape_string($email);
        //$password = mysqli__real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($db, "select * from logins where password='$password' AND email='$email'");
        echo $query;
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $email; // Initializing Session
            header("location: authors.php"); // Redirecting To Other Page
        } else {
            $error = "Email or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection

    }


echo $error;


?>