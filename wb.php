<?php


function curlData($url,$fileds = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
        if(!empty($fileds))
        	curl_setopt($ch, CURLOPT_HTTPHEADER, $fileds);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }


	$url = "http://otc.finance.sina.com.cn/service/api/openapi.php/Weibo.getTokenByAppkey?appkey=1001897699&source=b1db4540528a68c1e30948a87c07d3f2";
	$url_1 = "http://i2.api.weibo.com/2/friendships/friends.json?source=1001897699&uid=3578679585";
	$res = curlData($url);
	$res = json_decode($res,true);
	$token = $res['result']['data']['token'];

	$res   = curlData($url_1,array("PlatformAppToken:$token"));
	var_dump($res);
	var_dump($token);