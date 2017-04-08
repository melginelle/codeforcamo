<!DOCTYPE html>
<html>
<head>
<title>::Display::</title>
</head>
<body>
<?php
include 'connect.php';

$sql = "SELECT tk_emailid, tk_patients_saved, tk_time, tk_health FROM hello";
$result = mysql_query($sql) or die(mysql_error());

if ($result) {
	$row=mysql_fetch_assoc($result);
    // output data of each row
   
		
        echo "Email_id: " . $row['tk_emailid']. " - Paitent Saved: " . $row['tk_patients_saved' ]. " Time" . $row['tk_time']." Health" . $row['tk_health']. "<br>";
    
} else {
    echo "0 results";
}
?>
</body>
</html>