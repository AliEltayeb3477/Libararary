<!DOCTYPE html>
<html>
<head>
	<title>كتبي المستعاره</title>
	<style type="text/css">
		*{
			direction: rtl;
		}
		table{
			padding-top: 50px;
			width: 70%;
		}
		tr , td{
			padding: 10px;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		th{
			background-color: #04aa6d;
		}
	</style>
</head>
<body>
	<?php
	include 'connect.php';
	include 'st.css';
	include 'list.php';
	$n1=$_GET['فتح'];
	?>
	<center>
		<h2 style="padding-top: 5px;">كتبي</h2>
		<table>
			<tr>
				<th>عنوان الكتاب</th>
				<th>تاريخ الاستعارة</th>
				<th>تاريخ الارجاع</th>
				<th>أفتح الكتاب</th>
			</tr>
			<?php
			$sql="SELECT * FROM loans ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
			?>
		    <tr>
		    	<td><?php echo $row['Title']?></td>
		    	<td><?php echo $row['Loan_Date']?></td>
		    	<td><?php echo $row['return_Date']?></td>
		    	<a href=""><td><?php echo $n1;?></td></a>
			</tr>
			<?php
		}
		?>
			</table>
			
	</center>
</body>	
</html>