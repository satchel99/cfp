<?php

/* $con = mysql_connect('localhost','root','root');
mysql_select_db('studyswap');*/

// Create connection
$conn = new mysqli('localhost','jezcewsat8gc','Sachal#99', 'sachal');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>