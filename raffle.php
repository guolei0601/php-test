<?php

$url = 'http://ball.sina.com.cn/api/openapi.php/RewardService.raffle';
$result = array();
header("Content-type: text/html; charset=utf-8");


set_time_limit(1800);
for($i =0;$i<300;$i++){
	echo $i;
	$content = file_get_contents($url);
	$res  = json_decode($content,1);
	$result[] = $res;
}

print_r($result);
unset($result);