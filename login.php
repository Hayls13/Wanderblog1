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

if($db->connect_errno){
    die('Connectfailed['.$db->connect-error.']');
}
else echo "<p> Connection sucessful</p>";


$email = $_POST["email"];
$pword = $_POST["pword"];
echo "you're logged in " . $email;

$sql_query = "SELECT * FROM logins WHERE email = '.$email.'";
$result = $db->query($sql_query);
print_r($result);

while($row = $result->fetch_array()){
    while($row = $result->fetch_array()){
        echo "Hello user" . $row['email'];
    }
}
$result->close();
    $db->close();
?>