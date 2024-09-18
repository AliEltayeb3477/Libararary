<?php
include '../connect.php';
$the_user=$_GET['the_user'];
$Full_Name=$_GET['Full_Name'];
$The_Password=$_GET['The_Password'];
$Reset_Password=$_GET['Reset_Password'];
if ($The_Password !== $Reset_Password) {
	header('Location:http://localhost/online_libarary/new_user.php?re=1');
	exit();
}
$email=$_GET['email'];
$the_phone=$_GET['the_phone'];
$stage=$_GET['stage'];

$sql="INSERT INTO users (the_user , Full_Name , The_Password , the_phone , stage)
VALUES('$the_user','$Full_Name','$The_Password','$the_phone','$stage')";
$result2 = $conn->query($sql);
header('Location:http://localhost/online_libarary/login1.php');

?>