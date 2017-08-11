<?php

function getNum($i){

	if($i ==1){
		echo 3;
		exit;
	}
}

@getNum(1);

echo 4;
