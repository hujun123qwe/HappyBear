<?php

/*
*	@copyright	hujun123qwe
*	@time		2015-08-12 09:10:24
*	@lastmodify	hujun123qwe
*/




class SQL_Engine{
	
	public $db;

	public function __construct($database='my_note'){
		$this->db = mysql_connect("localhost", "root", "hujun");
		mysql_select_db($database);
	}

	/************************************
	*遇到了很多错误，当我用mysql_fetch_array时
	*转化的数组始终是一个数据，无法得到全部的数据
	*只能使用新的数组来转存一下？？？
	*************************************/
	
	
	public function get_one($sql){
		$result = mysql_query($sql,$this->db);
		$values = array();
		//MYSQL_ASSOC表示只返回关联数组
		while($rows = mysql_fetch_array($result,MYSQL_ASSOC)){
			array_push($values, $rows['create_time']);
			array_push($values, $rows['item']);
		}
		return $values;
	}

	public function get_pic($sql){
		$result = mysql_query($sql, $this->db);
		$res = mysql_fetch_array($result);
		return $res;
	}
	
	public function insert_into($sql){
		$status = mysql_query($sql,$this->db);
		return $status;
	}
	
	
}

?>