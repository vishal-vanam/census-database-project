<!DOCTYPE html>
<html>
<head><title>data</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style></head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="use census";
if(mysqli_query($conn, $sql))
{echo"<center><h1>Individuals table Content</h1></center>";
}
else
{
	echo "Error using database " . mysqli_error($conn);
	
}

$sql = "SELECT * FROM individuals";
$result = $conn->query($sql);
?>
<table>
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Date of Birth</th>
	<th>Occupation</th>
	<th>Religion</th>
	<th>Gender</th>	
	<th>Ethnics</th>
	<th>House Number</th>
	<th>Area</th>
	<th>Town/City</th>
	<th>State</th>
	<th>country</th>
	<th>census date</th>
	
  </tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row =$result->fetch_assoc()) {
		


  echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["dateofbirth"]."</td>
  <td>".$row["oid"]."</td><td>".$row["rid"]."</td><td>".$row["gid"]."</td><td>".$row["eid"]."</td><td>"
  .$row["housenumber"]."</td><td>".$row["area"]."</td><td>".$row["town"]."</td><td>".$row["state"]."</td>
  <td>".$row["country"]."</td><td>".$row["censusdate"]."</td></tr>";

  

   }
}else{echo"0 results";
}
echo"</table>";
$sql1 = "SELECT * from occupation";
$result1 = $conn->query($sql1);
	echo"<h2>Occupation table implies the following:</h2><br>";
if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 =$result1->fetch_assoc()) {

  echo "&nbsp &nbsp<b>".$row1["oid"]."</b> &nbsp -> &nbsp<b>".$row1["odesc"]."</b><br>";
   }
}

$sql2 = "SELECT * from religion";
$result2 = $conn->query($sql2);
	echo"<h2>Religion table implies the following:</h2><br>";
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 =$result2->fetch_assoc()) {

  echo "&nbsp &nbsp<b>".$row2["rid"]."</b> &nbsp -> &nbsp<b>".$row2["rdesc"]."</b><br>";
   }
}

$sql3 = "SELECT * from gender";
$result3 = $conn->query($sql3);
	echo"<h2>Occupation Gender implies the following:</h2><br>";
if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 =$result3->fetch_assoc()) {

  echo "&nbsp &nbsp<b>".$row3["gid"]."</b> &nbsp -> &nbsp<b>".$row3["gdesc"]."</b><br>";
   }
}

$sql4 = "SELECT * from ethnics";
$result4 = $conn->query($sql4);
	echo"<h2>Ethnics table implies the following:</h2><br>";
if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 =$result4->fetch_assoc()) {

  echo "&nbsp &nbsp<b>".$row4["eid"]."</b> &nbsp -> &nbsp<b>".$row4["edesc"]."</b><br>";
   }
}




$conn->close();
?>
</body>
</html>



