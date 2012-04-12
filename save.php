<?php


$lat = $_POST['lat'];
$lng = $_POST['lng'];

$connection = mysql_connect("localhost", "root");
if(!$connection)
{
  die("Unable to connect : " . mysql_error());
}

$db_selected = mysql_select_db("BikeMap", $connection);
if(!db_selected)
{
  die('Database not selected : ' . mysql_error());
}


$query = "INSERT INTO markers ".
          " (latitude, longitude) ".
          "VALUES ('$lat', '$lng')";


if(!mysql_query($query, $connection)) 
{
  die("Cannot complete the queue". mysql_error());
}

echo 1;

?>