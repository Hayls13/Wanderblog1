<!DOCTYPE HTML>
<html lang="en">

<link rel="stylesheet" href="style.css">


<?php
include ("login.php");
$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

$login_session = $_SESSION['login_user'];

$name = "SELECT First_Name, Last_Name FROM logins WHERE  email = '".$login_session."'";
$namer = $db->query($name);

$location = "SELECT country FROM logins WHERE  email = '".$login_session."'";
$locationr = $db->query($location);

$usertype = "SELECT userType FROM logins WHERE  email = '".$login_session."'";
$usertyper = $db->query($usertype);

$pastAdv = "SELECT userID, adventureID  FROM logins, adventure  JOIN  logins ON adventure.userID=logins.userID WHERE email = '".$login_session."'";
$pastAdvr = $db->query($pastAdv);
echo $pastAdvr;

?>

<div id="bio">
    <!--placeholder for profile image if used-->
    <img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=300%C3%97300&w=300&h=300">


    <?php
    while( $resultn = $namer->fetch_array()){
        echo "<h3>Name: " . $resultn['First_Name'] . " " . $resultn[ 'Last_Name'] ."</h3>";
    }




    while( $result = $locationr->fetch_array()){
        echo "<h3>Location: " . $result['country']."</h3>";
    }



    while( $resultu = $usertyper->fetch_array()){
        echo "<h3>User Type: " . $resultu['userType']."</h3>";
    }



    while( $resultp = $pastAdvr->fetch_array()){
        echo "<h3>Past Adventures: " . $resultp['adventureID']."</h3>";
    }
    ?>


    <h3><a href="logout.php">Logout</a></h3>

    <?php



    $locationr->close();
    $resultn->close();
    $usertyper->close();
    $pastAdvr->close();


    ?>


