<?php
$text = <<<EOD
this will be row 1
this will be row 2
this will be row 3
this will be row 4
EOD;
$lines = explode(PHP_EOL,$text);
echo '<table border="1">'.PHP_EOL;
foreach ($lines as $line){
	echo '<tr>'.PHP_EOL.'<td>'.$line.'</td>'.PHP_EOL.'</tr>'.PHP_EOL;
}

echo '</table>'.PHP_EOL;
