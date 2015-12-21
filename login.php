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


session_start(); // Starting Session

$error=''; // Variable To Store Error Message


    //check to ensure fields are not empty or null
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Email or Password is invalid";
            echo "<br>";
            echo "<a href='index.php'>" . "Click here to try again" . "</a>";
        }

        htmlentities("<script>");
// Define $username and $password
        $email = $_POST['email'];
        $password = $_POST['password'];

// To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);

// SQL query to fetch information of registerd users and finds user match.
        $query = "select * from logins where pword='".$password."' AND email='".$email."'";
        $result = $db->query($query);
        if(isset($result)){
            $rows = $result->fetch_array();

            //  while () {
            if (count($rows)> 0) {

                $_SESSION['login_user'] = $email; // Initializing Session
                header("location: authors.php"); // Redirecting To Other Page
            } else {
                $error = "Email or Password is invalid";
                echo "<a href='index.php'>" . "Click here to try again" . "</a>";

            }
            $result->close();
        }
        else{
            echo "no results";
        }

       // }
    }


echo $error;


?>