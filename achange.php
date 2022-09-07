<?php

error_reporting(0);
session_start();
$host="localhost";
$db="od";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$un=$_SESSION["un"];
$cp=$_POST["t1"];
$np=$_POST["t2"];


$sql="select * from admin where password='$cp'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	include("achangeerror.html");
}
else
{
	$sql1 = "update admin set password='$np'";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Password Changed Successfully');</script>";
		include("admhomepage.php");
	}
	
}

?>