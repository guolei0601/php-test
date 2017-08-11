<?php
$url = "http://www.tradingeconomics.com/bonds";

$doc =  new DOMDocument();
$doc->loadHTMLFile($url);
$xpath =  new DOMpath($doc);

$elements = $xpath->query('<table class="table table-condensed table-hover">');

var_dump($elements);
//$contents = file_get_contents($url);

