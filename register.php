<?php

/*
  $sql = "INSERT INTO register VALUES ('$firstname','$lastname', '$email', '$password', '$usertype');
 if ($result = $db->query($sql)){
  echo "<p> Registration sent for verification</p>";

*/


$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

if ($db->connect_errno) {
    die('connection failed :'.$db->connect_error);
}
else {
    echo "<p> Connection sucessful</p>";
}

//if (empty($_POST['username']) || empty($_POST['password'])) {
//$error = "Email or Password is invalid";


//if(empty($_POST) === false){
//    $required_fields = array('username','pword','pword_again','first_name','email');
//    echo ;
//}



?>

<!--<h1>Register</h1>

<form action="" method=""post>
    <ul>
        <li>Password*: <br>
            <input type="password" name="password">
        </li>
        <li>Password again*: <br>
            <input type="password" name="password_again">
        </li>
        <li>
            First Name*: <br>
            <input type="text" name="First_Name"
        </li>
        <li>
            Last Name: <br>
            <input type="text" name="Last_Name"
        </li>
        <li>
            Email*: <br>
            <input type="text" name="email"
        </li>
        <li>
            <input type="submit" value="Register"
        </li>
    </ul>

</form>
-->

