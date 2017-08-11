<?php

//获取最新揭晓时间
header("Content-type:text/html;charset=utf-8");
function getAnnounceTime($minute){
	
	if(0 <= $minute and $minute < 115)
	{
		$announce_min = floor($minute/5) * 5 + 9;
		
	}
	elseif (115 <= $minute and $minute < 600) 
	{
		$announce_min = 10 * 60 + 4;//10点零4分钟	

	}
	elseif (600 <= $minute and $minute < 22*60 ) 
	{
		$announce_min = floor($minute / 10) * 10+ 14;
	}
	else{
		$announce_min = floor($minute / 5) * 5 + 9; 
	}

	return str_pad(floor($announce_min/60) , 2,'0',STR_PAD_LEFT).':'.str_pad(floor($announce_min%60) , 2,'0',STR_PAD_LEFT).':'.'00';
}


for($i=0;$i<60*24*60;$i++){
	$h = intval($i/3600);
	$m = intval($i/60%60);
	$s = $i%60;
	echo '活动满员时间：'.str_pad($h , 2,'0',STR_PAD_LEFT).':'.str_pad($m , 2,'0',STR_PAD_LEFT).':'.str_pad($s , 2,'0',STR_PAD_LEFT).'---即将开奖时间：'.getAnnounceTime(intval($i/60)).'<br/>';
	
}

