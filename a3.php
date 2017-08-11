<?php

set_time_limit(0);
date_default_timezone_set("PRC");
$start = date('Y-m-d H:i:s');
echo "程序开始时间：".$start.'<br/>';
for($a=4;$a<=1000;$a++)
	for($d=$a-1;$d>=3;$d--)
		for($c=$d-1;$c>=2;$c--)
			for($b=$c-1;$b>=1;$b--){
				if($a*$a*$a + $b*$b*$b == $c*$c*$c + $d*$d*$d){
					echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d.' m ='.($a*$a*$a + $b*$b*$b).'<br/>';
				}
			}
$end = date('Y-m-d H:i:s');
echo '程序结束时间：'.$end.'<br/>';