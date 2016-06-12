<!DOCTYPE HTML>


<link rel="stylesheet" href="style.css" xmlns="http://www.w3.org/1999/html">
<title>Wanderblog</title>
<head>
<link rel="stylesheet" href="/bootstrap/bootstrap/css/bootstrap.min.css">
<script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="advhead">
    <ul>
        <li><h1> ADVENTURES </h1></li>
        <li><a href="index.php">Home</a></li>
    </ul>


<div id = "advmenu">
<ul>
    <!--when click script an action that will sort from highest to lowest votes-->
    <li><form action="adventures.php">
            Search Adventures:
            <input id="search" type="search" name="search" placeholder="Country, Activity, Etc...">
            <input type="submit">
        </form></li>
    <li>filter by highest vote</li>

</ul>
</div>
</div>



<div id="adventures">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db= new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

if ($db->connect_errno) {
    die('connection failed :'.$db->connect_error);
}
/* else {
    echo "<p> Connection successful</p>";
} */


//query to find all adventures in db

$sql_query = "SELECT * FROM adventure";
$result = $db->query($sql_query);


//query to find all images in db
$sqlimage  = "SELECT adventureAddress FROM photo";
$imageresult1 = $db->query($sqlimage);

echo "<div id ='advresults'>";
//prints out all adventures found in query
while($row = $result->fetch_array()){
    while( $imageoutput = $imageresult1->fetch_array()){
        $photo = $imageoutput['adventureAddress'];
        $title = $row['title'];
     echo "<div id='photos'>" . "<a href='adventureinfo.php'>" . $title . "<img src=". $photo . "/>" .  "</a>" . "</div>";

    }
}
echo "</div>";
$result->close();
$imageresult1->close();






/*click search button
    SELECT * FROM adventures WHERE title/description LIKE '%$input%'
        try ajax live results if not new page for results*/

?>


</div>

</body>