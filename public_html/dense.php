<?php
session_start();

$servername = "localhost";
$username = "f50jh9o3ngpf";
$password = "Sachal#99";
$dbname = "pramilla";

$zipcode = $_POST["zipcode"];
$party = $_POST["party"];


$sql = "SELECT distinct zipcode, streetname, count(streetname) FROM `NewVoters` where VoterStatus = 'Active' and Party = '" . $party . "' and zipcode = " . $zipcode . " group by streetname ORDER BY count(streetname) DESC LIMIT 50";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   

$result = $conn->query($sql);
$count = 0;
$rs = '';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            
            $count = $count + 1;
            $rs = $rs . "<tr> <td> " . $count . '</td> <td> <a onclick = "' . "hello" . '">' . $row["streetname"] . " </a> </td> <td> " . $row["count(streetname)"] . "</td> <td> " . "blah" . "</td> <td>" . "blah" . "</td></tr>";    
} 
}else {
    echo "0 results";
}

echo $rs;
$conn->close();

?>          

	
