<?php

/*
  $sql = "INSERT INTO register VALUES ('$firstname','$lastname', '$email', '$password', '$usertype');
 if ($result = $db->query($sql)){
  echo "<p> Registration sent for verification</p>";

*/

if(empty($_POST) === false){
    $required_fields = array('username','pword','pword_again','first_name','email');
    echo '<pre>', print_r($_POST,true),'</pre>';
}



?>

<h1>Register</h1>

<form action="" method=""post>
    <ul>
        <li>
            Username*:<br>
            <input type="text" name="username">
        </li>

        <li>Password*: <br>
            <input type="pword" name="pword">
        </li>
        <li>Password again*: <br>
            <input type="pword" name="pword_again">
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


