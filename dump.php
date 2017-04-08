<?php
include 'connect.php';
$email=$_POST['emailid'];
$level=$_POST['level'];
$time=$_POST['time'];
$score=$_POST['score'];
$tk_mega=$_POST['mega'];
echo $email;
$sql2 = "INSERT INTO camo_db (tk_username,level,tk_mega,time,score) VALUES ('$email','$level','$tk_mega','$time','$score')";
$result2=mysql_query($sql2)or die(mysql_error());
echo $result2;
?>
