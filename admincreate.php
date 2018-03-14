<!DOCTYPE html>
<html>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";

	$admin = $_GET["admin"];	
	$pswd = $_GET["pswd"];	


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO admin(adminname,passwd) values('" . $admin . "', '" . $pswd . "')";
if ($conn->multi_query($sql) === TRUE) {
    header("Location:adminsignup.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
