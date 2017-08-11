<?php

//创建随机数组
$arr = array();
ini_set('memory_limit',-1);

function getTimeAddUse($num){

	$pre = memory_get_usage(true);
	for($i=0;$i<$num;$i++){
		$arr[] = rand(0,1000000);
	}

	$arr_1 = array();
	$start_time_0 = microtime(true);
	for($i=0;$i<$num;$i++){
		$arr_1[] = $arr[$i];
	}
	$end_time_0 = microtime(true);
	echo $num,"个数字组成的数组分配内存所用时间为",$end_time_0 - $start_time_0,'s','<br/>';

	$after = memory_get_usage(true);
	echo $num,"个数字组成的数组，占用空间为",($after - $pre)/1024/1024,'M','<br/>';

	$start_time = microtime(true);
	$result = sort($arr_1);
	$end_time = microtime(true);
	echo $num,"个数字组成的数组排序所用时间为",$end_time - $start_time,'s','<br/><br/>';
}

header("Content-type:text/html;charset=utf-8");
getTimeAddUse(1);
getTimeAddUse(10);
getTimeAddUse(100);
getTimeAddUse(1000);
getTimeAddUse(10000);
getTimeAddUse(100000);
getTimeAddUse(1000000);
//
