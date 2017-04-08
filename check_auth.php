<?php
session_start();
	
	// echo $id=preg_replace('#[^0-9]#i','',$_SESSION['id']);
	$username = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION['username']);
	$password = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION['password']);
	//exit();
	include("conn.php");
	$sql="SELECT * FROM `tek_student` WHERE `username`='$username' AND `password`='$password';";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		echo "Your login session data not in database";
		exit();
	}
?>