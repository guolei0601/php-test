<?php
$host = "202.108.35.246";
$port = "21";
$timeout = 30;
$user = "guolei3";
$passwd = "71b93337-03d2-4ef1-ba0d-825cd9d6c1b1";


$host = "172.16.114.45";
$port = "21";
$timeout = 30;
$user = "test";
$passwd = "test_123";
//创建连接
$conn = ftp_connect($host,$port,$timeout) or die("could not connect");

//登录
$login = ftp_login($conn, $user, $passwd);

//更改ftp目录
ftp_chdir($conn, ".");
//输出当前目录
$pwd = ftp_pwd($conn);

//获取当前目录的文件列表
$nlist =  ftp_nlist($conn, '.');
//上传
echo ftp_put($conn, 'b.txt', 'a.txt', FTP_ASCII);
//删除
//echo ftp_delete($conn, './b.txt');
ftp_close($conn);

echo $pwd;
print_r($nlist);
