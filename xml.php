<?php
$name = 'smk_count.xlsx';
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=smk_count.xlsx");

$tx='title';  
echo   $tx."nn";  
//输出内容如下：  
echo   "name"."t";  
echo   "calss"."t";  
echo   "degree"."t";  
echo   "n";  
echo   "zs"."t";  
echo   "25"."t";  
echo   "benke"."t";  
?>