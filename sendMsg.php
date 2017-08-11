<?php

$phone_arr = array('15810838232','15210977916');
$msg = "【新浪财经】快来赢取50万现金大奖！更有MacBook Pro、IPhone7等大奖等你来拿！错过再等一年！新浪财经和香港交易所邀请你来参加“新浪港股通模拟交易大赛”，点击http://finance.sina.com.cn/focus/jiaoyi/ggtds/m.intro.shtml 参加";

function sendSMS($phone,$message){
	    $data=array(
	            'msg'=>$message,
	            'usernumber'=>$phone,
	            'count'=>'1',
	            'from'=>'90446',
	            'longnum'=>'1065750241300022',
	            'ext'=>-1
	    );
	    $url='http://qxt.intra.mobile.sina.cn/cgi-bin/qxt/sendSMS.cgi?';
	    $paraUrl=http_build_query($data);
	    $url.=$paraUrl;
	    $result=@file_get_contents($url);
	   	return $result;
}

foreach($phone_arr as $phone){
	if(sendSMS($phone,$msg)){
		echo $phone ."  succeed !"."\n";
	}
	else{
		echo $phone ."  failed !"."\n";
	}
}