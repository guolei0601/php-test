<?php 

	set_time_limit(0);
	 function curlData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
        curl_setopt($ch, CURLOPT_COOKIE, "U_TRS1=00000088.37681c1c.57fc91c4.a69bed54; UOR=,touzi.sina.com.cn,; SINAGLOBAL=10.13.240.35_1476170182.28327; vjuids=291a5620d.157b42f2c7c.0.a74f42aade60b; SCF=AjnslzclSqmT3rt_0V5igQiiLwsvt2QjxWwegrT4RD0X7724kwfESQ6IHOVmYsJJ9TmvSfXMHDmlSgH-AvjjUIA.; SGUID=1476252831879_43681020; ALF=1510477747; SUB=_2A251IqxjDeTxGeVL7FoX9yfJwzmIHXVW7DQrrDV_PUJbkNAKLWj4kW155MOonAAuooe3R8KQ1Yy-C3eqag..; SUBP=0033WrSXqPxfM725Ws9jqgMF55529P9D9WFgJXcgTQy2Dr-vcBsH4lcy5JpX5oz75NHD95Q0SKMRSoM4SKnfWs4DqcjBMcfydspkMNxadJHkehq7eBtt; U_TRS2=00000020.15ec111d.582bbb8b.e20dc8ed; Apache=61.135.152.136_1479261071.47695; ULV=1479261104263:22:10:4:61.135.152.136_1479261071.47695:1479261095894; SessionID=turhdt7qit9pdc38k0ei27lc37; SINABLOGNUINFO=3578679585.d54e5121.glei0601; WEB2_APACHE2_YZ=9127729b41cd6a54b9d698deb9dca6f5; _s_upa=1; lxlrtst=1479278431_o; lxlrttp=1479278431; vjlast=1479285071");
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

$url = "http://jiaoyi.sina.com.cn/api/openapi.php/Ggt_Draw_Service.draw";

$handler = fopen('choujiang.txt','a+');
for($i = 0; $i < 2000; $i++){
	$res = curlData($url);
	fwrite($handler, $res);
	fwrite($handler, "\n\n\n\n".$res);
    $res_json = @json_decode($res,true);
    if($res_json){
        echo $res_json['result']['status']['code']."\n";
    }else{
        echo $res ."\n";
    }
	//file_put_contents('choujiang.txt', $res);
	sleep(2);
}

fclose($handler);

