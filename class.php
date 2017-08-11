<?php

class test_class{

	private $a = 1;

	private static function getA(){
		echo 'aaa';
	}
}

test_class::getA();