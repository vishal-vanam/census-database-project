
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2 = "select * from Occupation O, individuals I where O.odesc = 'lawyer' and I.oid=O.oid";
$result2=mysqli_query($conn,$sql2);
  $rowcount2=mysqli_num_rows($result2);
  
$sql3 = "select * from Occupation O, individuals I where odesc = 'engineer' and I.oid=O.oid";
$result3=mysqli_query($conn,$sql3);
  $rowcount3=mysqli_num_rows($result3);
  

$sql4 = "select * from Occupation O, individuals I where odesc = 'Doctor' and I.oid=O.oid";
$result4=mysqli_query($conn,$sql4);
  $rowcount4=mysqli_num_rows($result4);
  
  $sql5 = "select * from Occupation O, individuals I where odesc = 'student' and I.oid=O.oid";
$result5=mysqli_query($conn,$sql5);
  $rowcount5=mysqli_num_rows($result5);
  
  $sql6 = "select * from Occupation O, individuals I where odesc = 'politician' and I.oid=O.oid";
$result6=mysqli_query($conn,$sql6);
  $rowcount6=mysqli_num_rows($result6);
  
  $sql7 = "select * from Occupation O, individuals I where odesc = 'businessman' and I.oid=O.oid";
$result7=mysqli_query($conn,$sql7);
  $rowcount7=mysqli_num_rows($result7);
 	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_free_result($result4);
    mysqli_free_result($result5);
	mysqli_free_result($result6);
	mysqli_free_result($result7);
$conn->close();
      echo" $rowcount2, $rowcount3, $rowcount4, $rowcount5, $rowcount6, $rowcount7";
?><html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	 function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['work', ' per 100'],
          ['Doctor',  <?php echo"$rowcount4" ?> ],
          ['Engineer',      <?php echo"$rowcount3" ?>],
          ['Lawyer',  <?php echo"$rowcount2" ?>],
		  ['Student',  <?php echo"$rowcount5" ?>],
		  ['Politician',  <?php echo"$rowcount6" ?>],
		  ['Businessman',  <?php echo"$rowcount7" ?>]
        ]);

        var options = {
          title: 'Occupations Percentile'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	     	 
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
