<?php

session_start();

include './dbconnection.php';




$us_name = $_POST["username"];
$pw = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];



$doesexist = "yes";


$sql = "SELECT password FROM userinfo WHERE username =" . "'" . $us_name . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 if ($row["password"] === md5($pw)) {
			// #header('Location: ./loggedin.html');
			$lowercase_name = strtolower($us_name);
 			$_SESSION["username"] = $lowercase_name;
			echo "<META http-equiv=‘refresh’ content=‘0;URL=./user-login.html'>";
			echo '<script> window.location.href = "./user-login.html"</script>';
			echo "login successful";
			header('Location: ./user-login.html');

			
		 }
		 else {
header('Location: ./login.html');		 
		 }
     }
} else {
     header('Location: ./login.html');
}



$conn->close();

?>		
