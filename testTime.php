<?php 

$t = '2015-06-25';
$t= date('Y-m-d H:i:s',strtotime($t) - 60*15);
echo $t;
echo '<br/>';

$ctime = date ( 'Y-m-d', strtotime ( "-1 month" ) );

echo $ctime;