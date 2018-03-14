<!DOCTYPE html>
<html>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

	$fname = $_POST["fn"];	
	$mname = $_POST["mn"];	
	$lname = $_POST["ln"];	
	$dob = $_POST["dob"];	
	$l1 = $_POST["l1"];	
	$l2 = $_POST["l2"];	
	$town = $_POST["town"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$c_d = $_POST["c_d"];
	$eo = $_POST["eo"];
	$gen = $_POST["gen"];
	$occ= $_POST["occ"];
	$rel = $_POST["rel"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO occupation(odesc) values('" . $occ . "')";



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
<center>
<br>
<br>


<a href="game.html" style="color:blue">Having other queries</a><br><br>
<a href="endpage.html" style="color:blue">End </a>
</center>
</body>
</html>
