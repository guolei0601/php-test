<?php

$arr = array(1,2,-1,-3,5,-1,3,-5,10,9,-10,-8,7,2,1,-5,-10,30,-20,50,-100,10);
$count = count($arr);
$sum  = 0;
$left = 0;
$right= 0;

for($i=0;$i<$count;$i++)
{
	if($arr[$i] <0)
		continue;

	$sum0 = $arr[$i];

	if($sum0 > $sum){
		$sum = $sum0;
		$left = $i;
		$right = $i;
	}

	for($j=$i+1;$j<$count;$j++)
	{
		$sum0 += $arr[$j];
		if($sum0 > $sum){
		$sum = $sum0;
		$left = $i;
		$right = $j;
		} 
	}
}

echo $sum;
echo '<br/>';
echo $left;
echo '<br/>';
echo $right;
	