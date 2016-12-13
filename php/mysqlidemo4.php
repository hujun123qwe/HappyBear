<?php

	//预处理语句
	//1.创建mysqliduix

	$mysqli = new MySQLi("localhost", "Manager", "hujun123@", "test");

	//2.创建预处理对象
	$name = "江小吕";
	$genda = "girl";

	$sql = "insert into user1 (name, genda) values(?, ?);";
	$mysqli_stmt = $mysqli->prepare($sql) or die($myslqi->error);
	$mysqli_stmt->bind_param('ss', $name, $genda);

	$b = $mysqli_stmt->execute();
	if(!$b){
		die("fail".$mysqli_stmt->error);
	}else{
		echo "succeed<br/>";
	}
	$mysqli_stmt->close();
	$mysqli->close();
?>