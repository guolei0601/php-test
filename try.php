<?php

try{
	$a =  3/0;
	print_r($a);
}catch(Exception $e){
	print_r($e->getMessage());
}