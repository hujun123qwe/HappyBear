<?php
require_once 'common.php';
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<!--此版本完成了验证码验证的问题-->

<body>
<h1>管理员登陆界面</h1>
<form action="loginProcess.php" method="post">
<table>
<tr>
<td>请输入用户id:</td>
<td><input type="text" name="admin_id" value="<?php echo getUserName();?>"/></td>
</tr>

<tr>
<td>请输入用户密码:</td>
<td><input type="password" name="admin_password" value="<?php echo getPassword();?>"/></td>
</tr>

<tr>
<td>请输入验证码:</td>
<td><input type="text" name="checkCode"/></td>
<td><img src="checkCode.php" onclick="this.src='checkCode.php?re='+Math.random()"/></td>
</tr>
<tr>
<td colspan="2">
两周内免登陆本系统：
<input type="checkbox" name="userinf" value="on" checked="checked"/>
</td>
</tr>

<tr>
<td><input type="submit" value="单击登陆"/></td>
<td><input type="reset" value="重新填写"/></td>
</tr>
</table>
</form>

<?php
$error="初始值";
$error=$_GET['error'];//使用header传递参数，默认的提交方式是GET
echo "<font color=red>".$error."</font>";

?>
</body>
</html>