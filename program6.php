<?php
	$a=123;
	$temp=$a;
	$rev=0;
	while($a>0)
	{
		$r=$a%10;
		$rev=$rev*10+$r;
		$a=(int)($a/10);
	}
	if($temp==$rev)
		echo $temp."Is Palindrome";
	else
		echo $temp."Is Not Palindrome";
?>