<?php

session_start();
include './dbconnection.php';



 $sql = "SELECT points FROM userinfo WHERE username = " .  "'" . $_SESSION["username"] . "'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $_SESSION["username"] . "<h2>";

    }
} 
 	else {
    echo "0 results";
}


$conn->close();

?>       
