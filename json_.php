<?php

 function curlData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
function remove_utf8_bom($text)
{
    $bom = pack('H*','EFBBBF');
    $text = preg_replace("/^$bom/", '', $text);
    return $text;
}


#$res = '﻿{"result":{"status":{"code":0},"data":{"code":0,"data":{"uid":"3578679585","uname":"\u90ed\u78ca","status":"1","phone":"15210977916","aid":false,"src":"","yyb":"test1","message":""}}}}';
#$res = '{"test":"gl"}';
$url = "http://money.finance.sina.com.cn/jiaoyifenxi/api/openapi.php/UserFileService.getUserInfoG?uid=3578679585";
$res = curlData($url);

print_r($res);
$res =  str_replace("\xEF\xBB\xBF",'',$res);
print_r($res);
$ret = json_decode($res,true);
var_dump($ret);
