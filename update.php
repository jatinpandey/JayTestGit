<?php

$lat = $_POST['lat'];


$connection = mysql_connect("localhost", "root");
if(!$connection)
	die("Conneciton failed :".mysql_error());


$db_select = mysql_select_db("BikeMap", $connection);
if(!$db_select)
	die("Could not select database : ".mysql_error());

$query = "DELETE FROM markers WHERE latitude='$lat'";

if(!mysql_query($query))
	die("Could not make the query ".mysql_error());


?>