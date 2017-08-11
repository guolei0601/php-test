<?php

$bonus_list_rates = array('1'=>'4000','2'=>'4000','3'=>'100','4'=>'5','5'=>'1');
$draw_bonus_id  = 0;


for($i = 0 ;$i<10000;$i++){
	$draw_bonus_id = getPrize($bonus_list_rates);
	print_r("第{$i}次,");
	switch ($draw_bonus_id) {
		
		case '1':
			echo "恭喜您中了五等奖"."<br/>";
			break;

		case '2':
			echo "恭喜您中了四等奖"."<br/>";
			break;

		case '3':
			echo "恭喜您中了三等奖"."<br/>";
			break;

		case '4':
			echo "恭喜您中了二等奖"."<br/>";
			break;

		case '5':
			echo "恭喜您中了一等奖"."<br/>";
			break;

		default:
			echo "恭喜您未中奖"."<br/>";
			break;
	}
}

function getPrize($bonus_list_rates){

	$draw_bonus_id = 0;
	$total_rate_num  = 8106;
	foreach ($bonus_list_rates as $bonus_id => $bonus_rate) {
        $tmp_rand_num = mt_rand(1, $total_rate_num);
        if ($tmp_rand_num <= $bonus_rate) {
           $draw_bonus_id = $bonus_id;
            break;
        } else {
           $total_rate_num -= $bonus_rate;
        }
 	}

 	return $draw_bonus_id;
}
