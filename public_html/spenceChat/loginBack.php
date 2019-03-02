<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";



$us_name = $_POST["username"];
$pw = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];



$doesexist = "yes";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM logchat WHERE username =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 if ($row["password"] === $pw) {
			// #header('Location: ./loggedin.html');
			$lowercase_name = strtolower($us_name);
 			$_SESSION["username"] = $lowercase_name;
			echo "login successful, Welcome, " . $_SESSION["username"];

			
		 }
		 else {
			echo "incorrect login credentials";		 
		 }
     }
} else {
     echo "error";	
}



$conn->close();

?>		
