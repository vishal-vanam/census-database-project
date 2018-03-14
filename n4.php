<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
	$rel = $_POST["rel"];	
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE individuals I,religion R SET I.rid = R.rid where R.rdesc='".$rel."'";
if ($conn->multi_query($sql) === TRUE) {
  header("Location:m5.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
