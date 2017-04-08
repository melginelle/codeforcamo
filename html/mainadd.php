<?php session_start();
include 'connect.php'; 
$usr='simranjeet';
$sql="SELECT * FROM camo_db WHERE tk_username='$usr'";
$res=mysql_query($sql) or die(mysql_error);
if($res)
{
	$sql2="INSERT INTO camo_db(tk_username) VALUES ('$usr')";
	$res2=mysql_query($sql2)or die(mysql_error());
}

?>
