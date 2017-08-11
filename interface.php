<?php

$interface = "http://t.10jqka.com.cn/api.php?method=group.getLatestPost&code=601857&limit=100&return=json&pid=&allowHtml=0";

function curl_get_file_contents($URL)
{
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($c, CURLOPT_HEADER, 1);//输出远程服务器的header信息
curl_setopt($c, CURLOPT_USERAGENT, 'IHexin/9.26.03 CFNetwork/711.4.6 Darwin/14.0.0');
curl_setopt($c, CURLOPT_URL, $URL);
$contents = curl_exec($c);
curl_close($c);
if ($contents) {return $contents;}
else {return FALSE;}
} 


print_r(curl_get_file_contents($interface));

