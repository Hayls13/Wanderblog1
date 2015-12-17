<!DOCTYPE HTML>
<html lang="en">

<link rel="stylesheet" href="style.css">


<?php
$login_session = $_SESSION['login_user'];

?>

<div id="bio">
    <!--placeholder for profile image if used-->
    <img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=300%C3%97300&w=300&h=300">
    <h3>Name: </h3><?php echo "<h3>" . $login_session . "<h3>"; ?>
    <h3>Location: </h3>
    <h3>Description: </h3>
    <h3><a href="logout.php">Logout</a></h3>

</div>

<div id="adv">

</div>

