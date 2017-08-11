<?php

class TestAutoload {

	public static function autoload($classname){
	$filename = "./class/".$classname.".class.php";
    if(is_file($filename)){
    	echo 'cunzai'."<br/>";
        include $filename;
    }
	} 
}

/*function autoload($classname){
    $filename = "./class/".$classname.".class.php";
    if(is_file($filename)){
        include $filename;
    }
}*/

//报告运行时错误
error_reporting(E_ALL);
echo '开始';
spl_autoload_register(array('TestAutoload','autoload'));
echo 123;
var_dump(class_exists('class1',false));
var_dump(class_exists('aaa'));
$test1 = new class1();
echo '<br/>';
$test1 = new class2();
echo '<br/>';
$test1 = new class3();
 
 
?>