<?php
if(isset($_POST['ADD']))
{
	$M100=$_POST["M100"];
	$M101=$_POST["M101"];
	$M110=$_POST["M110"];
	$M111=$_POST["M111"];
	$M200=$_POST["M200"];
	$M201=$_POST["M201"];
	$M210=$_POST["M210"];
	$M211=$_POST["M211"];
	$matrix1=array(array($M100,$M101),array($M110,$M111));
	$matrix2=array(array($M200,$M201),array($M210,$M211));
	$m=count($matrix1);
	$n=count($matrix1[0]);
	echo "<hr color='blue'>";
	echo "<h2>Matrix A is</h2><br>";
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$m;$j++)
		{
			echo $matrix1[$i][$j];
		}
	}
	echo "<hr color='red'>";
	echo "<h2>Matrix B is</h2><br>";
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$m;$j++)
		{
			echo $matrix2[$i][$j];
		}
	}
	echo "<hr color='blue'>";
	echo "<h2>Addition of two matrix is</h2><br>";
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$m;$j++)
		{
			$add[$i][$j]=$matrix1[$i][$j]+$matrix2[$i][$j];
		}
	}
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$m;$j++)
		{
			echo $add[$i][$j]." ";
		}
	echo "<br>";
	}
}
?>
	
	