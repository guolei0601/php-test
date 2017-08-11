<?php

class testClass{

	public function __invoke(){
		echo " hello ,world";
	}
}

$n = new testClass();
$n();