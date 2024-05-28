<?php
	$a=123;
	$temp=$a;
	$rev=0;
	$sum=0;
	while($a>0)
	{
		$r=$a%10;
		$rev=$rev*10+$r;
		$a=(int)($a/10);
		$sum+=$r;
	}
	echo "Reverse of the given number".$temp."is".$rev."<br>";
	echo "Sum of digits is".$sum;
?>