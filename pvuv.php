<?php

		
		$pattern = '/\d{4}-\d{2}-\d{2}/';
		$day = $_GET['day'];
		if(!isset($day) || !preg_match($pattern,$day)){
			echo json_encode(array('code'=>-1,'msg'=>'params error','res'=>''));
			exit;
		}
		else{
			//$day = $_GET['day'];
			echo json_encode(array('pv' =>_getdata(),'uv'=>_getdata()));
			exit;
		}


	//test todo
 function _getdata(){

		$res = array();
		for($i=0;$i<24;$i++){
			if($i < 10) $key = '0'.$i;
			else        $key = $i;
			$res[$key] = rand(0,10000);
		}

		return $res;
	}