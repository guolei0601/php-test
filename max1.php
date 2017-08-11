<?PHP
$arr = array(1,2,-1,-3,5,-1,3,-5,10,9,-10,-8,7,2,1,-5,-10,30,-20,50,-100,10);
$arr = array(2,-1,3);
//$right =0;
$sum_mid = 0;
$sum = 0;

foreach($arr as $key=>$val){

	$sum_mid = $sum_mid + $val;
	if($sum_mid < 0)
		$sum_mid = 0;
	if($sum<$sum_mid)
		$sum =$sum_mid;
}

echo $sum;


echo '<br/>';

print_r(aa($arr));
function aa($arr)
{
    $sum = $arr[0];
    $ret = [$arr[0]];
    $tmp = 0;
    $tmpArr = [];
    $len = sizeof($arr);

    for ($i=1; $i<$len; $i++) {
        if($arr[$i]>0 || ($arr[$i]<0 && isset($arr[$i+1]) && ($arr[$i+1]+$arr[$i])>0)) {
            $sum += $arr[$i];
            $ret[] = $arr[$i];
        } else {
            if ($sum>$tmp) {
                $tmp = $sum;
                $tmpArr = $ret;
            }
            $sum =0;
            $ret = [];
        }
    }

    if ($sum<$tmp) {
        $sum = $tmp;
        $ret = $tmpArr;
    }

    return compact('sum','ret');
}

echo '<br/>';

print_r(serialsum($arr));

function serialsum($arr){
    array_push($arr, 0);
    $sum = 0;
    $before = 0;
    foreach ($arr as $k => $v) {
        $newsum = $v + $before;
        if($newsum >= $sum){
            $sum = $newsum;
        }
        $before = $v;
    }
    return $sum;
}

