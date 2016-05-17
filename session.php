<?php
include('login.php');
$address = "br-cdbr-azure-south-a.cloudapp.net";
$root = "hr1300777";
$connection = mysqli_connect($address, $root, "");

// Selecting Database
$db = mysqli_select_db( $connection, $root);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($db,"select email from logins where email='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
    mysqli_close($connection); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}
?>