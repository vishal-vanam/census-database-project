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

$sql ="use pro";
if(mysqli_query($conn, $sql))
{
}
else
{
	echo "Error using database " . mysqli_error($conn);
	
}
$url =$_POST["CSV"];
$myfile = fopen($url, "r") or die("Unable to open file!");
while(($fileop = fgetcsv($myfile , ",")) != false )
{

					$name = $fileop[0];
					$age = $fileop[1];
					$dob = $fileop[2];
  $sql= " Insert into dev values ('$name','$age','$dob')";
  if(mysqli_query($conn, $sql))
{
echo "<h1> Successful in Updating database </h1>";
header("Location:game.html");
}
else
{
	echo "Error in  creating " . mysqli_error($conn);	
}
  }
fclose($myfile);
?>