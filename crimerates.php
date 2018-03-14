
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2 = "select * from crimedetails where cyear='2017'";
$result2=mysqli_query($conn,$sql2);
  $rowcount2=mysqli_num_rows($result2);
  
$sql3 = "select * from  crimedetails where cyear='2016'";
$result3=mysqli_query($conn,$sql3);
  $rowcount3=mysqli_num_rows($result3);
  

$sql4 = "select * from  crimedetails where cyear='2015'";
$result4=mysqli_query($conn,$sql4);
  $rowcount4=mysqli_num_rows($result4);
  
  $sql5 = "select * from  crimedetails where cyear='2014'";
$result5=mysqli_query($conn,$sql5);
  $rowcount5=mysqli_num_rows($result5);
  
  $sql6 = "select * from  crimedetails where cyear='2013'";
$result6=mysqli_query($conn,$sql6);
  $rowcount6=mysqli_num_rows($result6);
  
  $sql7 = "select * from  crimedetails where cyear='2012'";
$result7=mysqli_query($conn,$sql7);
  $rowcount7=mysqli_num_rows($result7);
  
  $sql8 = "select * from  crimedetails where cyear='2011'";
$result8=mysqli_query($conn,$sql8);
  $rowcount8=mysqli_num_rows($result8);
  
  $sql9 = "select * from  crimedetails where cyear='2010'";
$result9=mysqli_query($conn,$sql9);
  $rowcount9=mysqli_num_rows($result9);
  
  $sql10 = "select * from  crimedetails where cyear='2009'";
$result10=mysqli_query($conn,$sql10);
  $rowcount10=mysqli_num_rows($result10);
  
  $sql11 = "select * from  crimedetails where cyear='2008'";
$result11=mysqli_query($conn,$sql11);
  $rowcount11=mysqli_num_rows($result11);
  
  $sql12 = "select * from  crimedetails where cyear='2007'";
$result12=mysqli_query($conn,$sql12);
  $rowcount12=mysqli_num_rows($result12);
  
  $sql13 = "select * from  crimedetails where cyear='2006'";
$result13=mysqli_query($conn,$sql13);
  $rowcount13=mysqli_num_rows($result13);
  
  $sql14 = "select * from  crimedetails where cyear='2005'";
$result14=mysqli_query($conn,$sql14);
  $rowcount14=mysqli_num_rows($result14);
  
  $sql15 = "select * from  crimedetails where cyear='2004'";
$result15=mysqli_query($conn,$sql15);
  $rowcount15=mysqli_num_rows($result15);
  
  $sql16 = "select * from  crimedetails where cyear='2003'";
$result16=mysqli_query($conn,$sql16);
  $rowcount16=mysqli_num_rows($result16);
  
  $sql17 = "select * from  crimedetails where cyear='2002'";
$result17=mysqli_query($conn,$sql17);
  $rowcount17=mysqli_num_rows($result17);
  
  $sql18 = "select * from  crimedetails where cyear='2001'";
$result18=mysqli_query($conn,$sql18);
  $rowcount18=mysqli_num_rows($result18);
  
  $sql19 = "select * from  crimedetails where cyear='2000'";
$result19=mysqli_query($conn,$sql19);
  $rowcount19=mysqli_num_rows($result19);
  
 	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_free_result($result4);
    mysqli_free_result($result5);
	mysqli_free_result($result6);
	mysqli_free_result($result7);
	mysqli_free_result($result8);
	mysqli_free_result($result9);
	mysqli_free_result($result10);
	mysqli_free_result($result11);
	mysqli_free_result($result12);
	mysqli_free_result($result13);
	mysqli_free_result($result14);
	mysqli_free_result($result15);
	mysqli_free_result($result16);
	mysqli_free_result($result17);
    mysqli_free_result($result18);
	mysqli_free_result($result19);
$conn->close();
      echo" $rowcount2, $rowcount3, $rowcount4, $rowcount5, $rowcount6, $rowcount7, $rowcount8, $rowcount9, $rowcount10, $rowcount11, $rowcount12, $rowcount13, $rowcount14
, $rowcount15, $rowcount16, $rowcount17, $rowcount18, $rowcount19<br><center><h1>All The Crimes.</h1></center>";
?><html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	 function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['work', ' per 100'],
          ['2017',  <?php echo"$rowcount2" ?> ],
          ['2016',      <?php echo"$rowcount3" ?>],
          ['2015',  <?php echo"$rowcount4" ?>],
		  ['2014',  <?php echo"$rowcount5" ?>],
		  ['2013',  <?php echo"$rowcount6" ?>],
		  ['2012',  <?php echo"$rowcount7" ?>],
		  ['2011',  <?php echo"$rowcount8" ?>],
		  ['2010',  <?php echo"$rowcount9" ?>],
		  ['2009',  <?php echo"$rowcount10" ?>],
		  ['2008',  <?php echo"$rowcount11" ?>],
		  ['2007',  <?php echo"$rowcount12" ?>],
		  ['2006',  <?php echo"$rowcount13" ?>],
		  ['2005',  <?php echo"$rowcount14" ?>],
		  ['2004',  <?php echo"$rowcount15" ?>],
		  ['2003',  <?php echo"$rowcount16" ?>],
		  ['2002',  <?php echo"$rowcount17" ?>],
          ['2001',  <?php echo"$rowcount18" ?>],
		  ['2000',  <?php echo"$rowcount19" ?>]
		]);

        var options = {
          title: 'Crime Rates in Years.'
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
