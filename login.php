<?php

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


$email = $_POST["email"];
$pword = $_POST["password"];
echo "you're logged in " . $email . $pword;

?>