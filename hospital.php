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
                    $town = $fileop[1];
                    
  $sql= " Insert into hospital(hdesc,town) values ('$name','$town')";
  if(mysqli_query($conn, $sql))
{
echo "<h1> Successful in Updating database </h1>";
header("Location:mall.html");
}
else
{
	echo "Error in  creating " . mysqli_error($conn);	
}
  }
fclose($myfile);



?>