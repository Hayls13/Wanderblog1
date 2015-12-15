<!DOCTYPE HTML>
<html lang="en">

<link rel="stylesheet" href="style.css">

<!--if login == successful
            load page-->
<?php
include('session.php');
?>

<div id="bio">
    <!--placeholder for profile image if used-->
    <img src="https://placeholdit.imgix.net/~text?txtsize=28&txt=300%C3%97300&w=300&h=300">
    <h3>Name: </h3><i><?php echo $login_session; ?></i>
    <h3>Location: </h3>
    <h3>Description: </h3>

</div>

<div id="adv">

</div>

