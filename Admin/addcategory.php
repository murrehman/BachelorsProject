<?php
	include('conn.php');


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



	$sql="insert into category (catname, description, photo) values ('$cname', '$description', '$location')";
	$conn->query($sql);

	header('location:category.php');

?>