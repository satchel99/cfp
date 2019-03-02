<?php


session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$us_name = $_POST["VoterID"];
$pw = $_POST["password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT VoterID FROM login WHERE VoterID =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "that username already exists, please go back and choose another one";
} else {
echo "working" . $us_name;
$sql = "INSERT INTO login (VoterID, Password)
VALUES (" . "'" . $us_name . "'" . "," . "'" . $pw . "'" . ")";
}

if ($conn->query($sql) === TRUE) {
 echo "<META http-equiv=‘refresh’ content=‘0;URL=./login.html'>";
                        echo '<script> window.location.href = "./voterLogin.html"</script>';
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();




?>


