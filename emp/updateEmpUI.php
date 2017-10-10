<?php
/**
 * 进行用户验证
 */
require_once 'common.php';
checkUser(); 
?>
<html>
<!--这个是专门针对更新用户信息设计的界面-->
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<?php
require_once 'Emp.class.php';
require_once 'EmpService.class.php';
$id=$_GET['id'];
//获得其他参数。
$empService=new EmpService();
//获取Emp对象。
$emp=$empService->getEmpById($id);
?>
<center><h1><font size='30px'>这里是更新用户信息的界面</font></h1></center>
<br/>
<br/>
<form action="empProcess.php" method="post">
<table align="center" cellpadding="10px">
<tr align="center">
<td>您的ID是：</td>
<td><input readonly="readonly" type="text" name="id" value="<?php echo $emp->getid()?>"/></td>
</tr>

<tr align="center">
<td>请输入您的新姓名：</td>
<td><input type="text" name="name" value="<?php echo $emp->getname()?>"/></td>
</tr>

<tr align="center">
<td>请输入您的新等级：</td>
<td><input type="text" name="grade" value="<?php echo $emp->getgrade()?>"/></td>
</tr>

<tr align="center">
<td>请输入您的新邮箱：</td>
<td><input type="text" name="email" value="<?php echo $emp->getemail()?>"/></td>
</tr>

<tr align="center">
<td>请输入您的新薪水：</td>
<td><input type="text" name="salary" value="<?php echo $emp->getsalary()?>"/></td>
</tr>
<input type="hidden" name="type" value="update"/>
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