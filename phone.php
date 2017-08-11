<?php

$mobile = "15276700365";  //要查询的电话号码
$content = get_mobile_area($mobile);
print_r($content);

function get_mobile_area($mobile){
    $sms = array('province'=>'', 'supplier'=>'');    //初始化变量
    //根据淘宝的数据库调用返回值
    header("Content-type:text/html;charset=GBK");
    $url = "http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$mobile."&t=".time();

    $content = file_get_contents($url);
    print_r(mb_detect_encoding($content));
    $content = iconv("UTF-8", "GBK", $content);
    $sms['province'] = substr($content, "56", "4");  //截取字符串
    $sms['supplier'] = substr($content, "81", "4");
    print_r($sms);
    if($sms['province'] == '北京')
    	return 1;
    return 2;
}