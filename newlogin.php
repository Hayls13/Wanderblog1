<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<?php
?>

<script src="popup.js"></script>
<script src="jquery.js"></script>
<link rel="stylesheet" href="login.css"/>

<div class="form" id="popup">
<p id="onclick"> Popup </p>
</div>

<!--onclick popup-->
<div id="logindiv">
    <form class="form" action="#" id="login">
        <h3> Log In </h3>
            <hr/><br/>
                <label>Name: </label>
            <br/>
        <input type="text" id="name" placeholder="name"><br/>
            <label>Email: </label>
            <br/>
        <input type="text" id="email" placeholder="email"><br/>
            <br/>
        <input type="button" id="login" value="Log In"/>
        <input type="button" id="cancel" value="Cancel"/>
    </form>
</div>

<!--register-->
<div id="register">
    <form class="form" action="#" id="register">
        <h3>Register</h3>
        <hr/><br/>
        <label>First Name: <span>*</span></label><br/>
            <input type="text" id="Fname" placeholder="First Name"/><br/>
        <br/>
        <label>Last Name: <span>*</span></label><br/>
            <input type="text" id="Lname" placeholder="Last Name"/><br/>
        <br/>
        <label>Email: <span>*</span></label><br/>
            <input type="text" id="email" placeholder="email"/><br/>
        <br/>
        <label>Password: <span>*</span></label>
        <br/>
            <input type="text" id="password" placeholder="password"/><br/>
        <br/>
        <input type="button" id="registerbtn" value="Register"/>
        <input type="button" id="cancel" value="Cancel"/>
        <br/>

    </form>
</div>






















</HTML>
