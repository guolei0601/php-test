<?php

$a = array(1,2,3,4,5);

foreach($a as &$b){
	var_dump($b);
}

echo '======'.chr(10);

#$a = array(1,2,3,4,5);

foreach($a as $b){
	var_dump($b);
}