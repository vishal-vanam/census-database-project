<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "pro");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fn']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['ln']);

 
// attempt insert query execution
$sql = "INSERT INTO religion (rdesc) VALUES ('$first_name')";
$sql = "INSERT INTO occupation (odesc) VALUES ('$last_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>