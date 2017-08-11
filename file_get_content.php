<?php

$url = "http://guba.eastmoney.com/list,601857,f_1.html";

$pattern = '/\<span class="l2"\>[0-9]+\<\/span\>/';
//$pattern1 = '';

//<span class="l2">0</span>
$contents = file_get_contents($url);
preg_match_all($pattern, $contents, $matches);

var_dump($matches);
//</span><span class="l6">07-09</span>
//
$pattern1 = '/\<span class="l6"\>[0-9\-]+\<\/span\>/';
preg_match_all($pattern1, $contents, $matches1);
var_dump($matches1);
exit;

$url = "http://guba.eastmoney.com/list,601857_9.html";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//在需要用户检测的网页里需要增加下面两行
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($ch, CURLOPT_USERPWD, US_NAME.":".US_PWD);
$contents = curl_exec($ch);
curl_close($ch);
//echo $contents; 
$pattern1 = '/\<cite\>[0-9]+<\/cite\>/';

preg_match_all($pattern1, $contents, $matches);
var_dump($matches);
exit;

$url = "http://guba.eastmoney.com/";
$contents = file_get_contents($url);
//如果出现中文乱码使用下面代码
//$getcontent = iconv("gb2312", "utf-8",$contents);
//

//<cite>16</cite>
//
//print_r($contents);

//$pattern = '/(?<=\>).*(?=\<)/';
//

$contents =  htmlspecialchars($contents);

$pattern1 = '/\<cite\>[0-9]+<\/cite\>/';

preg_match_all($pattern1, $contents, $matches);

var_dump($matches);

exit;

$str1 = "<site>16</site>";
$pattern = '/(?<=\>)[0-9]+/';

//preg_match_all($pattern, $contents, $matches);

//var_dump($matches);


$str2 = "<num>35</num>
<num>36</num>
";

$pattern = '/(?<=\>)[0-9.]+/';

preg_match_all($pattern,$str2,$matches2);
var_dump($matches2);


$str2 = "<num>35</num>
<num>36</num>
";

$pattern = '/(?<=\>)[0-9.]+(?=\<)/';

preg_match_all($pattern,$str2,$matches2);
var_dump($matches2);