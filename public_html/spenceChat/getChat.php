<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";



$us_name = $_POST["username"];


$doesexist = "yes";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ChatContent FROM logchat WHERE username =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
			// #header('Location: ./loggedin.html');
			echo $row["ChatContent"];
     }
} else {
     echo "Name Not Found";	
}



$conn->close();

?>		
