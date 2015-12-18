<!DOCTYPE HTML>


<link rel="stylesheet" href="style.css">
<title>Wanderblog</title>
<head>
<link rel="stylesheet" href="/bootstrap/bootstrap/css/bootstrap.min.css">
<script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="advhead"> Adventures </h1>
<div id = "advmenu">
<ul>
    <li>filter by highest vote</li>
    <li><a href="index.php">Home</a></li>
    <!--when click script an action that will sort from highest to lowest votes-->
    <li><form action="adventures.php">
            Search Adventures:
            <input type="search" name="search">
            <input type="submit">
        </form>
    </li>
</ul>
</div>



</body>

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
} else {
    echo "<p> Connection successful</p>";
}


//query to find all adventures in db
echo '<div id ="advresults">';
$sql_query = "SELECT * FROM adventure";
$result = $db->query($sql_query);


//query to find all images in db
$sqlimage  = "SELECT adventureAddress FROM photo";
$imageresult1 = $db->query($sqlimage);


while( $imageoutput = $imageresult1->fetch_array()){
   $photo = $row['adventureAddress'];
}

//prints out all adventures found in query
while($row = $result->fetch_array()){
    $title = $row['title'];
    echo "<a href='adventureinfo.php'>". $title . "</a>";
    echo "<div id='photos''>" . $photo . "</div>";

}

$result->close();

echo '</div>';



/*click search button
    SELECT * FROM adventures WHERE title/description LIKE '%$input%'
        try ajax live results if not new page for results*/

?>

    <style> #photos {size: 300px;} </style>
</div>