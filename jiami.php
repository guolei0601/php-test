<?php 
function encode_file_contents($filename) { 
	    $type=strtolower(substr(strrchr($filename,'.'),1)); 
		if('php'==$type && is_file($filename) && is_writable($filename)){// 如果是PHP文件 并且可写 则进行压缩编码 
			$contents = file_get_contents($filename);// 判断文件是否已经被编码处理 
			$pos = strpos($contents,'powered by gl'); 
			if(false === $pos || $pos>100){ // 去除PHP文件注释和空白，减少文件大小 
			$contents = php_strip_whitespace($filename); 
			// 去除PHP头部和尾部标识 
			$headerPos = strpos($contents,'<?php'); 
			$footerPos = strrpos($contents,'?>'); 
			$contents = substr($contents,$headerPos+5,$footerPos-$headerPos); 
			$encode = base64_encode(gzdeflate($contents));// 开始编码 
			$encode = '<?php'."\n eval(gzinflate(base64_decode("."'".$encode."'".")));\n\n"; 
			return file_put_contents($filename,$encode); 
			} 
	    } 
	return false; 
} 
//调用函数 
$filename='test.php'; 
encode_file_contents($filename); 
echo "OK,加密完成！"
?>