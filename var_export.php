<?php

$a = array(1,2,array("a","b","c"),);
var_dump($a);
var_export($a);

$b = 3.1;
$v = var_export($b,true);
echo $v;
//var_dump($v);