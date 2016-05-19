<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<?php
?>



<head>
    <title>Wanderblog</title>
        <link rel="stylesheet"  href="login.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <div id="container">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
            <form action="#" autocomplete="on">
                  <h1>Log In</h1>
                  <p>
                      <label for="email" class="email" > Your email </label>
                      <input id="email" name="email" required="required" type="text" placeholder="your email" />
                  </p>
                  <p>
                      <label for="password" class="pword" >Your Password </label>
                      <input id="password" name="password" required="required" type="password" placeholder="..." />
                  </p>
                  <p class="login button">
                      <input type="submit" value="Login" />
                  </p>
                  <p class="change_link">
                      Not a member yet?
                      <a href="#toregister" class="to_register">Join Us</a>
                  </p>
                </form>
        </div>

        <div id="register" class="animate form">
            <form action="#" autocomplete="on">
                <h1> Sign Up </h1>
                <p>
                    <label for="emailS" class="email" >Your Email</label>
                    <input id="emailS" name="emailS" required="required" type="text" placeholder=" Email" />
                </p>
                <p>
                    <label for="FName" class="Fname" >First Name</label>
                    <input id="Fname" name="Fname" required="required" type="text" placeholder=" First Name" />
                </p>
                <p>
                    <label for="LName" class="Lname" >Last Name</label>
                    <input id="Lname" name="Lname" required="required" type="text" placeholder=" Last Name" />
                </p>
                <p>
                    <label for="PwordS" class="PwodS">Password </label>
                    <input id="PwordS" name="PwordS" required="required" type="text" placeholder=" Password" />
                </p>
                <p class="signin button">
                    <input type="submit" value="Sign Up"/>
                </p>

                <p class="change_link">
                    Already a member?
                    <a href="#tologin" class="to_register"> Go and log in </a>
                </p>
            </form>
        </div>

    </div>
    </div>
</body>
























</HTML>
