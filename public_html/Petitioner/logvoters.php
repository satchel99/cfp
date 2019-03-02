<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

/*

 voterfirstname : firstname, voterlastname: lastname, votertown:town, voterstreetname: streetname, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments


*/

$voterfirstname = $_POST["voterfirstname"];
$voterlastname = $_POST["voterlastname"];
$votertown = $_POST["votertown"];
$voterstreetname = $_POST["voterstreetname"];
$votersigned = $_POST["votersigned"];
$voterifnot = $_POST["voterifnot"];
$votersupport = $_POST["votersupportpramilla"];
$voteremail = $_POST["voteremail"];
$callercomments = $_POST["volunteercomments"];
$callername = $_SESSION["username"];
$middleinitial = $_POST["middleinitial"];
$housenumber = $_POST["housenumber"];
$jrsr = $_POST["jrsr"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO logvoters (VoterFirstName, VoterLastName, VoterTown, VoterStreetName, VoterSigned, VoterIfNot, VoterSupport, VoterEmail, VolunteerComments,VolunteerName)
VALUES ('". $voterfirstname ."', '". $voterlastname ."', '". $votertown ."', '". $voterstreetname ."', '". $votersigned ."' , '". $voterifnot ."' , '". $votersupport ."', '" . $voteremail . "', '" .$callercomments . "', '" . $callername . "' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if (strcmp($votersigned,"yes") == 0){
    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "UPDATE RecentVoters set Reached = 'yes' where Town = '" . $votertown . "' and streetname = '" . $voterstreetname . "' and FirstName = '" . $voterfirstname . "' and LastName = '" . $voterlastname . "' and MiddleInitial = '" . $middleinitial . "' and jrsr = '" . $jrsr . "' and housenumber = '" . $housenumber . "'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

    
}


?>