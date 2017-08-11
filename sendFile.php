<?php
function execUpload(){


//$file = '/doucment/Readme.txt';
$ch = curl_init();
$post_data = array(
	
	'order_id'=>'201606291628322734003253890184',
	'money'=>'2',
);
curl_setopt($ch, CURLOPT_HEADER, false);
//启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样。
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
curl_setopt($ch, CURLOPT_URL, 'http://admin.1.sina.com.cn/index.php/refund/doRefund');
$info = curl_exec($ch);
curl_close($ch);
   
echo $info;
}

execUpload();