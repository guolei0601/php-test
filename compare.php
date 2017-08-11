<?php

echo max(1.00003,2.00004);
echo '<br/>';
echo min(1.00003,2.00004);
echo '<br/>';

echo number_format(2.00,5);


$sqlstr = "let t = ?";
$t = 7;
echo '<br/>';

$sqlstr = str_replace('?', "'".$t."'", $sqlstr);

echo $sqlstr;

