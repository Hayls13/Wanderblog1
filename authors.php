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

$location = "SELECT country FROM logins WHERE  email = '".$login_session."'";
$locationr = $db->query($location);

$fname = "SELECT First_Name AND Last_Name FROM logins WHERE  email = '".$login_session."'";
$fnamer = $db->query($fname);

//$location = "SELECT country FROM logins WHERE  email = '".$login_session."'";
//$locationr = $db->query($location);

?>

<div id="bio">
    <!--placeholder for profile image if used-->
    <img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=300%C3%97300&w=300&h=300">


    <?php
    while( $fresult = $rnamer->fetch_array()){
        echo "<h3>Name:" . $result['First_Name']['Last_Name'] ."</h3>";
    }
    $fnamer->close();
    ?>


    <?php
    while( $result = $locationr->fetch_array()){
        echo "<h3>Location:" . $result['country']."</h3>";
    }
    ?>
    <h3>Description: </h3>

    <h3>Past Adventures: </h3>

    <h3><a href="logout.php">Logout</a></h3>

    <?php

    $locationr->close();


    ?>

</div>

<div id="adv">

</div>

