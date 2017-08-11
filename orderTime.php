<?php

function get_udate($format = 'u', $utimestamp = null) {
	   date_default_timezone_set("PRC");
       if (is_null($utimestamp))
           $utimestamp = microtime(true);
       $timestamp = floor($utimestamp);
       $milliseconds = round(($utimestamp - $timestamp) * 1000);
       $milliseconds = str_pad($milliseconds,3,'0',STR_PAD_RIGHT); //保证其3位的长度
 	   $dateFormat = preg_replace('`(?<!\\\\)u`', $milliseconds, $format);
       return date($dateFormat, $timestamp);
   }

$i = 0;
 while($i <= 100000){

 	$i++;
 	echo 'time is '.get_udate('Y-m-d H:i:s.u').'<br/>';
 }