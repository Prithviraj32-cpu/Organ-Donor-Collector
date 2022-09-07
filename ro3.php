<?php

error_reporting(0);
session_start();

$host="localhost";
$db="od";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_SESSION["un"];

$id=$_POST["t2"];
$hname=$_POST["t3"];
$otype=$_POST["t4"];

$sql="select * from hospital where username='$id'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$lname=$row["lname"];
	$addr=$row["addr"];
	$cno=$row["cno"];
	$email=$row["email"];
	
}




$astatus="Under Process";
$hstatus="Under Process";


$sql1="select * from user_login where username='$username'";

$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc())
{
	$ufname=$row1["fname"];	
	$uaddr=$row1["addr"];
	$ucno=$row1["cno"];
	
}

$sql2 = "INSERT INTO ordet(username,fname,lname,addr,cno,email,uname,ufname,uaddr,ucno,otype,astatus,hstatus) VALUES ('$id','$hname','$lname','$addr','$cno','$email','$username','$ufname','$uaddr','$ucno','$otype','$astatus','$hstatus')";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Organ Request Submitted Successfully");</script>';
		include("userhomepage.php");
	}

			
		
	



?>