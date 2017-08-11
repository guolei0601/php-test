<?php
// 设置内容类型标头 —— 这个例子里是 image/jpeg
header('Content-Type: image/jpeg');
$im = imagecreatefromjpeg('http://i6.topit.me/6/5d/45/1131907198420455d6o.jpg');
imagejpeg($im);
//echo $im;
?>