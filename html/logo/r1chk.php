<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$database="teknack";*/
$host= 'localhost';
    $user = 'root'; 
    $pass = '';
	$database = 'camo';
	$link = mysqli_connect($host, $user, $pass) or die("unable to connect 1");
	$db = mysqli_select_db($link , $database);
	$objects=0;

	if(isset($_POST['score'])&&isset($_POST['objects'])){
		$score = $_POST['score'];
		$objects=$_POST['objects'];
		//echo $score;
		$sql = "INSERT INTO `leaderboard`(`score`) VALUES ('$score')";
		//$res = mysqli_query($link , $sql);
	}




// Create connection
//$conn = mysql_connect($servername, $username, $password,$database);

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysql_error());
} */


if($objects==6)
{
	//echo "<script>window.location.href='decode.php?err=1'</script>";
		//session_unset(); 
	// header("Location: forest.php?err=1");
echo "<script>window.location.href='r2.html'</script>";
	 	// die();
}
?>
