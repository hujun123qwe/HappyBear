<?php
/**
 * 这个方法专门用于用户判断
 */
function checkUser()
{
    session_start();
    if(empty($_SESSION['name']))
    {
        header("Location:login.php?error=请先登录在进行其他操作！");
        exit();
    }
}
/**
 * 这个类中专门存放公共的方法，如取cookie等行为
 */
function getUserName()
{
    if(!empty($_COOKIE['name']))
    {
        return $_COOKIE['name'];
    }    
    else 
    {
        return "";
    }
}
function getPassword()
{
    if(!empty($_COOKIE['password']))
    {
        return $_COOKIE['password'];
    }
    else
    {
        return "";
    }
}
function getLastTime()
{
    date_default_timezone_set("Asia/Chongqing");
    if(empty($_COOKIE['lasttime']))
    {
        setCookie("lasttime",date("Y年m月d日 H时m分s秒"),Time()+14*24*3600);
        echo  "您是第一次登陆本系统!";
    }
    else 
    {
        setCookie("lasttime",date("Y年m月d日 H时m分s秒"),Time()+14*24*3600);
        echo "您上一次的登录时间是：".$_COOKIE['lasttime'];
    }
}
?>