<?php
	include('conn.php');

	$pname=$_POST['pname'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$category=$_POST['category'];


	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	}
	
	$sql="insert into product (productname,description, categoryid, price, photo) values ('$pname','$description', '$category', '$price', '$location')";
	// echo "<pre>"; print_r($sql); die();
	$conn->query($sql);

	header('location:product.php');

?>