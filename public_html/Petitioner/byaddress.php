<?php
session_start();

$servername = "localhost";
$username = "jezcewsat8gc";
$password = "Sachal#99";
$dbname = "sachal";

$zipcode = $_POST["zipcode"];
$housenumber = $_POST["housenumber"];
$streetname = $_POST["streetname"];
//echo $streetname;


$link = "link";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$rs = '';
$alts = '';

$streetname = 

$sql = "SELECT * FROM NewVoters where zipcode = '" . $zipcode . "' and HouseNumber = '" . $housenumber . "'" . " and streetname = '" . $streetname . "'";
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
        
        $alts = $alts . $row["FirstName"] . "," . $row["MiddleInitial"] . "," . $row["jrsr"] . "," . $row["LastName"] . "," . $row["housenumber"] . "," . $row["streetname"] . "," . $row["city"] . "," . $row["zipcode"] . "," . $row["Town"] . "|";

     
        
        $address = $row["housenumber"] . $row["fractionaladdress"] . $row["Apartment"] . $row["streetdirection"] . " " . $row["streetname"] ." " . $row["poststreet"] . "," . $row["city"] . ", NY " . $row["zipcode"];
        
        
  
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
        
        
        $link =   '
document.getElementById(' . "'" . 'survey' . "'" . ').removeAttribute('."'".'hidden'."'" . ');
window.location.href = ' . "'" . '#survey' . "'" . ';
setupSurvey(walkarr[' . $count . ']);';
        
        
	       $count = $count + 1;
            $rs = $rs . "<tr> <td> " . $party . '</td> <td> <a onclick = "' . $link . '">' . $firstname . " </a> </td> <td> " . $lastname . "</td> <td> " . $row["Town"] . "</td> <td>" . $address . "</td></tr>";
    
 
}

}else {
    echo "0 results";
    echo $sql;
    echo "streetname is " . $streetname;
}

echo $rs . "</table>?" . $alts;
$conn->close();

?>          

	
