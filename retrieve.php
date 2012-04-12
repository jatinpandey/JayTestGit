<?php

$connection = mysql_connect("localhost", "root");
if(!$connection)
	die("Connection Failed : ".mysql_error());

$db_select = mysql_select_db("BikeMap", $connection);
if(!$db_select)
	die("Could not connect to the selected database");

$query = "SELECT * FROM markers";

$result = mysql_query($query, $connection);

if(!$result)
	die("Could not compelete the query".mysql_error());

$data = array();

while($row = mysql_fetch_row($result))
	$data[] = $row;


echo json_encode($data);

?>