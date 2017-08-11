<?php

$arr = array('0'=>-52953200.0000,'1'=>42156700.0000,'2'=>-24300700.0000,'3'=>5062520.0000);

function _getSlope($arr){

        $arr = array_values($arr);
        $num = count($arr);
        $arr_new = array();//归一化处理后的新的数组
        $max = max($arr);
        $min = min($arr);
       

        

        
        foreach ($arr as $key => $val) {
            $cur = round(($val - $min)/($max-$min),2);
            $arr_new[]  = $cur;
        }

        $sum_x=0;
        for($i =1;$i<=$num;$i++){
            $sum_x += $i;
        }

        $ave_x = round($sum_x/$num,2);
        $ave_y = round(array_sum($arr_new)/$num,2);

       

        $sum_xi_yi = 0;
        $n_ave_x_ave_y = $num * $ave_x * $ave_y;
        $sum_xi_2 = 0;
        $n_ave_x_2 = $num * pow($ave_x, 2);

        for($i=0;$i<$num;$i++){
            $sum_xi_yi += $arr_new[$i] * ($i+1);
            $sum_xi_2 += pow($i+1,2);
        }

 
        $res = round(($sum_xi_yi -$n_ave_x_ave_y)/($sum_xi_2 -$n_ave_x_2 ) ,2);
        return $res;
    
    }

    print_r(_getSlope($arr));