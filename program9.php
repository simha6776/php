<?php
	$s="NDRK FGC Hassan";
	echo "Given String is".$s."<br>";
	$lw=strtolower($s);
	echo "Its Lower Case is".$lw."<br>";
	$up=strtoupper($s);
	echo "Its Upper Case is".$up."<br>";
	$len=strlen($s);
	echo "Its Length is".$len."<br>";
	$reve=strrev($s);
	echo "Its Reverse is".$reve."<br>";
	$word=ucwords($lw);
	echo "First character of each word in the given string in uppercase is".$word."<br>";
	$lword=ucfirst($lw);
	echo "First character of each word in the given string in uppercase is".$lword."<br>";
	$sub=substr($s,5,3);
	echo "SubString is".$sub;
?>	