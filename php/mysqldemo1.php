<?php
//mysql扩展库
//1.获取连接

$conn = mysql_connect("127.0.0.1","Manager", "hujun123@");
if(!$conn){
	die ("连接失败".mysql_error());
}else{
	echo "连接成功";
}
//2.选择数据库

	mysql_select_db("test");

//3.设置操作码

	//mysql_query("set names utf8");

//4.发送指令sql（ddl 数据定义语句，dml 数据操作语句，dql （select），dtl 数据事务语句(rollback commit)）

	$sql = "select * from user1";
	$res = mysql_query($sql, $conn);

	//var_dump($res);
	//$row就是一个数组
	while($row = mysql_fetch_row($res)){
		//echo "<br/>$row[0]--$row[1]";
		foreach($row as $key => $values){
			echo "--$values";
		}
		echo "<br/>";
	}

//5.接受返回语句并处理
//6.关闭数据库，释放资源
	mysql_free_result($$res);
	mysql_close($conn);
?>