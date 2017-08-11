<?php

$preChar = '';//对应excel位置
		$curChar = 'C';
		//$curNum = 3;

		for($i=0;$i<100;$i++) {
			
			getNo($preChar,$curChar);
			echo $preChar.$curChar.'1'.'<br/>';		
		}

 function getNo(&$preChar,&$curChar){

			$curChar ++ ;

			if($curChar > 'Z'){

				if($preChar == ''){
					$preChar ='A';
				 }
				else{
					$preChar = $preChar + 1;
				}

				$curChar = 'A' - 1;
			}
 }