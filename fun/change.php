<?php
include '../connect.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
session_start();
$the_user=$_SESSION['onlinelibarary'];
$sql="SELECT * FROM users WHERE the_user = '$the_user' ";
$result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
        $The_Password=$row['The_Password'];
             }
if ($n1 <> $The_Password){
	header('Location:http://localhost/online_libarary/pass.php?re=1');
	exit();
}
if ($n3 !== $n2){
	header('Location:http://localhost/online_libarary/pass.php?re=2');
exit();
}
$sql = "UPDATE users SET The_Password='$n3' where  the_user='$the_user'";
$result = $conn->query($sql);
header('Location:http://localhost/online_libarary/personal.php');
?>