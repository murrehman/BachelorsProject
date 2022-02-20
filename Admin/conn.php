<?php

// $conn = new mysqli('localhost', 'root', '', 'foodsys');
$conn = new mysqli('localhost', 'root', '', 'leiahsol_ordersimple');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>