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



</form>
-->

