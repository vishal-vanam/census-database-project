<!DOCTYPE html>
<html>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";

	$firstname = $_POST["firstname"];	
	$lastname = $_POST["lastname"];	
	$dob = $_POST["dob"];	
	$eo = $_POST["eo"];
	$gender = $_POST["gen"];
	$occ = $_POST["occ"];	
	$c_d = $_POST["c_d"];	
	$rel = $_POST["rel"];	
	$l1 = $_POST["l1"];
	$l2 = $_POST["l2"];
	$town = $_POST["town"];
	$state = $_POST["state"];	
	$country = $_POST["country"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql1 = "INSERT INTO individuals(firstname,lastname,dateofbirth,oid,rid,gid,eid,housenumber,area,town,state,country,censusdate) values('" . $firstname . "', '" . $lastname . "', '" . $dob . "', '".$occ."','".$rel."','".$gender."','".$eo."','" . $l1 . "', '" . $l2 . "', '" . $town . "', '" . $state . "', '" . $country . "', '" . $c_d . "')";

if ($conn->multi_query($sql1) === TRUE)
{
    echo"new records successfully loaded";
} 

$conn->close();
?>
<a href="endpage.html">The End</a><br>
<a href="game.html" style="green">Other Query</a><br>
</body>
</html>
