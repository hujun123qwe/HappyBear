<?php
	class SQLTool{
		private $conn;
		private $ip="127.0.0.1";
		private $password="hujun123@";
		private $name = "Manager";
		private $db = "test";

		function SQLTool(){
			$this->conn = mysql_connect($this->ip, $this->name, $this->password);
			if(!$this->conn){
				die("连接失败");
			}
			mysql_select_db("test");
			mysql_query("set names utf8");
		}

		//执行select语句
		public function execute_dql($sql){
			$res = mysql_query($sql, $this->conn) or die(mysql_error());
			return $res;
		}

		//执行
		public function execute_dml($sql){
			$b = mysql_query($sql, $this->conn) or die(mysql_error());
			if(!$b){
				return 0;
			}else{
				if(mysql_affected_rows($tihs->conn)>0){
					return 1; //succeed;
				}else{
					return 2;
				}
			}
		}
	}
?>