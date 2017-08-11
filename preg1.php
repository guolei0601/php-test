
<?php 

$url = '< a href=\"http://finance.sina.com.cn/chanjing/gsnews/2017-03-08/doc-ifychhus0089010.shtml?cref=cj\">';

$preg = '/<\s*a[^h]+href=\\\\"(.*?)\\\\">/is';

preg_match($preg, $url, $matches);

print_r($matches);


$str = "abceadedddd";
$preg = '#a[\w]+?e#U';
preg_match($preg, $str, $matches);

print_r($matches);

/*$str = "http://www.forta.com/";
echo $str;

preg_match('/.+(?=:)/',$str,$matches);

var_dump($matches);

$str1 = "ABC01: $23.45";

$pattern = '/(?<=\$)[0-9.]+/';

preg_match($pattern,$str1,$matches1);
var_dump($matches1);

$str2 = "<num>35</num>
<num>36</num>
";

$pattern = '/(?<=\>)[0-9.]+/';

preg_match($pattern,$str2,$matches2);

echo 333;
var_dump($matches2);

$pattern = '/\<num\>[0-9]+\<\/num\>/';

preg_match_all($pattern,$str2,$matches2);

var_dump($matches2);
*/