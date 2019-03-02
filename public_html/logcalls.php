<?php

session_start();

include './dbconnection.php';


$votername = $_POST["votername"];
$voterphone = $_POST["voterphone"];
$votertown = $_POST["votertown"];
$voterwillwriteus = $_POST["voterwillwriteus"];
$voteremail = $_POST["voteremail"];
$callercomments = $_POST["callercomments"];
$callername = $_SESSION["username"];



$sql = "INSERT INTO logcalls (callername, votername, votertown, voterphone, voterwillwriteus, voteremail, comments, lawnsign)
VALUES ('". $_SESSION["username"] ."', '". $voterfirstname . " " . $voterlastname ."', '". $city ."', '". $phone ."', '". $votersupport ."' , '". $voteremail ."' , '". $callercomments ."', '" . $voterifnot . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>