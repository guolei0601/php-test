<?php

    echo memory_get_usage() , '<br>';  
    $start = memory_get_usage();  
    $a = Array();  
    for ($i=0; $i<200000; $i++) {  
    $a[$i] = '111111111';  
    }  
    $mid =  memory_get_usage();

    //echo memory_get_usage() , '<br>';  

    $str = "";
    foreach ($a as $key => $value) {
    	$str .= $value.",";
    }

    //echo (memory_get_usage() - $mid);
    unset($a);
    $end = memory_get_usage();
    echo 'argv:', ($mid - $start)/1000/1024 ,'M' , '<br>';  
    //var_dump($str);
    //unset($a);
	echo 'argv:',($end - $start)/1000/1024,'M' , '<br>';

    /*for ($i=100000; $i<200000; $i++) {  
    $a[$i] = '111111111';  
    }  
    $end =  memory_get_usage();  
    echo memory_get_usage() , '<br>'; 

    echo 'argv:', ($mid - $start)/1000/1024 ,'M' , '<br>';  
    echo 'argv:',($end - $mid)/1000/1024 ,'M' , '<br>';
    unset($a);
    $end1 =  memory_get_usage();
    echo 'argv:', ($end1- $start)/1000/1024 ,'M' , '<br>'; */