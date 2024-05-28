<?php
$servername="localhost";
$username="root";
$password="";
$database="manju";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['save']))
{
	$Admission_Number=$_POST['Admission_Number'];
	$Name=$_POST['Name'];
	$Course=$_POST['Course'];
	$Gender=$_POST['Gender'];
	$Address=$_POST['Address'];
	$contact_number=$_POST['Phone_Number'];
	$email=$_POST['email'];
	if(!$conn)
	{
		die("connection failed:".$conn->connect_error);
	}
	$itb="insert into student24(Admission_Number,Name,Course,Gender,Ph_Number,EMail,Address)values('$Admission_Number','$Name','$Course','$Gender','$contact_number','$email','$Address')";
	if(mysqli_query($conn,$itb))
	{
		echo'<script>alert("New Record Created Successfully")</script>';
	}
	else
	{
		echo'<script>alert("New Record Creation Failed")</script>';
	}
	mysqli_close($conn);
}
?>
		