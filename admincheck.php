<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname= "census";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//using database
$sql = "USE $dname";
if (mysqli_query($conn, $sql)) {
    echo "Connected to database successfully<br>";
} else {
    echo "Error in connection to database: " . mysqli_error($conn);
}
$admin_name = ("$_GET[admin]");
$password =("$_GET[pswd]");
 $sql1=" SELECT adminname,passwd FROM admin Where adminname = '$admin_name' and passwd = '$password'";
  
$result = mysqli_query($conn, $sql1);
$num_rows = mysqli_num_rows($result);
  
  if( $num_rows > 0)
  {
 
        header("Location:p3.html");
     
      } 
  
  else 
  {
	  echo " Error in Credentials" ;
  }
 
    

?>s