<?php

$fruit = array('banana','mango','pear');
$price = array('30','50','35');
$format = 'A %s costs %d cents </br>';
for($i=0;$i<3;$i++){
	printf($format,$fruit[$i],$price[$i]);
}