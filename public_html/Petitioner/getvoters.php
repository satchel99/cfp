<?php
session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

//$firstname = $_GET["firstname"];
//$lastname = $_GET["lastname"];


$link = "link";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$rs = '';
$sql = "SELECT * FROM RecentVoters where FirstName = '" . $firstname . "' and LastName = '" . $lastname . "'";
//echo $sql;
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
           /*$link = 'function() {
    
    document.getElementById("SurvFirstName").innerHTML = "' .$row["FirstName"]  . '";
    document.getElementById("SurvLastName").innerHTML = "' . $row["LastName"] . '";
    document.getElementById("SurvTown").innerHTML = "'  . $row["Town"] .  '";
    document.getElementById("SurvStreetName").innerHTML = "'  . $row["StreetName"] . '";
    
    document.getElementById("survey").removeAttribute("hidden");
    window.location.href = "#survey";
    
}';*/
     $address = $row["housenumber"] . $row["fractionaladdress"] . $row["Apartment"] . $row["streetdirection"] . " " . $row["streetname"] ." " . $row["poststreet"] . "," . $row["city"] . ", NY " . $row["zipcode"];
        
        if ($row["VoterStatus"] == "PURGED") {
            $rs = $rs . "<tr> <td> " . $count . '</td>' . ' <td> ' .$row["FirstName"] . "</td> <td> " . $row["LastName"] . "</td> <td> " . "VOTER WAS PURGED" . "</td> <td>" . "contact sachalmalick@gmail.com" . "</td></tr>";
        }
        
        else {
        
        if ($row["Reached"] == "yes") {
        
                    $rs = $rs . "<tr> <td> " . $count . '</td>' . ' <td> ' .$row["FirstName"] . "</td> <td> " . $row["LastName"] . "</td> <td> " . "VOTER HAS SIGNED" . "</td> <td>" . "contact sachalmalick@gmail.com" . "</td></tr>";

        
        }
       else {
        
        $party = $row["Party"];
        if ($party == "OTH") {
            $party = $row["PartyIfOther"];
        }
        $firstname = $row["FirstName"];
        if ($row["MiddleInitial"] !== "") {
            $firstname = $row["FirstName"] . " " . $row["MiddleInitial"] . ".";
        }
        $lastname = $row["LastName"];
        if ($row["jrsr"] !== "") {
            $lastname = $row["LastName"] . " " . $row["jrsr"] ;
        }
        
     $alts = $alts . $row["FirstName"] . "," . $row["MiddleInitial"] . "," . $row["jrsr"] . "," . $row["LastName"] . "," . $row["housenumber"] . "," . $row["streetname"] . "," . $row["city"] . "," . $row["zipcode"] . "," . $row["Town"] . "|";

        
        $link =   '
document.getElementById(' . "'" . 'survey' . "'" . ').removeAttribute('."'".'hidden'."'" . ');
window.location.href = ' . "'" . '#survey' . "'" . ';
setupSurvey(walkarr[' . $count . ']);';
        
        
	       $count = $count + 1;
            $rs = $rs . "<tr> <td> " . $party . '</td> <td> <a onclick = "' . $link . '">' . $firstname . " </a> </td> <td> " . $lastname . "</td> <td> " . $row["Town"] . "</td> <td>" . $address . "</td></tr>";
            
            }
            
            }
} 
}else {
    echo "0 results";
}

echo $rs . "</table>?" . $alts;
$conn->close();

?>          

	
