<?php
header("Content-type:text/html;charset=utf-8");

function getQihao($ymd,$h,$i,&$startTime,&$endTime){

        $qihao = 0;
        $minute = 60*$h + $i;
        $curTime = $ymd.' '.$h.':'.$i.':'.'00';
        if(0<$minute and $minute<=118){
        //00:00--01:58
        if($minute%5==3){
                $num = floor($minute/5);
                //20160502120
                $yestarday = date('Ymd',strtotime('-1 day'));
                $today     = date('Ymd');
                if($num ==0){
                        $qihao = $yestarday .'120';
                }else{
                        $qihao = $today.str_pad($num,3,'0',STR_PAD_LEFT);
                }

                $startTime = date('Y-m-d H:i:s',strtotime("$curTime - 8 minutes"));
                $endTime   = date('Y-m-d H:i:s',strtotime("$curTime - 3 minutes -1 second "));
        }

}elseif (118<$minute and $minute <=600) {
        //01:58--10:00


}elseif (600<$minute and $minute<=22*60) {
        //10:00--22:00
        if($minute%10==3){
                $num    = floor($minute/10) -36;
                $today  = date('Ymd');
                $qihao  = $today.str_pad($num,3,'0',STR_PAD_LEFT);
                if($minute == 603)
                {//10点03分的时候
                        $startTime = $ymd.' '.'01:55:00';
                        $endTime   = date('Y-m-d H:i:s',strtotime("$curTime - 3 minutes -1 second "));
                }else{
                        $startTime = date('Y-m-d H:i:s',strtotime("$curTime - 13  minutes"));
                        $endTime   = date('Y-m-d H:i:s',strtotime("$curTime - 3 minutes -1 second "));
                }
        }

}else{
        //22:00--24:00
        if($minute%5==3){
                        $num = floor($minute/5)-168;
                        $today = date('Ymd');
                        $qihao = $today.str_pad($num,3,'0',STR_PAD_LEFT);
                        if($minute == 1323){
                                $startTime = $ymd.' '.'21:50:00';
                                $endTime   = date('Y-m-d H:i:s',strtotime("$curTime - 3 minutes -1 second "));
                        }else{
                                $startTime = date('Y-m-d H:i:s',strtotime("$curTime - 8  minutes"));
                                $endTime   = date('Y-m-d H:i:s',strtotime("$curTime - 3 minutes -1 second "));
                        }
                }
        }
        return $qihao;
}

$ymd = '2016-05-15';
for($h=0;$h<24;$h++){
	for($i=0;$i<60;$i++){
		$startTime ='';
		$endTime = '';
		echo $ymd ." $h:$i:00"." 该期期号是".getQihao($ymd,$h,$i,$startTime,$endTime)." 抽从 $startTime  开始到 $endTime 结束的活动".'<br/>';
	}
}
