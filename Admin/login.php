<?php
	session_start();
	include('conn.php');
	if (isset($_POST['uname']) && $_POST['uname']) {
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		$sql="select * from admin where uname='".$uname."' AND psw='".$psw."'";
		$user_details=$conn->query($sql)->fetch_array();
		if ($user_details) {
			$_SESSION["id"]='yes';
			header('location:index.php', $_SESSION["id"]);

		}else{
			header('location:login.php');		
		}
		// echo "<pre>"; print_r($user_details); die();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.form{
	width: 50%;
	margin-left: 25%
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body class="form">

<h2>Login Form</h2>

<form action="login.php" method="POST">
  <div class="container">
    <div class="">
    	<label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>
	        
	    <button type="submit">Login</button>
    </div>
  </div>
</form>

</body>
</html>
