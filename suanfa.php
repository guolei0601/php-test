<?php

set_time_limit(0);
/*for($a=4;$a<1000;$a++)
for($d=$a-1;$d>=3;$d--)
for($c=$d-1;$c>=2;$c--)
for($b=$c-1;$b>=1;$b--){
	if($a*$a*$a + $b*$b*$b == $c*$c*$c + $d*$d*$d){
		echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d.' m='.(pow($a, 3) + pow($b,3)).'<br/>';
	}
}*/

//a,b,c,d很容易分析出是在1000以内，这个算法的思想是动态先计算出每个数的三次方，放到1个数组里，然后m就是这个数组里随机两个数的和的子集

//第一步，把和放到一个数组里
/*$arr = array();
for($i=1;$i<1000;$i++){
	$arr[$i] = $i*$i*$i;
}

//第二步，从数组随机求两个数的和，放到一个和数组里，放的过程中判断和数组是否有这个值了，有这个值就表示 a^3+b^3 = c^3+d^3，就能求出a,b,c,d
$arr_sum = array();
$arr_res = array();
for($j=1;$j<1000;$j++){
	for($k=$j+1;$k<1000;$k++){
		$temp = $arr[$j] + $arr[$k];
		if(in_array($temp, $arr_sum)){
			//在和数组里，表示之前已经有两个数的和是tmep，这就说明temp就是m。
			$arr_res[] = $temp;
		}else{
			//否则就放到和数组里
			$arr_sum[] = $temp;
		}
	}
}
//经验证，这个in_array 太耗费时间了，优化一下

print_r($arr_res);*/


//a,b,c,d很容易分析出是在1000以内，这个算法的思想是先计算出每个数的三次方，放到1个数组里，然后m就是这个数组里随机两个数的和的子集（重复的值所组成的数组）
//第一步，把和放到一个数组里
$arr = array();
for($i=1;$i<1000;$i++){
	$arr[$i] = $i*$i*$i;
}

//第二步，从数组随机求两个数的和，放到一个和数组里，对这个数组求重复的数就是m了
$arr_sum = array();
$arr_res = array();
for($j=1;$j<1000;$j++){
	for($k=$j+1;$k<1000;$k++){
		$arr_sum[] = $arr[$j] + $arr[$k];
	}
}

$arr_u = array_unique($arr_sum);
// 获取重复数据的值所组成的数组  
$arr_res = array_diff_assoc($arr_sum,$arr_u);  
print_r($arr_res);