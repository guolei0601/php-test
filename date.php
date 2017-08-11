<?php

$date = date('Y-m-d H:i:s');
print_r(substr($date, 5,2));
/*
date_default_timezone_set("PRC");
$d = '2015-06-29';

echo date('Y-m-d',strtotime("$d - 1 year"));exit;
//$d = $d.' 00:00:00';

for($i=0;$i<15;$i++){
	//echo $d;
	echo date('Y-m-d H:i:s',strtotime($d)-$i*60*60*24 + 6*60*60 + 59*60);
	echo '<br/>';
}*/