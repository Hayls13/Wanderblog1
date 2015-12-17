<?php

session_start();

if(session_destroy()){
    echo "You're now logged out";
    header("Location: index.php");
}

?>








