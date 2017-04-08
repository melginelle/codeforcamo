<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$score ==== megaeventpoints
$database="teknack";*/

	include 'connect.php';

	if((isset($_POST['score']))){
		$score = $_POST['score'];
		$usr=$_POST['usr'];
		$time=$_POST['time'];
		$sql = "INSERT INTO `camo_db` (tk_username,score,time) VALUES ('$user','$score','$time')";
		$res = mysql_query($sql) or die(mysql_error());
		
	}



//echo "<script>window.location.href='decode.php?err=1'</script>";
//echo "<script>window.alert('in cheackbeach')</script>";
//$_SESSION['USERNAME']="akash";



// Create connection
//$conn = mysql_connect($servername, $username, $password,$database);

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysql_error());
} */

/*
if($_SESSION['camo_obj']==0)
{
	//echo "<script>window.location.href='decode.php?err=1'</script>";
		session_unset(); 
	// header("Location: forest.php?err=1");

	 	// die();
}*/
?>
