<?php
$num=10;
echo $num."Fibnocci series are:<br><br>";
function fibo($num)
{
if($num==0)
return 0;
else if($num==1)
return 1;
else
return (fibo($num-1)+fibo($num-2));
}
for($i=0;$i<$num;$i++)
echo fibo($i)."<br>";
?>