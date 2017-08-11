<?php

 function curlGet($url){
        //$url = 'http://stock.finance.sina.com.cn/stock/api/srv.php/StockService.CheckDate?day=20160806';      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, "PlatformAppToken:OXQSTUUSUWXONYTW%3DONYUW%3DONYUS%3DONYUO%3DONYUUXORWNQSQNNTXXrLmmlzA%23Fz");
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_REFERER, 'http://score.365rich.cn/');
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
        //print_r($output);
        
    }

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

  function curlPost($url,$data){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
  }

  $url = "http://i2.api.weibo.com/2/users/show_batch.json?source=1001897699&uids=3578679585";

  print_r(curlGet($url));

  /*$url = "http://stock.finance.sina.com.cn/hkstock/api/openapi.php/HK_StockService.getHgtAndAH?symbol=00016";
  $res =  curlData($url);
  var_dump($res);
  $data = json_decode($res,true);
  var_dump($data['result']['data']['hgt']);
/*  $data = array('title'=>'test','content'=>'test','weight'=>'1');
  //$data = array('id'=>2);
  $url = "http://admin.cai.sina.com.cn/JsonpApi.php?s=TopicService&a=addTopic";
  //$url = "http://localhost/cai/JsonApi.php?s=TopicService&a=addTopic";
  $res = curlPost($url,$data);
  print_r($res);
   /*$res =  curlGet();

   print_r($res);

   $res_1 = unserialize($res);

   print_r($res_1);
   */