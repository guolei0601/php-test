<?php

header("Content-type:text/html;charset=utf-8");
$time = "2016-06-03 10:54:00";

function getQihaoByAnnouceTime($time){

	$time    = date('Y-m-d H:i:s',strtotime("$time - 4 minutes"));
	$str_ymd = substr($time, 0,10);
	$ymd     = str_replace('-', '', $str_ymd);
	$h       = substr($time,11,2);
	$i       = substr($time, 14,2);

	$minute = intval($h) * 60 + intval($i);
	$qihao  = '';
	if($minute == 0){

		$qihao     = date('Ymd',strtotime("$time -1 day")).'120';

	}elseif($minute>0 && $minute <= 115){

		if($minute % 5 != 0) return $qihao;
		$qihao     = $ymd . str_pad(floor($minute/5),3,'0',STR_PAD_LEFT); 

	}elseif($minute > 115 && $minute < 10* 60){

		//除非异常情况
	
	}elseif($minute >= 10 * 60 && $minute <= 22 * 60){

		if($minute % 10 != 0) return $qihao;
		$qihao = $ymd . str_pad(floor( $minute / 10 ) - 36,3,'0',STR_PAD_LEFT) ;

	}else{

		if($minute % 5 != 0) return $qihao;
		$qihao  = $ymd . str_pad(96 + floor(($minute - 60 * 22)/5),3,'0',STR_PAD_LEFT) ;

	}

	return $qihao;
}


date_default_timezone_set("PRC");

for($h=0;$h<24;$h++){
	for($i=0;$i<60;$i++){

		$time = date('Y-m-d').' '.str_pad($h, 2,'0',STR_PAD_LEFT).':'.str_pad($i, 2,'0',STR_PAD_LEFT).':00';

		echo $time." 该期期号是".getQihaoByAnnouceTime($time).'<br/>';
	}
}

//getDetailTime($time);

