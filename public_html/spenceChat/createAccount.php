<?php


session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";


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

$sql = "SELECT username FROM loginchat WHERE username =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "that username already exists, please go back and choose another one";
} else {
echo "working" . $us_name;
$sql = "INSERT INTO logchat (username, Firstname, Lastname, Email, password)
VALUES (" . "'" . $us_name . "'" . "," . "'" . $Firstname . "'" . "," . "'" . $Lastname . "'" . "," . "'" . $email . "'" . ",". "'" . $pw . "' )";
echo $sql;
}

if ($conn->query($sql) === TRUE) {
echo "hello";
 echo "<META http-equiv=‘refresh’ content=‘0;URL=./login.html'>";
                        echo '<script> window.location.href = "./login.html"</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();

















?>


