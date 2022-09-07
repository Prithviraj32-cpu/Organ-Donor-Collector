<?php

error_reporting(0);
session_start();

$host="localhost";
$db="od";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_SESSION["un"];

$otype=$_POST["t1"];
$fmname=$_POST["t2"];
$fmcno=$_POST["t3"];


$sql1="select * from user_login where username='$username'";

$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc())
{
	$fname=$row1["fname"];
	$addr=$row1["addr"];
	$cno=$row1["cno"];
	
}

$sql2 = "INSERT INTO donate(username,fname,addr,cno,otype,fmname,fmcno) VALUES ('$username','$fname','$addr','$cno','$otype','$fmname','$fmcno')";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Organ Donation Details Saved Successfully");</script>';
		include("userhomepage.php");
	}

			
		
	



?>