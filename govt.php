<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 = "select * from individuals ";
$result=mysqli_query($conn,$sql1);
  $rowcount1=mysqli_num_rows($result);
$sql = "select * from Occupation O,individuals I where O.odesc = 'government employee' and I.oid=O.oid";
if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Government employers percentage is around %d .\n",$rowcount*100/($rowcount1));
  // Free result set
  mysqli_free_result($result);
  }
$conn->close();
?>
<center>
<br>
<br>
<a href="endpage.html">The End</a><br>
<a href="pre.html" style="green">Other Query</a><br>

</center>
</body>
</html>