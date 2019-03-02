<?php
session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$zipcode = $_POST["zipcode"];
$target = $_POST["target"];
$street = $_POST["streetname"];
$party = $_POST["party"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$rs = '';

$sql = "SELECT * FROM RecentVoters where Reached = '' and zipcode = '" . $zipcode . "' and streetname = '" . $street . "' and VoterStatus = 'Active' and Party = '" . $party . "' ORDER by housenumber LIMIT " . $target;

if ($party == 'ALL') {
$sql = "SELECT * FROM RecentVoters where Reached = '' and zipcode = '" . $zipcode . "' and streetname = '" . $street . "' and VoterStatus = 'Active' ORDER by housenumber ASC, Apartment ASC LIMIT " . $target;

}

else if ($party == 'Both') {
$sql = "SELECT * FROM RecentVoters where Reached = '' and zipcode = '" . $zipcode . "' and streetname = '" . $street . "' and VoterStatus = 'Active' and (Party = 'BLK' or Party = 'DEM') ORDER by housenumber ASC, Apartment ASC LIMIT " . $target;

}

else if ($party == 'Targeted') {
$sql = "SELECT * FROM RecentVoters where Reached = '' and zipcode = '" . $zipcode . "' and streetname = '" . $street . "' and VoterStatus = 'Active' and Party = 'DEM' and (VotingHistory LIKE '%2014 Primary Election%' OR VotingHistory LIKE '%Primary Election 2014%') ORDER by housenumber ASC, Apartment ASC LIMIT " . $target;

}



//echo $sql;
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        

	       $count = $count + 1;
            $rs = $rs . $row["FirstName"] . "," . $row["MiddleInitial"] . "," . $row["jrsr"] . "," . $row["LastName"] . "," . $row["housenumber"] . "," . $row["streetname"] . "," . $row["city"] . "," . $row["zipcode"] . "," . $row["Town"] . "," . $row["PhoneNumber"] . "," . $row["Apartment"] . "," . $row["Party"] . "|";
     
} 
}else {
    echo "0 results";
}

echo $rs;
$conn->close();

?>          

	
