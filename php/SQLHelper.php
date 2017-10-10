<?php
	class SQLHelper{
		private $mysqli;
		private static $host="localhost";
		private static $name="Manager";
		private static $password="hujun123@";
		private static $db = "test";

		public function __construct(){
			$this->$mysqli = new MySQLi(self::$host, self::$name, self::$password, self::$db);
			if($this->mysqli->connect_errno){
				die("Connected Fail".$this->myslqi->connect_error);
				$this->mysqli->query("set names utf8");
			}
		}

		public function execute_dql($sql){
			$res = $this->mysqli->query($sql) or die("操作dql出错".$this->mysqli->error);
			return $res;
		}

		public function execute_dml($sql){
			$res = $this->myqli->query($sql) or die("操作dml出错".$this->mysqli->error);

			if(!$res){
				return 0;
			}else{
				return 1;
			}
		}

	}


?>