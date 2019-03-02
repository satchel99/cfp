<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign";

$user = "smalick";
//$numview = $_POST["num"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Address, phone FROM phonebank WHERE Address = 'ROSENDALE' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())) {
            if (strcmp($row["Address"], "ROSENDALE") == 0) {
                echo "true";
                }
          }
}
else {
    echo "0 results";
}

$conn->close();

