<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
echo "connected successfully<br>";
$db="create database manju";
if(mysqli_query($conn,$db))
{
	echo "Database vreated successfully";
}
else
	echo "database creaton failed";
mysqli_close($conn);
?>