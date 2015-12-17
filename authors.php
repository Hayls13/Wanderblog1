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

$location = "SELECT country FROM logins WHERE  .  $login_session . = ".email."";
$locationr = $db->query($location);

?>

<div id="bio">
    <!--placeholder for profile image if used-->
    <img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=300%C3%97300&w=300&h=300">
    <h3>Name: </h3><?php echo "<h2>" . $login_session . "<h2>"; ?>
    <h3>Location: </h3><?php echo $locationr; ?>
    <h3>Description: </h3>
    <h3>Past Adventures: </h3>
    <h3><a href="logout.php">Logout</a></h3>

</div>

<div id="adv">

</div>

