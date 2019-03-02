<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign";

$user = $_SESSION["username"];
$town = $_POST["town"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$table = 'finalphonebank';
$indexof = 1;
if ((strcmp("all", $town) != 0) ) {
$sql = "SELECT Firstname, Lastname, Address, Areacode, phone, age, gender FROM finalphonebank";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())) {
            if ((strcmp($row["Address"], $town) == 0) && (strcmp($row["Areacode"],'') != 0)) {
            $gender = "Male";
            if(strcmp($row["gender"],"F") == 0) {
                $gender = "Female";
            }
            $age = (string) $row["age"];
            $age = substr($age,0,4);
            $ageint = (int)$age;
            $ageint = 2016 - $ageint;
            echo $row["Firstname"] . " " . $row["Lastname"] . "<br>" . $row["Address"] . "<br>" . "<a href = 'tel:" . $row["Areacode"] . "-" . $row["phone"] . "'>" . $row["Areacode"] . "-" . $row["phone"] . "</a>" . "<br>" . $gender . " of age " . $ageint;
            break;
            }
            else {
                $indexof++;
            }
        }
          }
else {
    echo "0 results";
}

}
else {
    $table = 'absentee';
    $sql = "SELECT Firstname, Lastname, Address, Areacode, phone, gender, age, num FROM absentee WHERE Areacode != ''";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while(($row = $result->fetch_assoc())) {
            $indexof = $row["num"];
            $gender = "Male";
            if(strcmp($row["gender"],"F") == 0) {
                $gender = "Female";
            }
            $age = "" + $row["age"];
            $age = substr($age,0,4);
            $ageint = (int)$age;
            $ageint = 2016 - $ageint;

            echo $row["Firstname"] . " " . $row["Lastname"] . "<br>" . $row["Address"] . "<br>" . "<a href = 'tel:" . $row["Areacode"] . "-" . $row["phone"] . "'>" . $row["Areacode"] . "-" . $row["phone"] . "</a>" . "<br>" . $gender . " of age " . $ageint;
            break;
        
          }
}
else {
    echo "0 results";
}
    
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE from " . $table . " WHERE num = " . $indexof;

$result = $conn->query($sql);
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SET @num := 0; UPDATE " . $table  ." SET num = @num := (@num+1) ; ALTER TABLE ". $table  ." AUTO_INCREMENT = 1; UPDATE userinfo set points = points + 1 WHERE username = '" . $user . "'";

if (!$conn->multi_query($sql)) {
    echo "Multi query failed: (" . $conn->errno . ") " . $conn->error;
}

do {
    if ($res = $conn->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->free();
    }
} while ($conn->more_results() && $conn->next_result());

$conn->close();

?>

