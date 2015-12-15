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

if($db->connect_errno){
    die('Connectfailed['.$db->connect-error.']');
}
else echo "<p> Connection sucessful</p>";


/*$email = $_POST["email"];
$password = $_POST["password"];
echo "you're logged in " . $email;*/

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['enter'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    }
    else
    {
// Define $username and $password
        $email=$_POST['email'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect($address, $root, "");
// To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysqli_real_escape_string($email);
        $password = mysqli_real_escape_string($password);
// Selecting Database
        $db = mysqli_select_db('hr1300777', $connection);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($db,"select * from logins where password='$password' AND username='$username'", $connection);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: author.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection
    }
}

echo $error;


























