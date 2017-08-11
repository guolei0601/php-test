<?php 

class test{
	private static $t = 1;

	public static function hello(){
		echo(self::$t);
	}
}

test::hello();