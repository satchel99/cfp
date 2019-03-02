<?php

session_start();
$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

/*

 voterfirstname : firstname, voterlastname: lastname, votertown:town, voterstreetname: streetname, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments



$voterfirstname = "Emma";
$voterlastname = "Cummings";
$age = "20";
$gender = "F";
$votersigned = "yes";
$voterifnot = "yes";
$votersupport = "yes";
$voteremail = "yes";
$callercomments = "yes";
$callername = "sachal";
$city = "Goshen";
$areacode = "845";
$phone = "304-3989";
*/
$voterfirstname = $_POST["voterfirstname"];
$voterlastname = $_POST["voterlastname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$votersigned = $_POST["votersigned"];
$voterifnot = $_POST["voterifnot"];
$votersupport = $_POST["votersupportpramilla"];
$voteremail = $_POST["voteremail"];
$callercomments = $_POST["volunteercomments"];
$callername = $_SESSION["username"];
$city = $_POST["city"];
$areacode = $_POST["areacode"];
$phone = $_POST["phone"];



    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE absentee set num = 1 where Address LIKE '" . $city. "' and FirstName LIKE '" . $voterfirstname . "' and LastName LIKE '" . $voterlastname . "' and phone LIKE '" . $phone . "'";

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

$sql = "INSERT INTO logcalls (callername, votername, votertown, voterphone, voterwillwriteus, voteremail, comments, lawnsign)
VALUES ('". $_SESSION["username"] ."', '". $voterfirstname . " " . $voterlastname ."', '". $city ."', '". $phone ."', '". $votersupport ."' , '". $voteremail ."' , '". $callercomments ."', '" . $voterifnot . "')";

if ($conn->query($sql) === TRUE) {
        echo $sql;
        echo "New record created successfully";

    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

$conn->close();
    

?>