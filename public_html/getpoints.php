<?php

session_start();
include './dbconnection.php';


// Create connection
 $sql = "SELECT points FROM userinfo WHERE username = " .  "'" . $_SESSION["username"] . "'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["points"];	

    }
} 
 	else {
    echo "0 results";
}


$conn->close();

?>       
