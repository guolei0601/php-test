<?php

$checksum = crc32("1");
printf("%u\n", $checksum);

echo '<br/>';

echo fmod(35.0,7.8);

echo '<br>';

$x = 5.7;
$y = 1.3;
$r = fmod($x, $y);
echo $r;