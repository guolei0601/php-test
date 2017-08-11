<?php

$html = "http://kaijiang.aicai.com/open/sinaRefresh.do?callback=chongqing_ssc&game=301";
$res  = file_get_contents($html);
$pattern = '/(?<=chongqing_ssc\().*(?=\))/';
preg_match($pattern,$res,$matches);

$res_arr = json_decode($matches[0],true);

print_r($res_arr);

if(empty($res_arr['code']) || $res_arr['code'] != 200){
	echo 'failed to get the answer';
	exit;
}

$cqssc_str = $res_arr['cqssc'];
$cqssc_arr = explode('|', $cqssc_str);

foreach ($cqssc_arr as  $val) {
	$qihao = substr($val, 0,11);
	$number = str_replace(' ', '', substr($val,12,9)) ;
	$add_time = substr($val,-16);

	print_r($qihao.'<br/>');
	print_r($number.'<br/>');
	print_r($add_time.'<br/>');
}
