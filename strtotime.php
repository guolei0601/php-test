<?php 

date_default_timezone_set("PRC");


echo date('Y-m-d H:i:s',strtotime('-1 day'));
echo '<br/>';
echo date('Y-m-d H:i:s',strtotime('-7 days'));
echo '<br/>';
echo date('Y-m-d H:i:s',strtotime("2016-5-15 00:03:00 - 3 minutes - 1 seconds"));