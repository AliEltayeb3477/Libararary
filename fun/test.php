<?php
include '../connect.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$sql="SELECT * FROM users WHERE Full_Name = '$n1' and The_Password='$n2' ";
$result = $conn->query($sql);
$count= $result->num_rows;
if ($count==0) {
	header('Location:http://localhost/online_libarary/login1.php');
	exit();
}
if ($count!==0){
   header('Location:http://localhost/online_libarary/list.php');
	 session_start();
	 $_SESSION['onlinelibarary'] = $n1 ;
   exit();
}
?>