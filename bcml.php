<?php

function getRes($n){
	$res = 1;
	if($n == 1){
		return 1;
	}else{
		return bcmul($n,getRes($n - 1));
	}
}

echo getRes(5);