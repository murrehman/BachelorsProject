<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Contact</title>
<style>
th{
	background-color:black;
	padding:15px;
	border:1px solid red;
	color:white;
	}
	td{
		padding:15px;
	border:1px solid red;
		
		}
</style>
</head>

<body>
<table>
<tr>
<th>Id</th>
<th>Date</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Delete</th>

</tr>

<?php
include_once "../dbc.php";
$query="select * from contact";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['message'];?></td>
<td><a href="delcontact.php?del=<?php echo $row['id'];?>"><span onClick="contact()">del</span></td>
<script>
function contact(){
	alert('Delete Contact');
	}
</script>













</tr>


<?php }?>
</table>

</body>
</html>