<?php

error_reporting(0);

$host="localhost";
$db="od";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_POST["t1"];
$password=$_POST["t2"];
$fname=$_POST["t3"];
$lname=$_POST["t4"];
$addr=$_POST["t5"];
$mobno=$_POST["t6"];
$email=$_POST["t7"];

$sql="select * from hospital where username='$username'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	$sql1 = "INSERT INTO hospital VALUES ('$username', '$password', '$fname','$lname','$addr','$mobno','$email')";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Hospital Details Created Successfully');</script>";
		include("admhomepage.php");
	}
}
else
{
	include("hospitalerror.html");
}


?>