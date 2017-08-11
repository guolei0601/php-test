<?php

$chr = array_combine(range(32,126),array_map('chr', range(32, 126)));

var_dump($chr);

$ord = array_flip($chr);
$first = reset($chr);
$last  = end($chr);

var_dump($ord);

var_dump($first);

var_dump($last);