<?php

$url = "http://www.tradingeconomics.com/bonds";

$contents = file_get_contents($url);

$table_pattern = '/\<table class="table table-condensed table-hover"\>.*\<\/table\>/Us';

preg_match($table_pattern,$contents,$matches);

//获取目标表格内容
$table = $matches[0];

//print_r($table);
//下面对目标表格内容进行一一抓取

//表头没必要抓取，直接自己写
$head= array('Major','','Actual','Change','Daily','Weekly','Monthly','Yearly','Date');

//抓取第一列数据,因为第一列比较特殊
$column_1_pattern = '/(?<=\<b\>).*(?=\<\/b\>)/Us';
preg_match_all($column_1_pattern,$table,$column_matches);
$column_1 = $column_matches[0];
//var_dump($column_matches);

//抓取第二列
$column_2_pattern = '/(?<=-bond-yield"\>)([0-9A-Z\s])*(?=\<\/a\>)/Us';
preg_match_all($column_2_pattern,$table,$column2_matches);
$column_2 = $column2_matches[0];


//抓取第3到9列 因为有共同的代码 class="datatable-item

$column_3_9_pattern = '/(?<=(class="datatable-item)).*(?=\<\/td\>)/Us';
preg_match_all($column_3_9_pattern,$table,$column39_matches);
$column_3_9 = $column39_matches[0];
//print_r($column_3_9);

//对第3到9列数据进行处理，过滤掉无用的数据

$pattern_num = '/-?[0-9.]+/s';
$pattern_date = '/(?<=\>).*/s';
$column_3_9_new = array();
$one_row = array();
foreach($column_3_9 as $key => $val){

	if($key%8 == 0 ){
		if($key != 0)
		$column_3_9_new[] = $one_row;
		unset($one_row);
		$i = 2;
		continue;
	}elseif($key%8 == 7){
		$res = preg_match_all($pattern_date, $val, $res_7);
		$one_row[$i] = $res_7[0][0];
	}else{
		$res = preg_match_all($pattern_num, $val, $res_3_6);
		$one_row[$i] = $res_3_6[0][0];
	}
	$i++;
}

$column_3_9_new[] = $one_row;//添加最后一个数组

//对获取的数组进行组合，得出最终的数据
foreach ($column_3_9_new as $key => $value) {
	$column_3_9_new[$key][0] = $column_1[$key];
	$column_3_9_new[$key][1] = $column_2[$key];
}
//var_dump($column_1);
//var_dump($column_2);
//var_dump($column_3_9_new);

$result = $column_3_9_new;


echo '<table>';
echo '<tr>';
foreach ($head as $key => $val) {
	echo ('<th>'.$val.'<th>');
}
echo '</tr>';
foreach ($result as $key_1 => $val_1) {
	echo '<tr>';
		
	$res = $val_1;
	ksort($res);
	foreach ($res as $key_2 => $val_2) {
		echo ('<td>'.$val_2.'</td>');
	}

	echo '</tr>';
}
echo '</table>';

//var_dump($result);