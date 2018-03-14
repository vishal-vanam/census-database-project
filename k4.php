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

                      $fname = $fileop[0];
                    $mname = $fileop[1];
                    $lname = $fileop[2];
                    $dob = $fileop[3];
					$l1 = $fileop[4];
					$l2 = $fileop[5];
                    $town = $fileop[6];
					$state = $fileop[7];
					$country = $fileop[8];
					$c_d = $fileop[9];
					$eo = $fileop[10];
					$gen = $fileop[11];
					$occ = $fileop[12];
					$rel = $fileop[13];
  $sql= "INSERT INTO individuals(firstname,lastname,dateofbirth,housenumber,area,town,state,country,censusdate) values('" . $fname . "', '" . $lname . "', '" . $dob . "', '" . $l1 . "', '" . $l2 . "', '" . $town . "', '" . $state . "', '" . $country . "', '" . $c_d . "')";
  if(mysqli_query($conn, $sql))
{
echo "<h1> Successful in Updating database </h1>";
header("Location:school.html");
}
else
{
	echo "Error in  creating " . mysqli_error($conn);	
}
  }
fclose($myfile);



?>