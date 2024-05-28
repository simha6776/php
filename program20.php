<?php
$servername="localhost";
$username="root";
$password="";
$database="manju";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
echo "connected successfully<br>";
$tb="create table student24(Admission_Number INT AUTO_INCREMENT,Name VARCHAR(10) NOT NULL,Course VARCHAR(10) NOT NULL,Gender VARCHAR(10) NOT NULL,Ph_Number VARCHAR(14), EMail VARCHAR(20),Address VARCHAR(20),primary key(Admission_Number))";
if(mysqli_query($conn,$tb))
{
	echo "Table Created Successfully";
}
else
	echo "Table CreationFailed";
mysqli_close($conn);
?>