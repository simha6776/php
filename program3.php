<?php
	$a=23;
	$b=121;
	$c=441;
	if($a>$b&&$a>$c)
	{
		$big=$a;
	}
	elseif($b>$c)
	{
		$big=$b;
	}
	else
	{
		$big=$c;
	}
	echo $big."is maximum among".$a.",".$b."and".$c;
?>