<?php
$mysql_v = array(
	"host"=>"10.13.0.68",
	"port"=>"3306",
	"username"=>"bigdata",
	"password"=>"bd123456",
	"dbname"=>"cai"
	);
$dsn = "mysql:dbname=".$mysql_v['dbname'].";host=".$mysql_v['host'].";port=".$mysql_v['port'];
$username = $mysql_v['username'];
$password = $mysql_v['password'];
$pdo = new pdo($dsn,$username,$password);
$data = array('ceshi','ceshi','1','2016-09-16 00:00:00','2016-09-21 00:00:00','2016-09-30 00:00:00','2016-09-11 10:11:59');
$sql = "insert into topic_info_sina(`title`,`content`,`weight`,`publish_time`,`deadline_time`,`annouce_time`,`add_time`) values (?,?,?,?,?,?,?)";
$res = $pdo->prepare($sql)->execute($data);

//$res = $prepare->execute($data);
debug($sql,$data);
 function debug($statement, array $params = [])
{
    $statement = preg_replace_callback(
        '/[?]/',
        function ($k) use ($params) {
            static $i = 0;
            return sprintf("'%s'", $params[$i++]);
        },
        $statement
    );

    echo '<pre>Query Debug:<br>', $statement, '</pre>';
}

var_dump($res);
var_dump($pdo->errorInfo());