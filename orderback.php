<?php
// include_once "dbc.php";
// $name=$_POST['name'];
// $email=$_POST['email'];
// $details=$_POST['details'];

// $address=$_POST['address'];
// $date=date('d-m-y');

// $query="insert into pizzaorder(date, name, email, details, address) values('$date','$name','$email','$details','$address')";
// $result=mysqli_query($con,$query);
// if($result){
// 	header('location:index.php');
// 	}else{
// 	echo "sorry";
// 	}
	include('Admin/conn.php');


if(isset($_POST['productid'])){
		// echo "<pre>"; print_r($_POST); die();
		$customer=$_POST['customer'];
		$phone=$_POST['phone'];
		$quantity=1;
		$sql="insert into purchase (customer, phone, date_purchase) values ('$customer', '$phone', NOW())";
		$conn->query($sql);
		$pid=$conn->insert_id;
		$total=0;
 
		$productid = $_POST['productid'];
		
		$sql="select * from product where productid='$productid'";
		$query=$conn->query($sql);
		$row=$query->fetch_array();

		

			$sql="insert into purchase_detail (purchaseid, productid, quantity) values ('$pid', '$productid', '$quantity')";
			$conn->query($sql);
	
		$sql="select * from product where productid='$productid'";
		$query=$conn->query($sql);
		$row=$query->fetch_array();


		$total = $row['price'];
 		
 		$sql="update purchase set total='$total' where purchaseid='$pid'";
 		$conn->query($sql);
		header('location:index.php');		
	}
	
?>


