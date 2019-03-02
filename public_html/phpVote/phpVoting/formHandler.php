<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";


$socialSecurityNumber = $_POST["voterid"];
$pw = $_POST["password"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Password FROM login WHERE VoterID =" . "'" . $socialSecurityNumber . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 if ($row["Password"] === $pw) {
			// #header('Location: ./loggedin.html');
			$lowercase_name = strtolower($socialSecurityNumber);
 			$_SESSION["username"] = $lowercase_name;
			echo "<META http-equiv=‘refresh’ content=‘0;URL=./ballot.html'>";
			echo '<script> window.location.href = "./ballot.html"</script>';
			echo "login successful";
			header('Location: ./ballot.html');

			
		 }
		 else {
header('Location: ./voterLogin.html');		 
		 }
     }
} else {
     header('Location: ./voterLogin.html');
}



$conn->close();

?>		
