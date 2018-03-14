<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 else{
echo "connected";
 }
function admin_import() {

  if (isset($_REQUEST['upload'])) {
    $ok = true;
    $file = $_FILES['csv_file']['tmp_name'];
    $handle = fopen($file, "r");
    if ($file == NULL) {
      error(_('Please select a file to import'));
      redirect(page_link_to('form.html'));
    }
    else {
      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
          $nick_name = $filesop[0];
                    $fname = $row[0];
                    $mname = $row[1];
                    $lname = $row[2];
                    $dob = $row[3];
					$l1 = $row[4];
					$l2 = $row[5];
                    $town = $row[6];
					$state = $row[7];
					$country = $row[8];
					$c_d = $row[9];
					$eo = $row[10];
					$gen = $row[11];
					$occ = $row[12];
					$rel = $row[13];
// example error handling. We can add more as required for the database.

		$ok = true;
 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = "INSERT INTO vanam(`name`) values('" . $town . "')";
        }
      }

      if ($sql) {
        success(_("You database has imported successfully!"));
        redirect(page_link_to('admin_export'));
      } else {
        error(_('Sorry! There is some problem in the import file.'));
        redirect(page_link_to('admin_export'));
        }
    }
  }
//form_submit($name, $label) Renders the submit button of a form
//form_file($name, $label) Renders a form file box

 return page_with_title("Import Data", array(
   msg(),
  div('row', array(
          div('col-md-12', array(
              form(array(
                form_file('csv_file', _("Import user data from a csv file")),
                form_submit('upload', _("Import"))
              ))
          ))
      ))
  ));
}
?>