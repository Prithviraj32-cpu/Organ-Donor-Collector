<?php

error_reporting(0);
session_start();
$host="localhost";
$db="od";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_POST["t1"];
$password=$_POST["t2"];


$sql="select * from hospital where username='$username' and password='$password'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	include("doctorerror.html");
}
else
{
	$_SESSION["hun"]=$username;
	include("hhomepage.php");
}

?>