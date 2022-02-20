<?php

define('DB_SERVER','localhost');
define('DB_USER','leiahsol_test');
define('DB_PASS' ,'test123456789_');
define('DB_NAME', 'leiahsol_fyp');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>