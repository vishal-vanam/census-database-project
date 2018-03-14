<?php

//$file=fopen("C:\Users\iiitg\Desktop\pharmacy\usr_pswd.csv", "r");

$target_file = basename($_FILES["uploadFile"]["name"]);
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has ";

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pharmacydb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
		}		
		$sql = "LOAD DATA LOCAL INFILE '".$target_file."' INTO TABLE usr_pswd ".
		"FIELDS TERMINATED BY ',' ".
		"ENCLOSED BY '\"' ".
		"LINES TERMINATED BY '\r\n' ".
		"IGNORE 1 LINES ;";
		
		if(!mysqli_query($conn, $sql)) echo " NOT ";
		echo "been uploaded";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    mysqli_close($conn);
/*echo "<br>";
echo fgets($file);

fclose($file);
*/

?>