

<?php

echo (date('Y-m-d',strtotime("-4 days")));
/*
$msg = '{"cash_fee":"900","cash_refund_fee":"200","coupon_refund_count":"0","coupon_refund_fee":"0","nonce_str":"sbCC8otVC31vQrki","out_refund_no":"132461000120160712155704","out_trade_no":"201606221048563771003253890184","refund_channel":[],"refund_fee":"200","refund_id":"2006242001201607120320903139","result_code":"SUCCESS","return_code":"SUCCESS","return_msg":"OK","total_fee":"900","transaction_id":"4006242001201606227687329421"}';
$pattern = '/"refund_fee":"(\d+)"/';
preg_match($pattern, $msg,$matches);
print_r($matches);
 /*function get_udate($format = 'u', $utimestamp = null) {
	   date_default_timezone_set("PRC");
       if (is_null($utimestamp))
           $utimestamp = microtime(true);
       $timestamp = floor($utimestamp);
       $milliseconds = round(($utimestamp - $timestamp) * 1000);
 	   $dateFormat = preg_replace('`(?<!\\\\)u`', $milliseconds, $format);
       return date($dateFormat, $timestamp);
   }
echo get_udate('Y-m-d H:i:s.u');*/

/*$start_time = microtime(true); 
$str = "dkjsaaaaaaaaaaaaaaaaaaaaaaaao34oeiewwwwwwwwop[ewr[op[ew[ewri[weqr[e[wre[wr"; 
/*for ($i=0; $i < 100000; $i++) { 
	echo $i;
}*/
/*$date = date('Y-m');
echo $date.'<br/>';
$last_date = date('Y-m', strtotime("$date -1 year +1 month"));
echo $last_date;
//print_r($str); 
$end_time = microtime(true); 
$run = $end_time -$start_time; 
echo '<br/>'.'the program runs '.$run ." microtime";*/
?>
