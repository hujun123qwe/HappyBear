<?php
require_once 'SqlHelper.class.php';
class AdminService
{
    public function checkAdmin($get_id,$get_password)
    {
        $sql="select password from admin where id='".$get_id."'";
        //建立一个SqlHelper.class.php对象
        $sqlhelper=new SqlHelper("localhost","Manager","hujun123@","empmanage");
        $res=$sqlhelper->dql($sql);
        $row=mysql_fetch_assoc($res);
        mysql_free_result($res);
        mysql_close($sqlhelper->conn);
        if($row)
        {
            $password=$row['password'];
            if($get_password==$password)
            {
                return 1;
            }
            return 0;
        }
        return 0;
    }
    public function getName($id)
    {
        $sqlhelper=new SqlHelper("localhost","Manager","hujun123@","empmanage");
        $sql="select name from admin where id='".$id."'";
        $res=$sqlhelper->dql($sql);
        $row=mysql_fetch_assoc($res);
        if($row)
        {
            mysql_free_result($res);
            mysql_close($sqlhelper->conn);
            return $row['name'];
        }
        die("查无此人！");
    }
}
?>