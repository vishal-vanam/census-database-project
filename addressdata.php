<!DOCTYPE html>
<html>
<head>
<title>Page1</title>
<style>
body {margin:0;
   
   background-repeat: no-repeat;
      background-position: bottom;
	  margin-right: 300px;
    background-color: #cccccc;}
	

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 40px;
  text-decoration: none;
  font-size: 17px;
}
.navcore a {
  float: center;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 40px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#push {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	.boxes{
	width:50%;
	float:left;
	}
	.boxes1{
	width:50%;
	float:right;
	}
button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
select,option{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

</style>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>`
<div class="navbar">
  <a href="mail.html">Contact Us</a>
  <a href="usersignup.html">User</a>
  <a href="adminsignup.html">Admin</a>
  <a href="login.html">Home</a>
  
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="content.html">Content</a>
  <a href="service.html">Services</a>
  <a href="data.php">Data</a>
</div>
  <div id="push">
    <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">About&#9776; </span>
</div>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$dob = $_POST["dob"];
$l1 = $_POST["l1"];
$l2 = $_POST["l2"];
$town = $_POST["town"];
$state = $_POST["state"];
$country = $_POST["country"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    $sql1="update individuals set housenumber='".$l1."',area='".$l2."',town='".$town."',state='".$state."',country='".$country."' where firstname='".$firstname."' and lastname='".$lastname."' and dateofbirth='".$dob."'";
if ($conn->multi_query($sql1) === TRUE)
{
    echo"<center><h1>New records successfully updated</h1></center>";
} 
 

$conn->close();
?>
<center><a href="endpage.html"><h1>The End</h1></a>
<a href="game.html" style="green"><h1>Other Query</h1></a><br></center>
</body>
</html>
