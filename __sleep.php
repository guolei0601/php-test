<?php
 
class A { 
 public $b; 
 public $name; 
} 

class B extends A { 
	 public $parent; 
	 public function __wakeup() { 
	  var_dump($parent->name); 
	 } 
} 

$a = new A(); 
$a->name = "foo"; 
$a->b = new B(); 

//我们期望这里输出：foo，但实际在后面的代码执行之后，实际输出NULL.

$a->b->parent = $a; 
$s = serialize($a); 
$a = unserialize($s); 
?>