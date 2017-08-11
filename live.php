<?php
$url_1 = "http://platform.sina.com.cn/sports_all/client_api?app_key=3390930887&_sport_t_=livecast&_sport_a_=matchesByType&type=328&limit=400&orderby=asc";
$url_2 = "http://platform.sina.com.cn/sports_all/client_api?app_key=3390930887&_sport_t_=livecast&_sport_a_=matchesByType&type=213&limit=400&orderby=asc";

$json_str = file_get_contents($url_1);
$arr = json_decode($json_str,true);
$data1 = $arr['result']['data'];


$json_str = file_get_contents($url_2);
$arr = json_decode($json_str,true);
$data2 = $arr['result']['data'];

$team1 = array();
foreach ($data1 as $key => $value) {
	$team1[] = $value['livecast_id'];
}

$team2 = array();
foreach ($data2 as $key => $value) {
	$team2[] = $value['livecast_id'];
}


var_dump($team1);

var_dump($team2);

var_dump(array_intersect($team1, $team2));