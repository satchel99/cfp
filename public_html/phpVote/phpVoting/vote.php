<?php


session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$us_name = $_SESSION["username"];
$vote = $_POST["vote"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login WHERE VoterID =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		 if (strcmp($row["Vote"],'') == 0) {
		 $conn->close();
             
             $sql = "UPDATE login SET Vote = '" . $vote . "' WHERE VoterID =" . "'" . $us_name . "'";
             echo $sql; 
             
             
             $conn = new mysqli($servername, $username, $password, $dbname); 
            // Check connection
            if ($conn->query($sql) === TRUE) {
                echo "Successfully voted";
            } 
             
            else {
                echo "problem";
            }  
            
            }
            
            else {
             echo 'You already Voted';
		 }
             /*
         
		 else {
             echo 'You already Voted' . $row["Vote"] . ".." . strcmp($row["Vote"],'' . ();
		 }
         } */
} }

else {
echo "Invalid Username " . $us_name . $_SESSION["username"];
}



$conn->close();

?>


