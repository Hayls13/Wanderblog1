<?php
?>

<HTML>

<head>
<link rel="stylesheet" type="text/css" href="login.css" />
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
                      <label for="email" class="email" data-icon="u" > Your email </label>
                      <input id="email" name="email" required="required" type="tezt" placeholder="your email" />
                  </p>
                  <p>
                      <label for="password" class="pword" data-icon="p">Your Password </label>
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
                    <label for="emailS" class="email" data-icon="u">Your Email</label>
                    <input id="emailS" name="emailS" required="required" type="text" placeholder=" Email" />
                </p>
                <p>
                    <label for="FName" class="Fname" data-icon="f">First Name</label>
                    <input id="Fname" name="Fname" required="required" type="text" placeholder=" First Name" />
                </p>
                <p>
                    <label for="LName" class="Lname" data-icon="l">Last Name</label>
                    <input id="Lname" name="Lname" required="required" type="text" placeholder=" Last Name" />
                </p>
                <p>
                    <label for="PwordS" class="PwodS" data-icon="p">Password </label>
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
