<?php
class SqlHelper
{
    public $host;
    public $user;
    public $psw;
    public $dbname;
    public $conn;
    public function __construct($host,$user,$psw,$dbname)
    {
        $this->host=$host;
        $this->user=$user;
        $this->psw=$psw;
        $this->dbname=$dbname;
        $this->conn=mysql_connect($this->host,$this->user,$this->psw);
        if(!$this->conn)
        {
            var_dump($this->user);
            var_dump($this->psw);
            die("数据库连接失败！".mysql_error());
        }
        mysql_select_db($this->dbname);
        //mysql_query("set names utf8",$this->conn);
    }
    public function dql($sql)
    {
        $res=mysql_query($sql,$this->conn);
        if(!$res)
        {
            die("查询失败！".mysql_error());
        }
        else return $res;
    }
    public function dml($sql)
    {
        $res=mysql_query($sql,$this->conn);
        if(!$res)
        {
            die("数据更新失败！".mysql_error());
        }
        else if(mysql_affected_rows($this->conn))
        {
            return 1;
        }
        else 
        {
            return 2;
        }
    }
}
?>