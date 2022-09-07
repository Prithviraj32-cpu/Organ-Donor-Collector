<?php

error_reporting(0);
session_start();

$host="localhost";
$db="od";
$user="root";
$pass="";



$conn = new mysqli($host, $user, $pass, $db);

$orid=$_POST["t2"];
$astatus=$_POST["t6"];


$sql = "update ordet set hstatus='$astatus' where orid='$orid'";

if ($conn->query($sql) === TRUE) {
		
		echo "<script>alert('Status Updated Successfully');</script>";
		include("hhomepage.php");
	}


?>