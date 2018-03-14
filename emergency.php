<!DOCTYPE html>
<html>
<body>


<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "census";
	$town = $_POST["town"];	
	
	
	//Create Connection
	$conn = new
	mysqli($servername ,$username ,$password ,$dbname);
	//Check Connection
	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}
	//database change
	$sql = "use census;";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error changing database: " . $conn->error;
}
	//sql query
	$sql = "select h.hdesc from hospital h where h.town='".$town."'";
	$result = $conn->query($sql);
echo"Hospitals are: <br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>".$row["hdesc"]. "<br>";
    }
} else {
    echo "0 results";
}
	
	
	
	
	
	
	$conn->close();
?>
</body>
</html>