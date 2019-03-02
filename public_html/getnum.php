<?php
session_start();
include './dbconnection.php';

$user = "smalick";
//$numview = $_POST["num"];


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

