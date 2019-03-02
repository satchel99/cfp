<?php


session_start();

include './dbconnection.php';

$us_name = $_POST["username"];
$pw = $_POST["password"];
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$email = $_POST["email"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username FROM userinfo WHERE username =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "that username already exists, please go back and choose another one";
} else {
echo "working" . $us_name;
$sql = "INSERT INTO userinfo (username, Firstname, Lastname, Email, password, points)
VALUES (" . "'" . $us_name . "'" . "," . "'" . $Firstname . "'" . "," . "'" . $Lastname . "'" . "," . "'" . $email . "'" . ",". "'" . $pw . "', '0' )";
}

if ($conn->query($sql) === TRUE) {
 echo "<META http-equiv=‘refresh’ content=‘0;URL=./login.html'>";
                        echo '<script> window.location.href = "./login.html"</script>';
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();

















?>


