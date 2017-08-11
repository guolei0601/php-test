<?php
   error_reporting(E_ERROR);

  
   
   //$activity_key = 'test_1_act_';
   //date_default_timezone_set("PRC");
   //date_default_timezone_set("PRC");
  date_default_timezone_set("Asia/Shanghai");
  $time = date('H:i');
  $time_arr = explode(':', $time);
  $h = intval($time_arr[0]);
  $i = intval($time_arr[1]);
  echo $h.':'. $i;