<?php

error_reporting(0);
session_start();

$host="localhost";
$db="od";
$user="root";
$pass="";



$conn = new mysqli($host, $user, $pass, $db);

$orid=$_POST["t2"];
$astatus=$_POST["t4"];


$sql = "update ordet set astatus='$astatus' where orid='$orid'";

if ($conn->query($sql) === TRUE) {
		
		echo "<script>alert('Status Updated Successfully');</script>";
		include("admhomepage.php");
	}


?>