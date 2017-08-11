<?php
$test = array(
    'a'=>'hello 1',
    'r'=>'hello 2',
    'h'=>'hello 3',
    'w'=>'hello 4',
    't'=>'hello 5',
    'n'=>'hello 6',
    'k'=>'hello 7',
    'b'=>'hello 8');
print_r( array_slice($test,2,10000) );
?>