<?php

/**
 * 进行用户验证
 */
require_once 'common.php';
checkUser();


    $admin_name=$_GET['name'];
    require_once 'common.php';
    getLastTime();
    echo "<center>";
    if(!$admin_name)
    {
        die("没有收到用户名数据！");    
    }
    else 
    {
        echo "<font size='7'>".$admin_name."，欢迎您登陆本系统！<br/><br/>";
        echo "</font>";
    }

    echo "<font size='5'>";
    echo "<a href='empList.php'>管理用户</a><br/><br/>";
    echo "<a href='addEmp.php'>添加用户</a></a><br/><br/>";
    echo "<a href='#'>等待添加</a></a><br/><br/>";
    echo "<a href='#'>等待添加</a></a><br/><br/>";
    echo "</font size='5'>";
    echo "</center>";
?>