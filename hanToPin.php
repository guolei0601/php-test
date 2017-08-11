<?php
require_once "pinyin.php";
echo CUtf8_PY::encode('何晓宇给我介绍个女朋友吧'); //编码为拼音首字母
echo '<br/>'; 
echo CUtf8_PY::encode('何晓宇给我介绍个女朋友吧', 'all'); //编码为全拼音