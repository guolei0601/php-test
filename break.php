<?php

for($i=0;$i<10;$i++){

	for($j=0;$j<10;$j++){

		if($j==2)
			continue;
		
		
		if($j==3)
			break;

		echo $j;
		echo '<br/>';
	}
}