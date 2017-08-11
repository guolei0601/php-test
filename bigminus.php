<?php

//大整数减法
$a = '88888888888888888888888888888875688888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888777777777774434';
$b = '2222222222222563767647645667767456476674746746899923244444544554655578656576565';

$len_a = strlen($a);
$len_b = strlen($b);

$max = max($len_a,$len_b);

$a   = str_pad($a, $max,'0',STR_PAD_LEFT);
$b   = str_pad($b, $max,'0',STR_PAD_LEFT);

echo $a.'<br/>';
echo $b.'<br/>';
$res ='';
$next = 0;


while($max > 0){
	$max -- ;

	$sum = intval($a[$max]) + intval($b[$max]) + $next;
	//echo $sum .'<br/>';
	if($sum >= 10)
		$next = 1 ;
	else
		$next = 0;
	$cur = $sum%10;
	//echo $cur .'<br/>';
	$res = $cur .$res;
	//echo $res.'<br/>';
}

if($sum >= 10)
	$res = '1'.$res;
print_r($res);
