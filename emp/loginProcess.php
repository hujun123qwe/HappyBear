<?php
// print_r($_COOKIE);
require_once 'AdminService.class.php';
$admin_id=$_POST['admin_id'];
$admin_password=$_POST['admin_password'];
$userinf=$_POST['userinf'];//记录用户是否要求浏览器记住用户密码
$checkCode=$_POST['checkCode'];
session_start();
/*
if($checkCode!=$_SESSION['checkCode'])
{
    header("Location:login.php?error=验证码输入错误，请重新输入！");
    exit();
}
*/
if(empty($userinf))//用户不允许记住用户名和密码
{
//     echo "用户不允许记住账号密码<br/>";
    //查看以前是否有cookie记录,如果有，则删除全部
    if(!empty($_COOKIE['name']))
    {
//         echo "将会删除cookie<br/>";
        setCookie("name",$admin_id,Time()-14*24*3600);
        setCookie("password",$admin_password,Time()-14*24*3600);
        setCookie("lasttime",date("Y年m月d日 H时m分s秒"),Time()-14*24*3600);
    }
}
else //用户允许记住用户名和密码
{
//     echo "用户允许浏览器记住账号密码<br/>";
    //先查看cookie中是否有以前的记录，如果有，显示上一次登录的时间；反之
    //提示是首次登陆，并保存住账号密码
    if(empty($_COOKIE['name']))//
    {
//         echo "将会创建cookie<br/>";
        setCookie("name",$admin_id,Time()+14*24*3600);
        setCookie("password",$admin_password,Time()+14*24*3600);
    }
}
// exit();

$adminservice=new AdminService();
$flag=$adminservice->checkAdmin($admin_id, $admin_password);
if($flag==1)
{
    session_start();
    /**
        将数据保存到session中，进行用户登录校验
     */
    $_SESSION['name']=$admin_id;
    header("Location:empMain.php?name=".$adminservice->getName($admin_id));
    exit();
}
else
{
    header("Location:login.php?error=用户名或者密码错误，请重新输入！");
    exit();
}
?>