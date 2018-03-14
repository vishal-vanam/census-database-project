<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
	$occ = $_POST["occ"];	
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE individuals I,occupation O SET I.oid = O.oid where O.odesc='".$occ."'";
if ($conn->multi_query($sql) === TRUE) {
      header("Location:m3.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</body>
</html>
