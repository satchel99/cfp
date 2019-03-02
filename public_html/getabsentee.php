<?php
session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$user = $_SESSION["username"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM absentee where phone != '' and num != 1 limit 1";



$alts = '';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())) {
           $alts = $alts . $row["Firstname"] . "," . "" . "," . "" . "," . $row["Lastname"] . "," . "" . "," . "" . "," . "Age: " . floor(2018 - ($row["age"] / 10000)) . "," . $row["Address"] . "," . "Gender: " . $row["gender"] . "," . $row["Areacode"] . "," . $row["phone"];
              
        }
    
        echo $alts;
          }
else {
    echo "0 results";
}

$conn->close();

?>


