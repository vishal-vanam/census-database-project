<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
	$gender = $_POST["gender"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE individuals I,gender G  SET I.gid = G.gid where G.gdesc='".$gender."'";
if ($conn->multi_query($sql) === TRUE) {
  header("Location:m4.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
