<?php
session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$user = $_SESSION["username"];
$party = $_POST["party"];
$town = $_POST["town"];
$list = $_POST["list"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($list == 'Targeted') {
$sql = "SELECT * FROM RecentVoters WHERE VoterStatus = 'Active' and Called != 'yes' and PhoneNumber != '' and Party = '" . $party . "' and Town = '" . $town . "' and (VotingHistory LIKE '%2014 Primary Election%' OR VotingHistory LIKE '%Primary Election 2014%') limit 1";
}

else if ($list == 'Seniors') {

$sql = "SELECT * FROM RecentVoters WHERE VoterStatus = 'Active' and Called != 'yes' and PhoneNumber != '' and Party = '" . $party . "' and Town = '" . $town . "' and (DOB / 10000) < 1954 limit 1";


}

else if ($list == 'TargetedSeniors') {

$sql = "SELECT * FROM RecentVoters WHERE VoterStatus = 'Active' and Called != 'yes' and PhoneNumber != '' and Party = '" . $party . "' and Town = '" . $town . "' and (DOB / 10000) < 1954 and (VotingHistory LIKE '%2014 Primary Election%' OR VotingHistory LIKE '%Primary Election 2014%') limit 1";


}

else {

$sql = "SELECT * FROM RecentVoters WHERE VoterStatus = 'Active' and Called != 'yes' and PhoneNumber != '' and Party = '" . $party . "' and Town = '" . $town . "' limit 1";

}


$alts = '';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())) {
           $alts = $alts . $row["FirstName"] . "," . $row["MiddleInitial"] . "," . $row["jrsr"] . "," . $row["LastName"] . "," . $row["housenumber"] . "," . $row["streetname"] . "," . $row["city"] . "," . $row["zipcode"] . "," . $row["Town"] . "," . $row["PhoneNumber"];
              
        }
    
        echo $alts;
          }
else {
    echo "0 results";
}

$conn->close();

?>


