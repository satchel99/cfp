<?php


session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";


$message = $_POST["message"];
echo $_SESSION["username"];
if (isset($_SESSION["username"])) {
$us_name = $_SESSON["username"];
// Create connection



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "UPDATE logchat SET ChatContent = concat(ChatContent, '\n" . $message . "') WHERE username = '" . $_SESSION["username"] .  "'";
//echo $sql;


if ($conn->query($sql) === TRUE) {
			echo ", Your Message: '" . $message ."' Was Sent!";
			//echo $sql;
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






$conn->close();








}
else {
echo "You need to login first";
}













?>


