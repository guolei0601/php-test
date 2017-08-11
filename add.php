<?php 

$arr0 = array();
$arr1 = array('0',1);
$arr2 = array('data',1,2);

print_r($arr1+$arr2);
echo '<br/>';

print_r(array_merge($arr1+$arr2));
echo '<br/>';

print_r(array_flip($arr0)+array_flip($arr2)+array_flip($arr1));
echo '<br/>';

Header("HTTP/1.1 303 See Other");
Header("Location:test.xlsx");
exit; 
