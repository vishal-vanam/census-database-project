<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
	$eo = $_POST["eo"];
	
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "UPDATE individuals I,ethnics E SET I.eid = E.eid where E.edesc = '".$eo."'";

if ($conn->multi_query($sql) === TRUE) {
  echo"new records updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<a href="endpage.html">The End</a><br>
<a href="game.html" style="green">Other Query</a><br>
</body>
</html>