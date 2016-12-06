<?php
/**
 * 进行用户验证
 */
require_once 'common.php';
checkUser(); 
?>


<html>
<!--这个是专门针对添加用户设计的界面-->
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<center><h1><font size='30px'>这里是添加用户的界面</font></h1></center>
<br/>
<br/>
<form action="empProcess.php" method="post">
<table align="center" cellpadding="10px">

<tr align="center">
<td>请输入姓名：</td>
<td><input type="text" name="name"/></td>
</tr>

<tr align="center">
<td>请输入您的等级：</td>
<td><input type="text" name="grade"/></td>
</tr>

<tr align="center">
<td>请输入您的邮箱：</td>
<td><input type="text" name="email"/></td>
</tr>

<tr align="center">
<td>请输入您的薪水：</td>
<td><input type="text" name="salary"/></td>
</tr>
<input type="hidden" name="type" value="add"/>
<tr align="center">
<td><input type="submit" name="submit" value="单击提交" /></td>
<td><input type="reset" name="reset" value="重新输入" /></td>
</tr>
<tr>
<td colspan="2"><a href="empMain.php?name=admin">单击返回上一级</a></td>
</tr>
</table>
</form>
</body>
</html>