<?php
include '../connect.php';
$loan_id=$_POST['loan_id'];
$the_user=$_POST['the_user'];
$Title=$_POST['Title'];
$Loan_Date=$_POST['Loan_Date'];
$return_Date=$_POST['return_Date'];
$the_phone=$_POST['the_phone'];
$sql="SELECT * FROM Loans WHERE loan_id ='$loan_id'";
$result = $conn->query($sql);
$connt= $result->num_rows;
if ($connt==1) {
	header('Location:http://localhost/online_libarary/new_book.php?re=1');
	exit();
}

$sql="INSERT INTO Loans (loan_id ,the_user ,Title ,Loan_Date ,return_Date ,the_phone )
VALUES('$loan_id','$the_user','$Title','$Loan_Date','$return_Date','$the_phone')";
$result2 = $conn->query($sql);
header('Location:http://localhost/online_libarary/index11.php');

?>