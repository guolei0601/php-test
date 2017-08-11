<?php

set_time_limit(0);
$link = @mysql_connect('localhost:3306','root','');
if(!$link){
	die('Could not connect !');
}

mysql_select_db('Test');

$sql = "insert into T(A) values ('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd'),('abcd')";

echo 'start insert'.'</br>';
for($i= 0 ;$i <2000000000;$i++){
	mysql_query($sql);
}

echo 'end insert'.'</br>';
