<?php
/**
 * 进行用户验证
 */
require_once 'common.php';
checkUser();

require_once 'EmpService.class.php';

$type=$_REQUEST['type'];
if($type=="del")
{
    $id=$_GET['id'];
    $pageNow=$_GET['pageNow'];
    if(empty($id))
    {
        die("没有收到雇员的ID号数据！");
    }
    //创建一个EmpService的对象
    $empservice=new EmpService();
    $flag=$empservice->deleteUser($id);
    if($flag==1)
    {
        header("Location:success.php?id={$id}&pageNow={$pageNow}");
        exit();
    }
    header("Location:error.php?id={$id}");
    exit();
}
else
    if($type=="add")
    {
        $empService=new EmpService();
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        $salary=$_POST['salary'];
        $result=$empService->addEmp($name, $grade, $email, $salary);
        if($result!=1)
        {
            die("添加用户失败！".mysql_errno());
        }
        else 
        {
            echo "添加成功！<a href='addEmp.php'>返回上一级</a>";
        }
    }
else 
    if($type=="update")
    {
        $empService=new EmpService();
        $id=$_POST['id'];
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        $salary=$_POST['salary'];
        $result=$empService->updateEmp($name, $grade, $email, $salary,$id);
        if($result!=1)
        {
            die("更新用户信息失败！".mysql_errno());
        }
        else
        {
            echo "更新用户信息成功！<a href='updateEmpUI.php?id={$id}'>返回上一级</a>";
        }
    }

?>