<!DOCTYPE html>
<html>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$dob = $_POST["dob"];
$occ = $_POST["occ"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    $sql1="update individuals set oid= '".$occ."' where firstname='".$firstname."'";
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
