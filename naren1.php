<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airbase";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$password = $_POST["passwd"];
$gender = $_POST["gender"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO tregistration(firstname,lastname,email,password,gender) values('" . $fname . "', '" . $lname . "', '" . $mail . "', '" . $password . "', '" . $gender . "', '" . $eo . "')";
if ($conn->multi_query($sql) === TRUE) {
    header("Location:m2.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
