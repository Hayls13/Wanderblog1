<!DOCTYPE HTML>


<link rel="stylesheet" href="style.css">
<title>Wanderblog</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="/bootstrap/bootstrap/css/bootstrap.css"></script>
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
            <input type="search" name="googlesearch">
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
    echo "<p> Connection sucessful</p>";
}



echo '<div id ="advresults">';
$sql_query = "SELECT * FROM adventure";
$result = $db->query($sql_query);


while($row = $result->fetch_array()){
    echo "<a href='adventureinfo.php'>". $row['title'] . "</a>";

    // echo "<a href= \"$db[title]\">".$db['title'] . "</a>";
}

echo '</div>';

$result->close();

/*click search button
    SELECT * FROM adventures WHERE title/description LIKE '%$input%'
        try ajax live results if not new page for results*/

?>
</div>