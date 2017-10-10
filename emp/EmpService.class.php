<?php
require_once 'SqlHelper.class.php';
require_once 'Emp.class.php';
class EmpService
{
    private $sqlhelper;
    private $res;
    public function __construct()
    {
        $this->sqlhelper=new SqlHelper("localhost","Manager","hujun123@", "empmanage");
    }
    /**
     * 这个方法专门用于更新雇员信息
     */
    public function updateEmp($name, $grade, $email, $salary,$id)
    {
        $sql="update emp set name='{$name}',grade={$grade},
        email='{$email}',salary={$salary} where id={$id}";
        $result=$this->sqlhelper->dml($sql);
        mysql_close($this->sqlhelper->conn);
        return $result;
    }
    /**
     * 这个方法通过ID号取得雇员的其他信息
     */
    public function getEmpById($id)
    {
        $emp=new Emp();
        $sql="select * from emp where id={$id}";
        $this->res=$this->sqlhelper->dql($sql);
        if(!$this->res)
        {
            die("查询失败！".mysql_errno());
        }
        if(($row=mysql_fetch_assoc($this->res))!=null)
        {
            $emp->setid($row['id']);
            $emp->setemail($row['email']);
            $emp->setgrade($row['grade']);
            $emp->setname($row['name']);
            $emp->setsalary($row['salary']);
        }
        $this->closeAll();
        return $emp;
    }
    /**
     * 这个方法是专门针对添加用户的方法
     */
    public function addEmp($name,$grade,$email,$salary)
    {
        $sql="insert into emp(name,grade,email,salary) values ('{$name}',{$grade},'{$email}',{$salary})";
        
        $result=$this->sqlhelper->dml($sql);
        mysql_close($this->sqlhelper->conn);
        return $result;
    }
    public function getRowCount()
    {
        $sql="select count(*) from emp";
        $res=$this->sqlhelper->dql($sql);
        if(!$res)
        {
            die("查询失败！");
        }
        $row=mysql_fetch_row($res);
        $rowCount=$row[0];
        return $rowCount;
    }
    public function getResource($pageNow,$pageSize)
    {
        $x=($pageNow-1)*$pageSize;
        $sql="select * from emp order by id limit ".$x.",".$pageSize;
        $res=mysql_query($sql,$this->sqlhelper->conn);
        $this->res=$res;
        if(!$res)
        {
            die("获取资源失败！");
        }
        $arr=Array();//效仿discuz的写法，这是05版本的改进之处。
        $top=-1;
        while(($row=mysql_fetch_assoc($res))!=null)
        {
            $arr[++$top]=$row;
        }
        return $arr;
    }
    public function getSqlHelper()
    {
        return $this->sqlhelper;
    }
    public function getResource_unArray()
    {
        return $this->res;
    }
    public function closeAll()
    {
        mysql_free_result($this->res);
        mysql_close($this->sqlhelper->conn);
    }
    public function closeConn()
    {
        mysql_close($this->sqlhelper->conn);
    }
    public function deleteUser(&$id)
    {
        $sql="delete from emp where id={$id}";
        return $this->sqlhelper->dml($sql);
    }
}
?>