<?php

$participate_record = '[{"uid":"3578679585","participate_time":"2016-06-02 12:23:38.471"},{"uid":"3578679585","participate_time":"2016-06-02 11:34:24.871"},{"uid":"3578679585","participate_time":"2016-06-02 11:34:12.958"},{"uid":"3578679585","participate_time":"2016-06-02 11:17:25.271"},{"uid":"1621439853","participate_time":"2016-05-31 19:26:18.117"},{"uid":"3764004810","participate_time":"2016-05-31 18:34:35.526"},{"uid":"2481024301","participate_time":"2016-05-31 10:47:43.650"},{"uid":"3578679585","participate_time":"2016-05-30 18:47:23.047"},{"uid":"2481024301","participate_time":"2016-05-30 18:45:56.554"},{"uid":"1027230643","participate_time":"2016-05-30 18:30:38.347"},{"uid":"5692044585","participate_time":"2016-05-30 18:29:17.092"},{"uid":"5692044585","participate_time":"2016-05-30 18:28:36.540"},{"uid":"1027230643","participate_time":"2016-05-30 18:28:14.168"},{"uid":"3578679585","participate_time":"2016-05-30 18:01:23.516"},{"uid":"3578679585","participate_time":"2016-05-30 17:49:32.705"},{"uid":"3578679585","participate_time":"2016-05-30 17:25:23.046"},{"uid":"1027230643","participate_time":"2016-05-30 17:24:43.385"},{"uid":"3578679585","participate_time":"2016-05-30 17:18:54.236"},{"uid":"3578679585","participate_time":"2016-05-30 16:59:06.458"},{"uid":"3578679585","participate_time":"2016-05-30 16:55:20.754"},{"uid":"5692044585","participate_time":"2016-05-30 16:48:23.805"},{"uid":"2948407163","participate_time":"2016-05-30 14:40:40.511"},{"uid":"5692044585","participate_time":"2016-05-27 12:43:30.858"},{"uid":"3578679585","participate_time":"2016-05-27 11:22:56.186"},{"uid":"3578679585","participate_time":"2016-05-27 11:21:26.372"},{"uid":"5692044585","participate_time":"2016-05-27 10:41:43.400"},{"uid":"3764004810","participate_time":"2016-05-27 10:19:16.384"},{"uid":"5113335490","participate_time":"2016-05-27 10:15:43.066"},{"uid":"5287000597","participate_time":"2016-05-27 10:15:07.29"},{"uid":"2481024301","participate_time":"2016-05-26 18:48:06.537"}]';

function getNumByJsonArr($participate_record){
	$records = json_decode($participate_record,true);
	$sum = 0;
	foreach ($records as $record) {
		$participate_time = $record['participate_time'];
		$num_str = substr($participate_time, -12);
		$num  = str_replace(array(':','.'), '', $num_str);
		$sum += intval($num);
	}
	return $sum;	
}



$numA =  getNumByJsonArr($participate_record);

$numB = 31013;

echo $numA .'<br/>';

echo ($numA + $numB) .'<br/>';

$c =  4406057573  ;

var_dump($c);
echo $c;

$prize_num  = ($numA + $numB) % 300 + 100000000;

echo $prize_num;