<?php 
session_start();
$conn = mysqli_connect('database', 'root', '', 'ecom');
if (!$conn) {
	die("Error connecting to database: " . mysqli_connect_error());
	}

?>