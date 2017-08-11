<?php
header("Content-type: text/html; charset=utf-8");

$record = array('activity_id'=>87,'num'=>'100');
for($i=0;$i<1;$i++){
	$records[] = $record;
}

//print_r($records);
$json_str = json_encode($records);
print_r($json_str);

$json_arr = json_decode($json_str,true);
print_r($json_arr);
exit;
//print_r(array_values($str));

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

print_r(getNumByJsonArr($json_str));