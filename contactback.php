<?php
include_once "dbc.php";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$date=date('d-m-y');

$query="insert into contact values('','$date','$name','$email','$message')";
$result=mysqli_query($con,$query);
if($result){
	header('location:index.php');
	}else{
	echo "sorry";
	}

?>