<?php
	include('conn.php');

	$id=$_GET['category'];

	$cname=$_POST['cname'];
	$description=$_POST['description'];

	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
	}
	$sql="update category set catname='$cname', description='$description', photo='$location' where categoryid='$id'";
	$conn->query($sql);

	header('location:category.php');
?>