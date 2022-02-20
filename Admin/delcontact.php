<?php
include_once "../dbc.php";
$id=$_REQUEST['del'];
$query="delete from contact where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewcontact.php');
	}else{
			echo "sorry";
		}
?>