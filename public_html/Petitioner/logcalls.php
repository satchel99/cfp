<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal99";


$votername = $_POST["votername"];
$voterphone = $_POST["voterphone"];
$votertown = $_POST["votertown"];
$voterwillwriteus = $_POST["voterwillwriteus"];
$voteremail = $_POST["voteremail"];
$callercomments = $_POST["callercomments"];
$callername = $_SESSION["username"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO logcalls (callername, votername, votertown, voterphone, voterwillwriteus, voteremail, comments)
VALUES ('". $callername ."', '". $votername ."', '". $votertown ."', '". $voterphone ."', '". $voterwillwriteus ."' , '". $voteremail ."' , '". $callercomments ."' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>