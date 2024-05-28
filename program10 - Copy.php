<?php
	$arr=array(45,78,90,12);
	echo "Given Array is:<br>";
	foreach($arr as $value)
	echo $value."<br>";
	array_splice($arr,3,0,222);
	echo "After Insertion of 222 the array is:"<br>";
	foreach($arr as value)
		echo $value."<br>";
?>