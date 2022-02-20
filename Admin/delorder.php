<?php
include_once "../dbc.php";
$id=$_REQUEST['del'];
$query="delete from pizzaorder where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:vieworder.php');
	}else{
			echo "sorry";
		}
?>