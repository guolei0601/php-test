<?php


class MY_PDO{

	private static $db_arr;
	private $pdo;
	//单例模式，返回pdo
	public function __construct($dsn_name){

		if(empty(self::$db_arr)){
			$filename = "./mysql.conf";
			$handle = fopen($filename, "r");
			$contents = fread($handle, filesize($filename));
			fclose($handle);
			$db_arr = explode("\n", $contents);
			$db_arr_new = array();
			foreach ($db_arr as $key => $val) {
				if(empty($val)) continue;
				$cur_db = explode("=>", $val);
				@$db_arr_new[trim($cur_db[0])] = trim($cur_db[1]);
			}

			self::$db_arr = $db_arr_new;
		}

		if(!isset(self::$db_arr[$dsn_name])){
			exit("dsn name not exist! please make sure add configure!");
		}

		$conn = self::$db_arr[$dsn_name];
		$mysql_v = parse_url($conn);
		$mysql_v['dbname'] = trim(substr($mysql_v['path'], 1));

		//var_dump($mysql_v);exit;
		$dsn = "mysql:dbname=".$mysql_v['dbname'].";host=".$mysql_v['host'].";port=".$mysql_v['port'];
		$username = $mysql_v['user'];
		$password = $mysql_v['pass'];
		$this->pdo = new pdo($dsn,$username,$password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		//set names
		$query = $this->pdo->query('set names utf8');
		$query->fetchAll();

		
		//return $this->pdo;
	}

	//获取一个值
	public function getOne($sql){
		$res = "";
		$query = $this->pdo->query($sql ." limit 1",PDO::FETCH_NUM);
		$res = current($query->fetchAll());
		
		return $res[0];
	}

	//获取一行记录
	public  function getRow($sql){
		$res = "";
		$query = $this->pdo->query($sql ." limit 1",PDO::FETCH_ASSOC);
		$res = current($query->fetchAll());
		
		return $res;
	}

	//获取所有记录
	public function getAll($sql){
		//print_r($sql);
		$query = $this->pdo->query($sql,PDO::FETCH_ASSOC);
		$res   = $query->fetchAll();
		return $res;
	}

	//执行一条语句
	public function execute($table,$data,$method,$where =''){
		
		switch($method){
			case 'insert':
			$res = $this->_getInsertSql($table,$data);
			break;

			case 'update':
			$res = $this->_getUpdateSql($table,$data,$where);
			break;

			case 'replace':
			$res = $this->_getReplaceSql($table,$data);
			break;

			case 'delete':
			$res = $this->_getDeleteSql($table,$data,$where);
			break;

			default :
			exit("mysql wrong method");
		}

		//print_r($res);
		$stmt = $this->pdo->prepare($res['pre_sql']);
		$result  = $stmt->execute(array_values($res['data']));
		//$errorCode = $stmt->errorCode;
		//print_r($errorCode);
		//$arr = $stmt->errorInfo();
		//print_r($arr);
		//$this->debug($res['pre_sql'], $res['data']);
		//$result = $st->execute($res['data']);
		//$result = $st->fetchAll();
		//var_dump($result);

		//$result = $st->fetchAll($res['data']);
		//var_dump($result);

		//print_r($st->errorInfo());
		//print_r(self::$pdo->errorInfo());
		//print_r($sql);exit;
		//$count = self::$pdo->exec($sql);
		if($method == 'insert'){
			return $this->pdo->lastInsertId();
		}else{
			return $result;
		}

	}



	//获取插入语句
	private function _getInsertSql($table,$data){
		$sql_str = " insert into ".$table;
		if(!is_array($data)){
			echo "insert wrong data"; exit;
		}
		$keyValue = $this->_getKeyValue($data);
		$sql_str .= $keyValue['key']." values ".$keyValue['rep'];
		return array('pre_sql'=>$sql_str,'data'=>$keyValue['val']);
	}

	//获取删除语句
	private function _getDeleteSql($table,$data,$where){

		if(empty($where)){
			echo "please add where condition";
		}
		$sql_str = "delete from  `".$table."` where ";
		
		return array('pre_sql'=>$sql_str,'data'=>array());

		
	}

	//获取更新语句
	private function _getUpdateSql($table,$data,$where){
		if(empty($where)){
			echo "please add where condition";
		}
		$sql_str = "update `".$table."` set ";
		$val = array();

		foreach ($data as $key => $value) {
			$sql_str .= '`'.$key.'` = ?,';
			$val[] = $value;
		}
		$sql_str = substr($sql_str,0,-1);

		$pre_sql = $sql_str." where ".$where;
		return array('pre_sql'=>$pre_sql,'data'=>$val);
		//return $sql_str." where ".$where;
	}

	//获取replace语句
	private function _getReplaceSql($table,$data){
		$sql_str = " replace into ".$table;
		if(!is_array($data)){
			echo "replace wrong data"; exit;
		}
		$keyValue = $this->_getKeyValue($data);


		$sql_str .= $keyValue['key']." values ".$keyValue['rep'];
		return array('pre_sql'=>$sql_str,'data'=>$keyValue['val']);
	}

	//获取字段和值
	private function _getKeyValue($data){
		$data_key = "(";
		$rep_val = "(";
		$data_val = array();
		foreach ($data as $key => $value) {
			$data_key .= "`".$key."`,";
			$rep_val .= "?,";
			$data_val[] = $value;
		}
		$data_key = substr($data_key, 0,-1).")";
		$rep_val  = substr($rep_val , 0,-1).")";
		//$data_val = substr($data_val,0,-1).")";
		return array('key'=>$data_key,'val'=>$data_val,'rep'=>$rep_val);
	}


}

