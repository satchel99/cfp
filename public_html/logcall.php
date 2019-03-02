<?php

session_start();
$servername = "localhost";
$username = "f50jh9o3ngpf";
$password = "Sachal#99";
$dbname = "pramilla";

/*

 voterfirstname : firstname, voterlastname: lastname, votertown:town, voterstreetname: streetname, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments


*/
/*
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
*/

$voterfirstname = "Sachal";
$voterlastname = "Malick";
$votertown = "Minisink";
$voterstreetname = "Jacobs Rd";
$votersigned = "yes";
$voterifnot = "";
$votersupport = "yes";
$voteremail = "sachalmalick@gmail.com";
$callercomments = "hey guys how are you";
$callername = "sachal";
$voterifnot = "";
$votersupport = "yes";
$voteremail = "sachalmalick@gmail.com";
$callercomments = "hey guys how are you";
$callername = "sachal";
$middleinitial = "S";
$housenumber = "264";
$jrsr = "";


    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE RecentVoters set Called = 'yes' where Town = '" . $votertown . "' and streetname = '" . $voterstreetname . "' and FirstName = '" . $voterfirstname . "' and LastName = '" . $voterlastname . "' and MiddleInitial = '" . $middleinitial . "' and jrsr = '" . $jrsr . "' and housenumber = '" . $housenumber . "'";

    if ($conn->query($sql) === TRUE) {
        echo $sql;
        echo "New record created successfully";

    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "INSERT INTO logcalls (callername, votername, votertown, voterphone, voterwillwriteus, voteremail, comments)
VALUES ('". $_SESSION["username"] ."', '". $voterfirstname . " " . $voterlastname ."', '". $votertown ."', '". $votersupport ."', '". $votersupport ."' , '". $voteremail ."' , '". $callercomments ."' )";

if ($conn->query($sql) === TRUE) {
        echo $sql;
        echo "New record created successfully";

    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

$conn->close();

?>