<?php
/*$subject = "abcdefdef33def55def";
$pattern = '/def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
preg_match($pattern, substr($subject,3), $matches1);
preg_match_all($pattern, $subject, $matches2, PREG_OFFSET_CAPTURE);
print_r($matches);
print_r($matches1);
print_r($matches2);

$arr = array('12345.sz','123334.hk','123233.sh','12345.dd');
$str = '12346.sz';
foreach ($arr as $key => $value) {
	if(preg_match('/^\d{5,6}(\.sz|\.hk|\.sh)$/',$value))
	echo $value.'<br/>';
}*/

//( ?<=\<[tT][iI][tT][lL][eE]\>).*( ?=\</[tT][iI][tT][lL][eE]\>)
$pattern = '/(?=[tT])/';
$str1 = '<title>hello</title>';

preg_match_all($pattern, $str1, $matches3);
//preg_match('/( ?<=\<[tT][iI][tT][lL][eE]\>).*( ?=\</[tT][iI][tT][lL][eE]\>)/', $str1,$matches3);
var_dump($matches3);
//preg_grep('/=href/s(.*?)['"]*?/', input)


?>
